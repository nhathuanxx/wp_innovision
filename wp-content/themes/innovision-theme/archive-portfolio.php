<?php
/**
 * Template Name: Portfolio
 */
get_header();
$lang = pll_current_language('slug');

// Lấy tất cả categories của Portfolio
$categories_args = array(
    'taxonomy'   => 'portfolio_category',
    'hide_empty' => false,
    'orderby'    => 'name',
    'order'      => 'ASC'
);

$categories = get_terms($categories_args);

// Nếu dùng Polylang, lọc categories theo ngôn ngữ hiện tại
if (function_exists('pll_current_language') && !empty($categories) && !is_wp_error($categories)) {
    $current_lang = pll_current_language();
    $filtered_categories = array();
    
    foreach ($categories as $category) {
        $term_lang = pll_get_term_language($category->term_id);
        if ($term_lang === $current_lang) {
            $filtered_categories[] = $category;
        }
    }
    
    $categories = $filtered_categories;
}

// ===== LOGIC MỚI: Tạo mảng đếm số bài viết cho mỗi category =====
$category_post_counts = array();

if (!empty($categories) && !is_wp_error($categories)) {
    foreach ($categories as $category) {
        $count_args = array(
            'post_type'      => 'portfolio',
            'post_status'    => 'publish',
            'posts_per_page' => 1, // Chỉ cần check có hay không
            'tax_query'      => array(
                array(
                    'taxonomy' => 'portfolio_category',
                    'field'    => 'term_id',
                    'terms'    => $category->term_id,
                ),
            ),
        );
        
        // Nếu dùng Polylang
        if (function_exists('pll_current_language')) {
            $count_args['lang'] = pll_current_language();
        }
        
        $count_query = new WP_Query($count_args);
        $category_post_counts[$category->term_id] = $count_query->found_posts;
        wp_reset_postdata();
    }
}
// ===== KẾT THÚC LOGIC MỚI =====

// Ảnh mặc định
$default_image = get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-p8p-300h.png';

// Translations
$translations = array(
    'vi' => array(
        'title' => 'DỰ ÁN CỦA CHÚNG TÔI',
        'subtitle1' => 'Xem cách INNOVISION cung cấp các giải pháp AI tùy chỉnh cho từng ngành',
        'subtitle' => 'Chúng tôi xây dựng các giải pháp AI nhanh chóng, có khả năng mở rộng, từ nền tảng LLM đến hệ thống Edge và nhúng, giúp các đội nhóm triển khai thông minh hơn và đổi mới nhanh hơn. Các dự án của chúng tôi trải dài qua nhiều trường hợp sử dụng thực tế trong các ngành công nghiệp, chứng minh cách AI hiện đại và kỹ thuật có thể tạo ra tác động tức thì và hữu hình.',
        'all_project' => 'Tất cả dự án',
        'no_projects' => 'Không có dự án nào được tìm thấy.',
        'load_more' => 'Xem thêm'
    ),
    'en' => array(
        'title' => 'OUR PROJECTS',
        'subtitle1' => 'See how INNOVISION delivers AI-driven solutions across industries',
        'subtitle' => 'We build fast, scalable AI solutions, from LLM platforms to Edge and embedded systems, that help teams ship smarter and innovate faster. Our projects span real-world use cases across industries, proving how modern AI and engineering can create immediate, tangible impact.',
        'all_project' => 'All Project',
        'no_projects' => 'No projects found.',
        'load_more' => 'Load more'
    )
);

// Get current language translations
$t = $translations[$lang] ?? $translations['en'];
?>

<?php get_template_part('template-parts/page','title-new',[
  'title' => $t['title'],
  'subtitle1' => $t['subtitle1'],
  'subtitle' => $t['subtitle'],
]); ?>

<div class="portfolio-container">
  <!-- Tabs -->
  <div class="tabs-container">
    <!-- Tab All -->
    <div class="tab-item active" data-tab="all">
      <?php echo esc_html($t['all_project']); ?>
    </div>
    
    <!-- Dynamic Tabs từ Categories -->
    <?php if (!empty($categories) && !is_wp_error($categories)) : ?>
      <?php foreach ($categories as $category) : ?>
        <div class="tab-item" 
             data-tab="<?php echo esc_attr($category->term_id); ?>"
             data-has-posts="<?php echo esc_attr($category_post_counts[$category->term_id] > 0 ? '1' : '0'); ?>">
          <?php echo esc_html($category->name); ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <!-- Projects -->
  <div class="projects-container">
    <?php
    // Số bài viết hiển thị ban đầu và mỗi lần load more
    $posts_per_page = 9;
    
    // Query tất cả Portfolio posts
    $portfolio_args = array(
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    );

    // Nếu dùng Polylang, lọc theo ngôn ngữ
    if (function_exists('pll_current_language')) {
        $portfolio_args['lang'] = pll_current_language();
    }

    $portfolio_query = new WP_Query($portfolio_args);

    if ($portfolio_query->have_posts()) :
        $post_index = 0;
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            
            // Lấy ảnh đại diện
            $thumbnail_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : $default_image;
            
            // Lấy categories của post này
            $post_categories = wp_get_post_terms(get_the_ID(), 'portfolio_category', array('fields' => 'ids'));
            $category_ids = !empty($post_categories) && !is_wp_error($post_categories) ? implode(',', $post_categories) : '';
            
            // Ẩn các bài viết sau 9 bài đầu
            $hidden_class = ($post_index >= $posts_per_page) ? 'portfolio-hidden' : '';
    ?>
      
      <a href="<?php the_permalink(); ?>" 
         class="project-item <?php echo esc_attr($hidden_class); ?>" 
         data-category="<?php echo esc_attr($category_ids); ?>">
        <img src="<?php echo esc_url($thumbnail_url); ?>" 
             alt="<?php echo esc_attr(get_the_title()); ?>">
        <span><?php the_title(); ?></span>
      </a>

    <?php
            $post_index++;
        endwhile;
        wp_reset_postdata();
        
        // Chỉ hiện nút Load More nếu có nhiều hơn 9 bài
        $show_load_more = ($post_index > $posts_per_page);
    else :
    ?>
      <div class="no-projects">
        <p><?php echo esc_html($t['no_projects']); ?></p>
      </div>
    <?php 
        $show_load_more = false;
    endif; 
    ?>
  </div>

  <!-- Load More Button -->
  <?php if ($show_load_more) : ?>
  <div class="load-more-container">
    <button class="load-more-button" id="loadMoreBtn">
      <span><?php echo esc_html($t['load_more']); ?></span>
    </button>
  </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>

<style>
  /* Container */
  .portfolio-container {
    padding: 50px 20px 80px;
    display: flex;
    flex-direction: column;
    gap: 30px;
    max-width: 100%;
  }

  /* Reset link styles */
  .portfolio-container a {
    color: inherit;
    text-decoration: none;
  }

  /* Tabs */
  .tabs-container {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
    padding: 8px;
    max-width: 1320px;
    margin: 0 auto;
    border: 1px solid rgba(118, 118, 128, 0.12);
    border-radius: 8px;
  }

  .tab-item {
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    background-color: rgba(118, 118, 128, 0.12);
    color: #474363;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-size: 16px;
    line-height: 28px;
    transition: all 0.3s ease;
    white-space: nowrap;
  }

  .tab-item:hover {
    background-color: rgba(118, 118, 128, 0.2);
  }

  .tab-item.active {
    background-color: #306BFF;
    color: #FFFFFF;
  }

  /* Projects */
  .projects-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    max-width: 1320px;
    width: 100%;
    margin: 0 auto;
  }

  .project-item {
    display: flex;
    flex-direction: column;
    gap: 16px;
    padding: 16px;
    background: #FFFFFF;
    border-radius: 16px;
    box-shadow: 0px 1px 4px rgba(12, 12, 13, 0.1);
    transition: all 0.3s ease;
    cursor: pointer;
  }

  .project-item:hover {
    box-shadow: 0px 8px 24px rgba(60, 144, 252, 0.15);
    transform: translateY(-4px);
  }

  .project-item img {
    width: 100%;
    height: 218px;
    border-radius: 16px;
    object-fit: cover;
  }

  .project-item span {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: 16px;
    line-height: 28px;
    color: #474363;
    text-align: center;
  }

  /* No Projects */
  .no-projects {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    color: #474363;
  }

  /* Hidden items for Load More */
  .portfolio-hidden {
    display: none !important;
  }

  /* Load More Button */
  .load-more-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  .load-more-button {
    padding: 20px 36px;
    border-radius: 10px;
    background: #306BFF;
    border: 1px solid #0D51FF;
    box-shadow: 0px 10px 19px rgba(49, 107, 255, 0.28);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .load-more-button::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    transform: translate(-50%, -50%);
    transition: width 0.6s ease, height 0.6s ease;
  }

  .load-more-button:hover::before {
    width: 300px;
    height: 300px;
  }

  .load-more-button:hover {
    background: #4178FF;
    transform: translateY(-2px);
    box-shadow: 0px 15px 25px rgba(49, 107, 255, 0.35);
  }

  .load-more-button:active {
    transform: translateY(0);
    box-shadow: 0px 8px 15px rgba(49, 107, 255, 0.25);
  }

  .load-more-button span {
    color: #FFFFFF;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: 20px;
    position: relative;
    z-index: 1;
  }

  .homepage-footer {
    top: auto !important;
  }

  /* Responsive */
  @media (max-width: 1400px) {
    .portfolio-container {
      padding: 50px 40px 80px;
    }

    .projects-container {
      gap: 24px;
    }
  }

  @media (max-width: 1024px) {
    .portfolio-container {
      padding: 40px 30px 70px;
    }

    .projects-container {
      grid-template-columns: repeat(2, 1fr);
      gap: 24px;
    }

    .tab-item {
      font-size: 15px;
      padding: 9px 18px;
    }
  }

  @media (max-width: 768px) {
    .portfolio-container {
      padding: 40px 24px 60px;
      gap: 24px;
    }

    .tabs-container {
      gap: 12px;
      padding: 6px;
    }

    .tab-item {
      font-size: 14px;
      padding: 8px 16px;
      line-height: 24px;
    }

    .projects-container {
      grid-template-columns: 1fr;
      gap: 20px;
    }

    .project-item {
      max-width: 500px;
      margin: 0 auto;
      width: 100%;
    }

    .project-item img {
      height: 200px;
    }

    .project-item span {
      font-size: 15px;
      line-height: 24px;
    }

    .load-more-button {
      padding: 18px 32px;
    }

    .load-more-button span {
      font-size: 18px;
    }
  }

  @media (max-width: 480px) {
    .portfolio-container {
      padding: 30px 15px 50px;
      gap: 20px;
    }

    .tabs-container {
      gap: 8px;
      padding: 6px;
      flex-wrap: wrap;
    }

    .tab-item {
      font-size: 13px;
      padding: 7px 14px;
      line-height: 20px;
    }

    .projects-container {
      gap: 16px;
    }

    .project-item {
      padding: 12px;
      gap: 12px;
    }

    .project-item img {
      height: 180px;
      border-radius: 12px;
    }

    .project-item span {
      font-size: 14px;
      line-height: 22px;
    }

    .load-more-container {
      margin-top: 20px;
    }

    .load-more-button {
      padding: 16px 28px;
      width: 100%;
      max-width: 300px;
    }

    .load-more-button span {
      font-size: 16px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-item');
    const projects = document.querySelectorAll('.project-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const itemsPerLoad = 9;
    const comingSoonUrl = '<?php echo $lang == 'vi' ? esc_url(home_url('/vi/sap-ra-mat')) : esc_url(home_url('/coming-soon')); ?>';

    // ===== LOGIC MỚI: Kiểm tra và redirect đến coming-soon =====
    // function checkAndRedirectIfEmpty(selectedTab) {
    //   // Bỏ qua nếu là tab "All"
    //   if (selectedTab === 'all') {
    //     return false;
    //   }

    //   // Kiểm tra xem tab này có bài viết không
    //   const activeTab = document.querySelector('.tab-item[data-tab="' + selectedTab + '"]');
    //   if (activeTab && activeTab.dataset.hasPosts === '0') {
    //     // Redirect đến trang coming-soon
    //     window.location.href = comingSoonUrl;
    //     return true;
    //   }

    //   return false;
    // }
    // ===== KẾT THÚC LOGIC MỚI =====

    // Tab filtering
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const selectedTab = tab.dataset.tab;

        // ===== KIỂM TRA TRƯỚC KHI LỌC =====
        // if (checkAndRedirectIfEmpty(selectedTab)) {
        //   return; // Dừng xử lý nếu đang redirect
        // }
        // ===== KẾT THÚC KIỂM TRA =====

        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        
        // Add active class to clicked tab
        tab.classList.add('active');

        // Filter projects
        let visibleCount = 0;
        
        projects.forEach(project => {
          const projectCategories = project.dataset.category.split(',');
          
          if (selectedTab === 'all') {
            // Show first 9 items, hide the rest
            if (visibleCount < itemsPerLoad) {
              project.classList.remove('portfolio-hidden');
              project.style.display = 'flex';
              visibleCount++;
            } else {
              project.classList.add('portfolio-hidden');
              project.style.display = 'none';
            }
          } else {
            // Check if project has the selected category
            if (projectCategories.includes(selectedTab)) {
              if (visibleCount < itemsPerLoad) {
                project.classList.remove('portfolio-hidden');
                project.style.display = 'flex';
                visibleCount++;
              } else {
                project.classList.add('portfolio-hidden');
                project.style.display = 'none';
              }
            } else {
              project.style.display = 'none';
            }
          }
        });

        // Show/hide Load More button
        updateLoadMoreButton();
      });
    });

    // Load More functionality
    if (loadMoreBtn) {
      loadMoreBtn.addEventListener('click', () => {
        const activeTab = document.querySelector('.tab-item.active');
        const selectedTab = activeTab ? activeTab.dataset.tab : 'all';
        let loadedCount = 0;

        projects.forEach(project => {
          // Check if item is hidden and matches current filter
          if (project.classList.contains('portfolio-hidden')) {
            const projectCategories = project.dataset.category.split(',');
            
            if (selectedTab === 'all' || projectCategories.includes(selectedTab)) {
              if (loadedCount < itemsPerLoad) {
                project.classList.remove('portfolio-hidden');
                project.style.display = 'flex';
                loadedCount++;
              }
            }
          }
        });

        // Hide button if no more items to load
        updateLoadMoreButton();
      });
    }

    // Function to show/hide Load More button
    function updateLoadMoreButton() {
      if (!loadMoreBtn) return;

      const activeTab = document.querySelector('.tab-item.active');
      const selectedTab = activeTab ? activeTab.dataset.tab : 'all';
      let hasHiddenItems = false;

      projects.forEach(project => {
        if (project.classList.contains('portfolio-hidden')) {
          const projectCategories = project.dataset.category.split(',');
          if (selectedTab === 'all' || projectCategories.includes(selectedTab)) {
            hasHiddenItems = true;
          }
        }
      });

      if (hasHiddenItems) {
        loadMoreBtn.parentElement.style.display = 'flex';
      } else {
        loadMoreBtn.parentElement.style.display = 'none';
      }
    }

    // Initial check
    updateLoadMoreButton();
  });
</script>