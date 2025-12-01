<?php
/**
 * Template Name: Portfolio
 */
get_header();
$lang = pll_current_language('slug');

// Tabs
$tabs = [
  'all' => 'All Project',
  'ai' => 'AI Products',
  'industrial' => 'Industrial AI & Automation',
  'software' => 'Software & Firmware Development'
];

// Projects with slugs
$projects = [
  ['title' => 'Real Estate Data Assistant (LLM + RAG)', 'image' => '/assets/images/innovision/rectangle22931407-zbxg-300h.png', 'category' => 'ai', 'slug' => 'real-estate-data-assistant'],
  ['title' => 'Fintech Transaction Verification AI', 'image' => '/assets/images/innovision/rectangle22931417-n85e-300h.png', 'category' => 'ai', 'slug' => 'fintech-transaction-verification-ai'],
  ['title' => 'Government Document AI', 'image' => '/assets/images/innovision/rectangle22931417-by9h-300h.png', 'category' => 'industrial', 'slug' => 'government-document-ai'],
  ['title' => 'Marketing Content Assistant', 'image' => '/assets/images/innovision/rectangle22931417-zh5f-300h.png', 'category' => 'software', 'slug' => 'marketing-content-assistant'],
  ['title' => 'Qualcomm QCS6490 Vision AI', 'image' => '/assets/images/innovision/rectangle22931604-bccc-300h.png', 'category' => 'industrial', 'slug' => 'qualcomm-qcs6490-vision-ai'],
  ['title' => 'NXP i.MX Edge Inference', 'image' => '/assets/images/innovision/rectangle22931604-p2x8-300h.png', 'category' => 'industrial', 'slug' => 'nxp-imx-edge-inference'],
  ['title' => 'Predictive Maintenance (TinyML)', 'image' => '/assets/images/innovision/rectangle22931604-5se7-300h.png', 'category' => 'industrial', 'slug' => 'predictive-maintenance-tinyml'],
  ['title' => 'Edge HMI, Edge Gateway', 'image' => '/assets/images/innovision/rectangle22931604-zp7og-300h.png', 'category' => 'industrial', 'slug' => 'edge-hmi-edge-gateway'],
  ['title' => 'Custom SoM Design', 'image' => '/assets/images/innovision/rectangle22931604-p8p-300h.png', 'category' => 'software', 'slug' => 'custom-som-design'],
];
?>

<?php get_template_part('template-parts/page', 'title', [
  'subtitle' => 'We build fast, scalable AI solutions, from LLM platforms to Edge and embedded systems, that help teams ship smarter and innovate faster. Our projects span real-world use cases across industries, proving how modern AI and engineering can create immediate, tangible impact.',
]); ?>

<div class="portfolio-container">
  <!-- Tabs -->
  <div class="tabs-container">
    <?php foreach ($tabs as $key => $label): ?>
      <div class="tab-item <?php echo $key === 'all' ? 'active' : ''; ?>" data-tab="<?php echo esc_attr($key); ?>">
        <?php echo esc_html($label); ?>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Projects -->
  <div class="projects-container">
    <?php foreach ($projects as $project): ?>
      <a href="<?php echo esc_url(home_url('/portfolio/' . $project['slug'])); ?>" class="project-item" data-category="<?php echo esc_attr($project['category']); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . $project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>">
        <span><?php echo esc_html($project['title']); ?></span>
      </a>
    <?php endforeach; ?>
  </div>

  <!-- Load More Button -->
  <div class="load-more-container">
    <button class="load-more-button">
      <span>Load more</span>
    </button>
  </div>
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

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        
        // Add active class to clicked tab
        tab.classList.add('active');

        // Filter projects
        const category = tab.dataset.tab;
        projects.forEach(project => {
          if (category === 'all' || project.dataset.category === category) {
            project.style.display = 'flex';
          } else {
            project.style.display = 'none';
          }
        });
      });
    });
  });
</script>