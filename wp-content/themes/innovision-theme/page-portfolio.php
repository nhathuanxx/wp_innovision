<?php

/**
 * Template Name: Portfolio
 */
get_header();
$lang = pll_current_language('slug'); // vi / en

// Tabs
$tabs = [
  'all' => 'All Project',
  'ai' => 'AI Products',
  'industrial' => 'Industrial AI & Automation',
  'software' => 'Software & Firmware Development'
];

// Projects
$projects = [
  ['title' => 'Real Estate Data Assistant (LLM + RAG)', 'image' => '/assets/images/innovision/rectangle22931407-zbxg-300h.png', 'category' => 'ai'],
  ['title' => 'Fintech Transaction Verification AI', 'image' => '/assets/images/innovision/rectangle22931417-n85e-300h.png', 'category' => 'ai'],
  ['title' => 'Government Document AI', 'image' => '/assets/images/innovision/rectangle22931417-by9h-300h.png', 'category' => 'industrial'],
  ['title' => 'Marketing Content Assistant', 'image' => '/assets/images/innovision/rectangle22931417-zh5f-300h.png', 'category' => 'software'],
  ['title' => 'Qualcomm QCS6490 Vision AI', 'image' => '/assets/images/innovision/rectangle22931604-bccc-300h.png', 'category' => 'industrial'],
  ['title' => 'NXP i.MX Edge Inference', 'image' => '/assets/images/innovision/rectangle22931604-p2x8-300h.png', 'category' => 'industrial'],
  ['title' => 'Predictive Maintenance (TinyML)', 'image' => '/assets/images/innovision/rectangle22931604-5se7-300h.png', 'category' => 'industrial'],
  ['title' => 'Edge HMI, Edge Gateway', 'image' => '/assets/images/innovision/rectangle22931604-zp7og-300h.png', 'category' => 'industrial'],
  ['title' => 'Custom SoM Design', 'image' => '/assets/images/innovision/rectangle22931604-p8p-300h.png', 'category' => 'software'],
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
      <div class="project-item" data-category="<?php echo esc_attr($project['category']); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . $project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>">
        <span><?php echo esc_html($project['title']); ?></span>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Load More Button -->
  <div class="load-more-container">
    <div class="load-more-button">
      <span>Load more</span>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22921604-kf22-200h.png'); ?>" alt="Load More">
    </div>
  </div>
</div>

<?php get_footer(); ?>

<style>
  /* Container */
  .portfolio-container {
    padding: 50px 0;
    display: flex;
    flex-direction: column;
    gap: 30px;
  }

  /* Tabs */
  .tabs-container {
    display: flex;
    gap: 16px;
    justify-content: center;
    padding: 8px;
    max-width: 1320px;
    margin: 0 auto;
    align-items: center;
    border-color: rgba(118, 118, 128, 0.11999999731779099);
    border-style: solid;
    border-width: 1px;
    border-radius: 8px;
  }

  .tab-item {
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    background-color: rgba(118, 118, 128, 0.12);
    color: #474363;
    font-family: Inter;
    font-weight: 400;
    font-size: 16px;
    height: auto;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .tab-item.active {
    background-color: #306aff;
    color: #fff;
    color: rgba(255, 255, 255, 1);
    height: auto;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  /* Projects */
  .projects-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    width: 1320px;
    margin: 0 auto;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
  }

  .project-item {
    display: flex;
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .project-item img {
    width: 100%;
    height: 218px;
    border-radius: 16px;
    object-fit: cover;
  }

  .project-item span {
    font-family: Inter;
    font-weight: 700;
    font-size: 16px;
    line-height: 28px;
    color: #474363;
  }

  /* Load more */
  .load-more-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
  }

  .load-more-button {
    position: relative;
    padding: 20px 36px;
    border-radius: 10px;
    background: #306aff;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 10px 19px rgba(49, 107, 255, 0.28);
    cursor: pointer;
    border: 1px solid #0d51ff;
  }

  .load-more-button span {
    color: #fff;
    font-family: Inter;
    font-weight: 700;
    font-size: 20px;
    z-index: 1;
  }

  .load-more-button img {
    position: absolute;
    top: 1px;
    left: 1px;
    width: 172px;
    height: 62px;
    border-radius: 9px;
    border: 1px solid #5987ff;
    z-index: 0;
  }

  .homepage-footer {
    top: auto !important;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-item');
    const projects = document.querySelectorAll('.project-item');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const category = tab.dataset.tab;
        projects.forEach(p => {
          p.style.display = (category === 'all' || p.dataset.category === category) ? 'flex' : 'none';
        });
      });
    });
  });
</script>