<?php
// ==============================
// Innovision Theme - functions.php
// ==============================

function innovision_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // add_theme_support('woocommerce'); // Comment lại vì không dùng WooCommerce
  add_theme_support('menus');
  add_theme_support('html5', array('search-form', 'gallery', 'caption'));
  load_theme_textdomain('innovision', get_template_directory() . '/languages');

  register_nav_menus(array(
    'main-menu'   => __('Main Menu', 'innovision'),
    'footer-menu' => __('Footer Menu', 'innovision'),
  ));
}
add_action('after_setup_theme', 'innovision_theme_setup');

function innovision_enqueue_assets()
{
  $theme_uri = get_template_directory_uri();


  wp_enqueue_style('bootstrap', $theme_uri . '/assets/css/bootstrap.min.css');
  wp_enqueue_style('jquery-ui', $theme_uri . '/assets/css/jquery-ui.css');
  wp_enqueue_style('flaticon', $theme_uri . '/assets/css/flaticon.css');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
  wp_enqueue_style('animate', $theme_uri . '/assets/css/animate.css', array(), '1.0.0');
  wp_enqueue_style('owl', $theme_uri . '/assets/css/owl.css', array(), '1.0.0');
  wp_enqueue_style('slick', $theme_uri . '/assets/css/slick.css', array(), '1.0.0');
  wp_enqueue_style('jquery-fancybox', $theme_uri . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0');
  wp_enqueue_style('jquery-mCustomScrollbar', $theme_uri . '/assets/css/jquery.mCustomScrollbar.min.css', array(), '1.0.0');
  wp_enqueue_style('jquery-bootstrap-touchspin', $theme_uri . '/assets/css/jquery.bootstrap-touchspin.css', array(), '1.0.0');
  wp_enqueue_style('responsive', $theme_uri . '/assets/css/responsive.css', array(), '1.0.0');
  wp_enqueue_style('color-switcher-design', $theme_uri . '/assets/css/color-switcher-design.css', array(), '1.0.0');
  wp_enqueue_style('theme-color-file', $theme_uri . '/assets/css/color-themes/default-theme.css', array(), '1.0.0');

  wp_enqueue_style(
    'innovision-style',
    $theme_uri . '/assets/css/style.css',
    array('bootstrap', 'font-awesome'),
    '1.0.0',
    'all'
  );
  wp_enqueue_style('innovision-bootstrap', $theme_uri . '/assets/css/bootstrap.css', array('innovision-style'), '1.0.0', 'all');

  wp_enqueue_style('innovision-responsive', $theme_uri . '/assets/css/responsive.css', array('innovision-style'), '1.0.0', 'all');

  // -----------------------------
  // JS
  // -----------------------------
  wp_enqueue_script('jquery');
  wp_enqueue_script('popper', $theme_uri . '/assets/js/popper.min.js', array('jquery'), null, true);
  wp_enqueue_script('bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script('mCustomScrollbar', $theme_uri . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), null, true);
  wp_enqueue_script('fancybox', $theme_uri . '/assets/js/jquery.fancybox.js', array('jquery'), null, true);
  wp_enqueue_script('appear', $theme_uri . '/assets/js/appear.js', array('jquery'), null, true);
  wp_enqueue_script('owl', $theme_uri . '/assets/js/owl.js', array('jquery'), null, true);
  wp_enqueue_script('wow', $theme_uri . '/assets/js/wow.js', array('jquery'), null, true);
  wp_enqueue_script('slick', $theme_uri . '/assets/js/slick.js', array('jquery'), null, true);
  wp_enqueue_script('isotope', $theme_uri . '/assets/js/isotope.js', array('jquery'), null, true);
  wp_enqueue_script('jquery-ui', $theme_uri . '/assets/js/jquery-ui.js', array('jquery'), null, true);
  wp_enqueue_script('color-settings', $theme_uri . '/assets/js/color-settings.js', array('jquery'), null, true);
  wp_enqueue_script('innovision-main', $theme_uri . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'innovision_enqueue_assets');

// -----------------------------
// Polylang
// -----------------------------
function innovision_register_strings()
{
  if (function_exists('pll_register_string')) {
    pll_register_string('innovision_site_title', get_bloginfo('name'), 'Innovision Theme');
    pll_register_string('innovision_description', get_bloginfo('description'), 'Innovision Theme');
  }
}
add_action('init', 'innovision_register_strings');
add_theme_support('post-thumbnails');

// -----------------------------
// ACF Options Page
// -----------------------------
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'   => 'Theme General Settings (' . pll_current_language('slug') . ')',
    'menu_title'  => 'Theme Settings (' . pll_current_language('slug') . ')',
    'menu_slug'   => 'theme-general-settings-' . pll_current_language('slug'),
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// -----------------------------
// Custom Archive Title
// -----------------------------

add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false); // chỉ lấy tên category
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  }
  return $title;
});

// ======================================================
// Blog AJAX - Load Posts với Filter & Pagination
// ======================================================

add_action('wp_enqueue_scripts', 'innovision_blog_enqueue_assets');
function innovision_blog_enqueue_assets()
{
  if (is_page_template(array('template-blog-ajax.php', 'template-blog.php'))) {
    wp_enqueue_script('innovision-blog-js', get_template_directory_uri() . '/assets/js/vinamek-blog.js', array('jquery'), '1.0', true);

    // Localize data for AJAX
    $ajax_data = array(
      'ajax_url' => admin_url('admin-ajax.php'),
      'nonce'    => wp_create_nonce('innovision_blog_nonce'),
      'posts_per_page' => 10,
      'lang' => function_exists('pll_current_language') ? pll_current_language('slug') : ''
    );
    wp_localize_script('innovision-blog-js', 'innovisionBlog', $ajax_data);
  }
}

/**
 * AJAX handler - returns posts HTML + pagination HTML
 */
add_action('wp_ajax_vinamek_load_posts', 'innovision_load_posts_ajax');
add_action('wp_ajax_nopriv_vinamek_load_posts', 'innovision_load_posts_ajax');

function innovision_load_posts_ajax()
{
  check_ajax_referer('innovision_blog_nonce', 'nonce');

  $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
  $category = isset($_POST['category']) && $_POST['category'] !== '' ? sanitize_text_field($_POST['category']) : '';
  $search = isset($_POST['s']) ? sanitize_text_field($_POST['s']) : '';
  $posts_per_page = isset($_POST['ppp']) ? intval($_POST['ppp']) : 10;
  $lang = isset($_POST['lang']) ? sanitize_text_field($_POST['lang']) : '';

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'paged' => $paged,
    's' => $search,
  );

  if ($category !== '') {
    $args['category_name'] = $category;
  }

  // Polylang support
  if ($lang && function_exists('pll_current_language')) {
    $args['lang'] = $lang;
  }

  $q = new WP_Query($args);

  ob_start();

  if ($q->have_posts()) {
    while ($q->have_posts()) {
      $q->the_post();
?>
      <article id="post-<?php the_ID(); ?>" class="post-card ajax-post-card">
        <a class="post-link" href="<?php the_permalink(); ?>">
          <div class="post-thumb">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              echo '<img src="' . get_template_directory_uri() . '/assets/img/placeholder-600x400.png" alt="' . esc_attr(get_the_title()) . '">';
            }
            ?>
          </div>
          <div class="post-body">
            <h3 class="post-title"><?php the_title(); ?></h3>
            <div class="post-meta">
              <span class="post-date"><?php echo get_the_date('d M, Y'); ?></span>
            </div>
            <div class="post-excerpt">
              <?php
              if (has_excerpt()) {
                echo wp_kses_post(wp_trim_words(get_the_excerpt(), 30, '...'));
              } else {
                echo wp_kses_post(wp_trim_words(get_the_content(), 30, '...'));
              }
              ?>
            </div>
          </div>
        </a>
      </article>
<?php
    }
    wp_reset_postdata();
  } else {
    echo '<p class="no-posts">Không có bài viết.</p>';
  }

  $posts_html = ob_get_clean();

  // pagination
  $total_pages = $q->max_num_pages;
  $pagination_html = '';

  if ($total_pages > 1) {
    $big = 999999999;
    $pagination_html = paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, $paged),
      'total' => $total_pages,
      'prev_text' => '&laquo; Trước',
      'next_text' => 'Sau &raquo;',
      'type' => 'list',
    ));
  }

  wp_send_json_success(array(
    'posts' => $posts_html,
    'pagination' => $pagination_html,
    'found' => $q->found_posts,
  ));
}


function innovision_register_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'innovision'),
    ]);
}
add_action('init', 'innovision_register_menus');

function remove_archive_title_prefix($title) {
    if (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = get_the_author();
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');



























/**
 * Register Custom Post Type: Solutions
 * Tương thích với ACF và Polylang
 */

function create_solutions_post_type() {
    $labels = array(
        'name'                  => _x('Solutions', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Solution', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Solutions', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Solution', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Thêm mới', 'textdomain'),
        'add_new_item'          => __('Thêm Solution mới', 'textdomain'),
        'new_item'              => __('Solution mới', 'textdomain'),
        'edit_item'             => __('Sửa Solution', 'textdomain'),
        'view_item'             => __('Xem Solution', 'textdomain'),
        'all_items'             => __('Tất cả Solutions', 'textdomain'),
        'search_items'          => __('Tìm kiếm Solutions', 'textdomain'),
        'parent_item_colon'     => __('Solution cha:', 'textdomain'),
        'not_found'             => __('Không tìm thấy Solutions', 'textdomain'),
        'not_found_in_trash'    => __('Không có Solutions trong thùng rác', 'textdomain')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'solutions'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'show_in_nav_menus'     => true, // ← ĐÃ THÊM DÒNG NÀY
        'hierarchical'          => false,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-lightbulb',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'show_in_rest'          => true,
        'can_export'            => true,
    );

    register_post_type('solutions', $args);
}
add_action('init', 'create_solutions_post_type');


/**
 * Register Custom Taxonomy: Solution Categories
 */
function create_solutions_taxonomy() {
    $labels = array(
        'name'              => _x('Solution Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Solution Category', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Tìm kiếm Categories', 'textdomain'),
        'all_items'         => __('Tất cả Categories', 'textdomain'),
        'parent_item'       => __('Category cha', 'textdomain'),
        'parent_item_colon' => __('Category cha:', 'textdomain'),
        'edit_item'         => __('Sửa Category', 'textdomain'),
        'update_item'       => __('Cập nhật Category', 'textdomain'),
        'add_new_item'      => __('Thêm Category mới', 'textdomain'),
        'new_item_name'     => __('Tên Category mới', 'textdomain'),
        'menu_name'         => __('Categories', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'solution-category'),
        'show_in_rest'      => true,
        'show_in_nav_menus' => true, // ← ĐÃ THÊM DÒNG NÀY
    );

    register_taxonomy('solution_category', array('solutions'), $args);
}
add_action('init', 'create_solutions_taxonomy');


/**
 * Kích hoạt Polylang cho Solutions CPT
 */
function solutions_polylang_support() {
    if (function_exists('pll_register_post_type')) {
        pll_register_post_type('solutions');
    }
    
    if (function_exists('pll_register_taxonomy')) {
        pll_register_taxonomy('solution_category');
    }
}
add_action('init', 'solutions_polylang_support', 20);


/**
 * Flush rewrite rules
 */
function solutions_rewrite_flush() {
    create_solutions_post_type();
    create_solutions_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'solutions_rewrite_flush');




/**
 * Register Custom Post Type: Portfolio
 * Tương thích với ACF và Polylang
 */

function create_portfolio_post_type() {
    $labels = array(
        'name'                  => _x('Portfolio', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Portfolio', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Portfolio', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Portfolio', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Thêm mới', 'textdomain'),
        'add_new_item'          => __('Thêm Portfolio mới', 'textdomain'),
        'new_item'              => __('Portfolio mới', 'textdomain'),
        'edit_item'             => __('Sửa Portfolio', 'textdomain'),
        'view_item'             => __('Xem Portfolio', 'textdomain'),
        'all_items'             => __('Tất cả Portfolio', 'textdomain'),
        'search_items'          => __('Tìm kiếm Portfolio', 'textdomain'),
        'parent_item_colon'     => __('Portfolio cha:', 'textdomain'),
        'not_found'             => __('Không tìm thấy Portfolio', 'textdomain'),
        'not_found_in_trash'    => __('Không có Portfolio trong thùng rác', 'textdomain')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'portfolio'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'show_in_nav_menus'     => true,
        'hierarchical'          => false,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-portfolio',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'revisions'),
        'show_in_rest'          => true,
        'can_export'            => true,
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_post_type');


/**
 * Register Custom Taxonomy: Portfolio Categories
 */
function create_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x('Portfolio Categories', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Portfolio Category', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Tìm kiếm Categories', 'textdomain'),
        'all_items'         => __('Tất cả Categories', 'textdomain'),
        'parent_item'       => __('Category cha', 'textdomain'),
        'parent_item_colon' => __('Category cha:', 'textdomain'),
        'edit_item'         => __('Sửa Category', 'textdomain'),
        'update_item'       => __('Cập nhật Category', 'textdomain'),
        'add_new_item'      => __('Thêm Category mới', 'textdomain'),
        'new_item_name'     => __('Tên Category mới', 'textdomain'),
        'menu_name'         => __('Categories', 'textdomain'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
        'show_in_rest'      => true,
        'show_in_nav_menus' => true, // ← ĐÃ THÊM DÒNG NÀY
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'create_portfolio_taxonomy');


/**
 * Kích hoạt Polylang cho Portfolio CPT
 */
function portfolio_polylang_support() {
    if (function_exists('pll_register_post_type')) {
        pll_register_post_type('portfolio');
    }
    
    if (function_exists('pll_register_taxonomy')) {
        pll_register_taxonomy('portfolio_category');
    }
}
add_action('init', 'portfolio_polylang_support', 20);


/**
 * Flush rewrite rules
 */
function portfolio_rewrite_flush() {
    create_portfolio_post_type();
    create_portfolio_taxonomy();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'portfolio_rewrite_flush');



// problem-solutions ACF
add_action('acf/init', function () {
    acf_add_local_field_group([
        'key' => 'group_portfolio_problem_solutions',
        'title' => 'Portfolio – Problem & Solutions',
        'fields' => [

            // Enable/Disable Section
            [
                'key' => 'field_portfolio_problem_enable',
                'label' => 'Show Problem & Solutions Section',
                'name' => 'portfolio_problem_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1, // mặc định: bật
                'message' => 'Enable this section',
            ],
              // Preview Image
            [
                'key' => 'field_portfolio_problem_preview_image',
                'label' => 'Preview Image',
                'name' => 'portfolio_problem_preview_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],

            // Problem Title
            // [
            //     'key' => 'field_portfolio_problem_title',
            //     'label' => 'Problem Title',
            //     'name' => 'portfolio_problem_title',
            //     'type' => 'text',
            // ],

            // Problem Description
            [
                'key' => 'field_portfolio_problem_description',
                'label' => 'Problem Description',
                'name' => 'portfolio_problem_description',
                'type' => 'textarea',
            ],

            // Background Image
            // [
            //     'key' => 'field_portfolio_problem_bg_image',
            //     'label' => 'Background Image',
            //     'name' => 'portfolio_problem_bg_image',
            //     'type' => 'image',
            //     'return_format' => 'array',
            //     'preview_size' => 'medium',
            //     'library' => 'all',
            // ],
            // Solutions repeater
            [
                'key' => 'field_portfolio_problem_solutions',
                'label' => 'Solutions',
                'name' => 'portfolio_problem_solutions',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_portfolio_problem_solution_text',
                        'label' => 'Solution Text',
                        'name' => 'solution_text',
                        'type' => 'textarea',
                    ]
                ],
                'layout' => 'row',
            ],
        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ],
            ],
        ],
    ]);
});

// input-output ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_portfolio_input_output',
        'title' => 'Portfolio – Input / System / Output',
        'fields' => [

            // Enable/Disable Section
            [
                'key' => 'field_portfolio_usecase2_enable',
                'label' => 'Show Input/System/Output Section',
                'name' => 'portfolio_usecase2_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
                'message' => 'Enable this section',
            ],

            // Background Image
            // [
            //     'key' => 'field_portfolio_usecase2_bg_image',
            //     'label' => 'Background Image',
            //     'name' => 'portfolio_usecase2_bg_image',
            //     'type' => 'image',
            //     'return_format' => 'array',
            //     'preview_size' => 'medium',
            //     'library' => 'all',
            // ],

            // Input Section
            [
                'key' => 'field_portfolio_usecase2_input_text',
                'label' => 'Input Text',
                'name' => 'portfolio_usecase2_input_text',
                'type' => 'textarea',
            ],

            // System Section (Repeater)
            [
                'key' => 'field_portfolio_usecase2_system',
                'label' => 'System Steps',
                'name' => 'portfolio_usecase2_system',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_portfolio_usecase2_system_step',
                        'label' => 'Step Text',
                        'name' => 'step_text',
                        'type' => 'textarea',
                    ]
                ],
                'layout' => 'row',
            ],

            // Output Section
            [
                'key' => 'field_portfolio_usecase2_output_text',
                'label' => 'Output Text',
                'name' => 'portfolio_usecase2_output_text',
                'type' => 'textarea',
            ],

            // Preview Image
            [
                'key' => 'field_portfolio_usecase2_preview_image',
                'label' => 'Preview Image',
                'name' => 'portfolio_usecase2_preview_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ],

        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ],
            ],
        ],

    ]);

});


// project total ACF 
add_action('acf/init', function () {
    acf_add_local_field_group([
        'key' => 'group_portfolio_stats_section',
        'title' => 'Portfolio – Stats Section',
        'fields' => [

            // Enable/Disable Section
            [
                'key' => 'field_portfolio_stats_enable',
                'label' => 'Show Stats Section',
                'name' => 'portfolio_stats_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
                'message' => 'Enable this section',
            ],

            // Stat Cards (Repeater)
            [
                'key' => 'field_portfolio_stats_cards',
                'label' => 'Stat Cards',
                'name' => 'stats_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_stat_number',
                        'label' => 'Number',
                        'name' => 'number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_stat_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_stat_desc',
                        'label' => 'Description',
                        'name' => 'desc',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'row',
            ],

            // Feature Cards (Repeater)
            [
                'key' => 'field_portfolio_feature_cards',
                'label' => 'Feature Cards',
                'name' => 'feature_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_feature_number',
                        'label' => 'Number / Icon',
                        'name' => 'number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_feature_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ],
                    [
                        'key' => 'field_feature_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_feature_desc',
                        'label' => 'Description',
                        'name' => 'desc',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'row',
            ],

        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ],
            ],
        ],
    ]);
});



// Stats Section ACF with Social Media Icons (Simplified)
add_action('acf/init', function () {
    acf_add_local_field_group([
        'key' => 'group_stats_section_with_social',
        'title' => 'Stats Section – With Social Icons',
        'fields' => [

            // Enable/Disable Section
            [
                'key' => 'field_stats_social_enable',
                'label' => 'Show Stats Section',
                'name' => 'stats_social_section_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            // Social Media Icons (for first card)
            [
                'key' => 'field_stats_social_icons',
                'label' => 'Social Media Icons',
                'name' => 'stats_social_icons',
                'type' => 'repeater',
                'instructions' => 'Add social media icons with links (will appear in first card)',
                'sub_fields' => [
                    [
                        'key' => 'field_social_icon_image',
                        'label' => 'Icon Image',
                        'name' => 'icon_image',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                    ],
                    [
                        'key' => 'field_social_icon_alt',
                        'label' => 'Icon Name',
                        'name' => 'icon_alt',
                        'type' => 'text',
                        'placeholder' => 'Facebook, LinkedIn, Email...',
                    ],
                    [
                        'key' => 'field_social_icon_url',
                        'label' => 'Link URL',
                        'name' => 'icon_url',
                        'type' => 'text',
                        'placeholder' => 'https://facebook.com/yourpage',
                    ],
                ],
                'layout' => 'row',
                'button_label' => 'Add Social Icon',
            ],

            // First Card Title & Description
            [
                'key' => 'field_stats_social_card_title',
                'label' => 'First Card Title',
                'name' => 'stats_social_card_title',
                'type' => 'text',
                'default_value' => 'Supported Channels',
            ],
            [
                'key' => 'field_stats_social_card_desc',
                'label' => 'First Card Description',
                'name' => 'stats_social_card_desc',
                'type' => 'text',
                'default_value' => 'Tokens per day',
            ],

            // Regular Stat Cards
            [
                'key' => 'field_stats_social_cards',
                'label' => 'Stat Cards',
                'name' => 'stats_social_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_stat_social_number',
                        'label' => 'Number',
                        'name' => 'number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_stat_social_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_stat_social_desc',
                        'label' => 'Description',
                        'name' => 'desc',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'row',
            ],

            // Feature Cards
            [
                'key' => 'field_stats_social_feature_cards',
                'label' => 'Feature Cards',
                'name' => 'stats_social_feature_cards',
                'type' => 'repeater',
                'sub_fields' => [
                    [
                        'key' => 'field_feature_social_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                    ],
                    [
                        'key' => 'field_feature_social_number',
                        'label' => 'Number',
                        'name' => 'number',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_feature_social_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_feature_social_desc',
                        'label' => 'Description',
                        'name' => 'desc',
                        'type' => 'text',
                    ],
                ],
                'layout' => 'row',
            ],

        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'portfolio',
                ],
            ],
        ],
    ]);
});



// Vision Statement ACF
add_action('acf/init', function () {
    acf_add_local_field_group([
        'key' => 'group_solutions_vision_statement',
        'title' => 'Solutions – Vision Statement',
        'fields' => [

            // Enable/Disable
            [
                'key' => 'field_solutions_vision_enable',
                'label' => 'Show Vision Statement Section',
                'name' => 'solutions_vision_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            // Description
            [
                'key' => 'field_solutions_vision_description',
                'label' => 'Vision Description',
                'name' => 'solutions_vision_description',
                'type' => 'textarea',
            ],

            // Image
            [
                'key' => 'field_solutions_vision_image',
                'label' => 'Vision Image',
                'name' => 'solutions_vision_image',
                'type' => 'image',
                'return_format' => 'array',
            ],

            /*
            -------------------------------------------------------
            WHY NOW (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_vision_why_now',
                'label' => 'Why Now – Bullet Points',
                'name' => 'solutions_vision_why_now',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Bullet',
                'sub_fields' => [

                    // Bullet segments
                    [
                        'key' => 'field_solutions_vision_why_now_segments',
                        'label' => 'Text Segments',
                        'name' => 'segments',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Segment',
                        'sub_fields' => [

                            // Segment text
                            [
                                'key' => 'field_solutions_vision_why_now_segment_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'textarea',
                            ],

                            // Segment color
                            [
                                'key' => 'field_solutions_vision_why_now_segment_color',
                                'label' => 'Color',
                                'name' => 'color',
                                'type' => 'select',
                                'choices' => [
                                    'default' => 'Default',
                                    'blue'    => 'Blue',
                                ],
                                'default_value' => 'default',
                                'ui' => 1,
                            ],
                        ],
                    ],
                ],
            ],

            /*
            -------------------------------------------------------
            OUR THESIS (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_vision_thesis',
                'label' => 'Our Thesis – Bullet Points',
                'name' => 'solutions_vision_thesis',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Bullet',
                'sub_fields' => [

                    // Bullet segments
                    [
                        'key' => 'field_solutions_vision_thesis_segments',
                        'label' => 'Text Segments',
                        'name' => 'segments',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Segment',
                        'sub_fields' => [

                            // Segment text
                            [
                                'key' => 'field_solutions_vision_thesis_segment_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'textarea',
                            ],

                            // Segment color
                            [
                                'key' => 'field_solutions_vision_thesis_segment_color',
                                'label' => 'Color',
                                'name' => 'color',
                                'type' => 'select',
                                'choices' => [
                                    'default' => 'Default',
                                    'blue'    => 'Blue',
                                ],
                                'default_value' => 'default',
                                'ui' => 1,
                            ],
                        ],
                    ],
                ],
            ],

        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);
});



// Edge AI Vision Statement – ACF (Simple version, no text segments)
add_action('acf/init', function () {
    acf_add_local_field_group([
        'key' => 'group_solutions_edge_ai_vision_simple',
        'title' => 'Solutions – Edge AI Vision',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable / Disable Section
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_edge_ai_enable',
                'label' => 'Show Edge AI Vision Section',
                'name' => 'solutions_edge_ai_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            Vision Description
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_edge_ai_description',
                'label' => 'Vision Description',
                'name' => 'solutions_edge_ai_description',
                'type' => 'textarea',
            ],

            /*
            -------------------------------------------------------
            Vision Image (device mockup)
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_edge_ai_image',
                'label' => 'Side Image (Device Mockup)',
                'name' => 'solutions_edge_ai_image',
                'type' => 'image',
                'return_format' => 'array',
            ],

            /*
            -------------------------------------------------------
            WHY EDGE AI MATTERS (Simple Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_solutions_edge_ai_matters',
                'label' => 'Why Edge AI Matters – Bullet Items',
                'name' => 'solutions_edge_ai_matters',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Bullet',
                'sub_fields' => [

                    // Single line bullet text
                    [
                        'key' => 'field_solutions_edge_ai_matter_text',
                        'label' => 'Bullet Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],

                ],
            ],

        ],

        /*
        -------------------------------------------------------
        Location
        -------------------------------------------------------
        */
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);
});



// Technology Landscape – ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_tech_landscape',
        'title' => 'Solutions – Technology Landscape',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable / Disable Section
            -------------------------------------------------------
            */
            [
                'key' => 'field_tech_landscape_enable',
                'label' => 'Show Technology Landscape Section',
                'name' => 'tech_landscape_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            GLOBAL TRENDS CARD
            -------------------------------------------------------
            */
            [
                'key' => 'field_global_trends',
                'label' => 'Global Trends – Bullets',
                'name' => 'global_trends',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Bullet',
                'sub_fields' => [

                    // Segments inside bullet
                    [
                        'key' => 'field_gt_segments',
                        'label' => 'Text Segments',
                        'name' => 'segments',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Segment',
                        'sub_fields' => [
                            [
                                'key' => 'field_gt_segment_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'textarea',
                            ],
                            [
                                'key' => 'field_gt_segment_color',
                                'label' => 'Color',
                                'name' => 'color',
                                'type' => 'select',
                                'choices' => [
                                    'default' => 'Default',
                                    'blue'    => 'Blue',
                                ],
                                'default_value' => 'default',
                                'ui' => 1,
                            ],
                        ],
                    ],

                ],
            ],

            /*
            -------------------------------------------------------
            VIETNAM CONTEXT CARD
            -------------------------------------------------------
            */
            [
                'key' => 'field_vn_context',
                'label' => 'Vietnam Context – Bullets',
                'name' => 'vietnam_context',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Bullet',
                'sub_fields' => [

                    [
                        'key' => 'field_vn_segments',
                        'label' => 'Text Segments',
                        'name' => 'segments',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Segment',
                        'sub_fields' => [
                            [
                                'key' => 'field_vn_segment_text',
                                'label' => 'Text',
                                'name' => 'text',
                                'type' => 'textarea',
                            ],
                            [
                                'key' => 'field_vn_segment_color',
                                'label' => 'Color',
                                'name' => 'color',
                                'type' => 'select',
                                'choices' => [
                                    'default' => 'Default',
                                    'blue'    => 'Blue',
                                ],
                                'default_value' => 'default',
                                'ui' => 1,
                            ],
                        ],
                    ],

                ],
            ],

            /*
            -------------------------------------------------------
            Logo Grid Image
            -------------------------------------------------------
            */
            [
                'key' => 'field_tech_landscape_image',
                'label' => 'Bottom Image',
                'name' => 'tech_landscape_image',
                'type' => 'image',
                'return_format' => 'array',
            ],

        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);
});



// Core Technology Section – ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_core_technology',
        'title' => 'Solutions – Core Technology',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable section
            -------------------------------------------------------
            */
            [
                'key' => 'field_core_tech_enable',
                'label' => 'Show Core Technology Section',
                'name' => 'core_tech_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            Title
            -------------------------------------------------------
            */
            // [
            //     'key' => 'field_core_tech_title',
            //     'label' => 'Section Title',
            //     'name' => 'core_tech_title',
            //     'type' => 'textarea',
            //     'instructions' => 'Example: &lt;span class="highlight"&gt;Core&lt;/span&gt; &lt;span class="title-highlight"&gt;Technology&lt;/span&gt;',
            // ],

            /*
            -------------------------------------------------------
            Process Steps Repeater
            -------------------------------------------------------
            */
            [
                'key' => 'field_core_tech_steps',
                'label' => 'Process Steps',
                'name' => 'core_tech_steps',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Step',
                'sub_fields' => [

                    [
                        'key' => 'field_core_tech_step_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                    ],
                    [
                        'key' => 'field_core_tech_step_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ],
                    [
                        'key' => 'field_core_tech_step_desc',
                        'label' => 'Description',
                        'name' => 'desc',
                        'type' => 'textarea',
                        'rows' => 3,
                    ],

                ],
            ],

            /*
            -------------------------------------------------------
            Feature Cards Repeater
            -------------------------------------------------------
            */
            [
                'key' => 'field_core_tech_cards',
                'label' => 'Feature Cards',
                'name' => 'core_tech_cards',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Card',
                'sub_fields' => [

                    [
                        'key' => 'field_core_tech_card_title',
                        'label' => 'Card Title',
                        'name' => 'card_title',
                        'type' => 'text',
                    ],

                    [
                        'key' => 'field_core_tech_card_color',
                        'label' => 'Card Color Theme',
                        'name' => 'card_color',
                        'type' => 'select',
                        'choices' => [
                            'card-blue'       => 'Blue',
                            'card-cyan'       => 'Cyan',
                            'card-light-blue' => 'Light Blue',
                        ],
                        'default_value' => 'card-blue',
                        'ui' => 1,
                    ],

                    [
                        'key' => 'field_core_tech_card_features',
                        'label' => 'Feature List',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'row',
                        'button_label' => 'Add Feature',
                        'sub_fields' => [
                            [
                                'key' => 'field_core_tech_feature_icon',
                                'label' => 'Feature Icon',
                                'name' => 'icon',
                                'type' => 'image',
                                'return_format' => 'array',
                            ],
                            [
                                'key' => 'field_core_tech_feature_text',
                                'label' => 'Feature Text',
                                'name' => 'text',
                                'type' => 'textarea',
                                'rows' => 2,
                            ],
                        ],
                    ],

                ],
            ],

        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);
});



// Development Process Section – ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_dev_process',
        'title' => 'Solutions – Development Process',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable section
            -------------------------------------------------------
            */
            [
                'key' => 'field_dev_process_enable',
                'label' => 'Show Development Process Section',
                'name' => 'dev_process_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            Title + Description
            -------------------------------------------------------
            */
            // [
            //     'key' => 'field_dev_process_title',
            //     'label' => 'Section Title',
            //     'name' => 'dev_process_title',
            //     'type' => 'text',
            // ],

            [
                'key' => 'field_dev_process_desc',
                'label' => 'Section Description',
                'name' => 'dev_process_desc',
                'type' => 'textarea',
                'rows' => 3,
            ],

            /*
            -------------------------------------------------------
            Key Points (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_dev_process_key_points',
                'label' => 'Key Points (Bullet Form)',
                'name' => 'dev_process_key_points',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Key Point',
                'sub_fields' => [
                    [
                        'key' => 'field_dev_process_kp_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
            ],

            /*
            -------------------------------------------------------
            Scrum Roles (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_dev_process_scrum_roles',
                'label' => 'Scrum Roles',
                'name' => 'dev_process_scrum_roles',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Role',
                'sub_fields' => [
                    [
                        'key' => 'field_dev_process_scrum_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
            ],

            /*
            -------------------------------------------------------
            Screenshot Image
            -------------------------------------------------------
            */
            [
                'key' => 'field_dev_process_screenshot',
                'label' => 'Screenshot Image',
                'name' => 'dev_process_screenshot',
                'type' => 'image',
                'return_format' => 'array',
            ],

        ],

        /*
        -------------------------------------------------------
        Location: post_type == solutions
        -------------------------------------------------------
        */
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],

    ]);
});



// SOM Pipeline Section – ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_som_pipeline',
        'title' => 'Solutions – SOM Pipeline',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable section
            -------------------------------------------------------
            */
            [
                'key' => 'field_som_pipeline_enable',
                'label' => 'Show SOM Pipeline Section',
                'name' => 'som_pipeline_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            Section Title
            -------------------------------------------------------
            */
            // [
            //     'key' => 'field_som_pipeline_title',
            //     'label' => 'Section Title',
            //     'name' => 'som_pipeline_title',
            //     'type' => 'text',
            // ],

            /*
            -------------------------------------------------------
            Diagram Items (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_som_pipeline_diagram',
                'label' => 'Diagram Items',
                'name' => 'som_pipeline_diagram',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Diagram Item',
                'sub_fields' => [
                    [
                        'key' => 'field_som_pipeline_diagram_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
            ],

            /*
            -------------------------------------------------------
            Key Metrics Items (Repeater)
            -------------------------------------------------------
            */
            [
                'key' => 'field_som_pipeline_metrics',
                'label' => 'Key Metrics',
                'name' => 'som_pipeline_metrics',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Metric Item',
                'sub_fields' => [
                    [
                        'key' => 'field_som_pipeline_metric_text',
                        'label' => 'Text',
                        'name' => 'text',
                        'type' => 'textarea',
                        'rows' => 2,
                    ],
                ],
            ],

            /*
            -------------------------------------------------------
            Device Mockup Image
            -------------------------------------------------------
            */
            [
                'key' => 'field_som_pipeline_image',
                'label' => 'Device Mockup Image',
                'name' => 'som_pipeline_image',
                'type' => 'image',
                'return_format' => 'array',
            ],

        ],

        /*
        -------------------------------------------------------
        Location: Post Type = solutions
        -------------------------------------------------------
        */
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);
});


// Software Development Section – ACF
add_action('acf/init', function () {

    acf_add_local_field_group([
        'key' => 'group_software_development',
        'title' => 'Solutions – Software Development',
        'fields' => [

            /*
            -------------------------------------------------------
            Enable Section
            -------------------------------------------------------
            */
            [
                'key' => 'field_sw_dev_enable',
                'label' => 'Show Software Development Section',
                'name' => 'sw_dev_enable',
                'type' => 'true_false',
                'ui' => 1,
                'default_value' => 1,
            ],

            /*
            -------------------------------------------------------
            Cards Repeater
            -------------------------------------------------------
            */
            [
                'key' => 'field_sw_dev_cards',
                'label' => 'Feature Cards',
                'name' => 'sw_dev_cards',
                'type' => 'repeater',
                'layout' => 'row',
                'button_label' => 'Add Card',
                'sub_fields' => [

                    // Card Title
                    [
                        'key' => 'field_sw_dev_card_title',
                        'label' => 'Card Title',
                        'name' => 'card_title',
                        'type' => 'text',
                    ],

                    // Card Color Theme
                    [
                        'key' => 'field_sw_dev_card_color',
                        'label' => 'Card Color',
                        'name' => 'card_color',
                        'type' => 'select',
                        'choices' => [
                            'card-bold-blue' => 'Bold Blue',
                            'card-blue'      => 'Blue',
                            'card-cyan'      => 'Cyan',
                            'card-light-blue'=> 'Light Blue',
                        ],
                        'default_value' => 'card-blue',
                        'ui' => 1,
                    ],

                    // Features Repeater
                    [
                        'key' => 'field_sw_dev_card_features',
                        'label' => 'Feature List',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'row',
                        'button_label' => 'Add Feature',
                        'sub_fields' => [
                            [
                                'key' => 'field_sw_dev_feature_icon',
                                'label' => 'Feature Icon',
                                'name' => 'icon',
                                'type' => 'image',
                                'return_format' => 'array',
                            ],
                            [
                                'key' => 'field_sw_dev_feature_text',
                                'label' => 'Feature Text',
                                'name' => 'text',
                                'type' => 'textarea',
                                'rows' => 2,
                            ],
                        ],
                    ],

                ],
            ],

        ],

        /*
        -------------------------------------------------------
        Location: post_type = solutions
        -------------------------------------------------------
        */
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'solutions',
                ],
            ],
        ],
    ]);

});
