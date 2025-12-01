<?php

/**
 * Template Name: Solutions
 */
get_header();
$lang = pll_current_language('slug');
?>

<?php get_template_part('template-parts/page', 'title', [
  'subtitle' => 'Comprehensive AI and technology solutions for modern enterprises.',
]); ?>

<div class="solutions-section">
  <div class="solutions-container">

    <!-- Solution 1: AI Products -->
    <div class="solution-card">
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931405-fkt9-400h.png'); ?>"
        alt="AI Products"
        class="solution-image">

      <div class="solution-content">
        <h2 class="solution-title">AI Products</h2>
        <p class="solution-description">
          A suite of AI products that automates analysis, Q&A, and real-time decision making
        </p>

        <a href="<?php echo esc_url(home_url('/ai-products')); ?>" class="solution-btn">
          <span>Learn more</span>
        </a>
      </div>
    </div>

    <!-- Solution 2: Industrial AI & Automation -->
    <div class="solution-card solution-reverse">
      <div class="solution-content">
        <h2 class="solution-title">Industrial AI & Automation</h2>
        <p class="solution-description">
          End-to-end industrial AI solutions for inspection, failure prediction, and factory system integration
        </p>

        <a href="<?php echo esc_url(home_url('/industrial-ai-automation')); ?>" class="solution-btn">
          <span>Learn more</span>
        </a>
      </div>

      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931405-z92p-400h.png'); ?>"
        alt="Industrial AI & Automation"
        class="solution-image">
    </div>

    <!-- Solution 3: Software & Firmware Development -->
    <div class="solution-card">
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931405-y8rz-400h.png'); ?>"
        alt="Software & Firmware Development"
        class="solution-image">

      <div class="solution-content">
        <h2 class="solution-title">Software & Firmware Development</h2>
        <p class="solution-description">
          Software engineering and embedded system development for technology products and enterprise solutions
        </p>

        <a href="<?php echo esc_url(home_url('/software-firmware-development')); ?>" class="solution-btn">
          <span>Learn more</span>
        </a>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>

<style>
  .solutions-section {
    width: 100%;
    padding: 56px 20px 112px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .solutions-container {
    max-width: 1320px;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  /* Solution Card */
  .solution-card {
    display: flex;
    align-items: center;
    gap: 32px;
    padding: 32px;
    background: #FFFFFF;
    border-radius: 20px;
    box-shadow: 0px 1px 4px rgba(12, 12, 13, 0.1);
    transition: all 0.3s ease;
  }

  .solution-card:hover {
    box-shadow: 0px 8px 24px rgba(60, 144, 252, 0.15);
    transform: translateY(-4px);
  }

  /* Reverse layout for alternating cards - Desktop only */
  /* @media (min-width: 1025px) {
    .solution-reverse {
      flex-direction: row-reverse;
    }
  } */

  /* Solution Image */
  .solution-image {
    width: 611px;
    max-width: 50%;
    height: 344px;
    object-fit: cover;
    border-radius: 20px;
    flex-shrink: 0;
  }

  /* Solution Content */
  .solution-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 16px;
    min-width: 0;
  }

  .solution-title {
    font-family: 'Inter', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #474363;
    line-height: normal;
    margin: 0;
  }

  .solution-description {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #474363;
    line-height: 28px;
    margin: 0;
  }

  /* Solution Button */
  .solution-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 20px 36px;
    background: #306BFF;
    border: 1px solid #0D51FF;
    border-radius: 10px;
    box-shadow: 0px 10px 19px rgba(49, 107, 255, 0.28);
    text-decoration: none;
    transition: all 0.3s ease;
    align-self: flex-start;
    position: relative;
    overflow: hidden;
  }

  .solution-btn::before {
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

  .solution-btn:hover::before {
    width: 300px;
    height: 300px;
  }

  .solution-btn:hover {
    background: #4178FF;
    transform: translateY(-2px);
    box-shadow: 0px 15px 25px rgba(49, 107, 255, 0.35);
  }

  .solution-btn:active {
    transform: translateY(0);
    box-shadow: 0px 8px 15px rgba(49, 107, 255, 0.25);
  }

  .solution-btn span {
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #FFFFFF;
    line-height: normal;
    position: relative;
    z-index: 1;
  }

  .homepage-footer {
    top: auto !important;
  }

  /* Responsive Design */
  @media (max-width: 1400px) {
    .solutions-section {
      padding: 50px 40px 100px;
    }

    .solution-image {
      width: 500px;
      height: 300px;
    }

    .solution-title {
      font-size: 32px;
    }

    .solution-description {
      font-size: 15px;
      line-height: 26px;
    }
  }

  @media (max-width: 1024px) {
    .solutions-section {
      padding: 40px 30px 80px;
    }

    .solution-card {
      flex-direction: column;
    }

    .solution-reverse {
      flex-direction: column-reverse
    }

    .solution-image {
      width: 100%;
      max-width: 100%;
      height: 280px;
    }

    .solution-title {
      font-size: 28px;
    }

    .solution-btn {
      align-self: center;
      width: 100%;
      max-width: 300px;
    }
  }

  @media (max-width: 768px) {
    .solutions-section {
      padding: 40px 24px 70px;
    }

    .solutions-container {
      gap: 24px;
    }

    .solution-card {
      padding: 24px;
      gap: 24px;
    }

    .solution-image {
      height: 240px;
    }

    .solution-title {
      font-size: 24px;
    }

    .solution-description {
      font-size: 14px;
      line-height: 24px;
    }

    .solution-btn span {
      font-size: 18px;
    }
  }

  @media (max-width: 480px) {
    .solutions-section {
      padding: 30px 15px 60px;
    }

    .solutions-container {
      gap: 20px;
    }

    .solution-card {
      padding: 20px;
      gap: 20px;
    }

    .solution-image {
      height: 200px;
      border-radius: 16px;
    }

    .solution-content {
      gap: 12px;
    }

    .solution-title {
      font-size: 22px;
    }

    .solution-description {
      font-size: 13px;
      line-height: 22px;
    }

    .solution-btn {
      padding: 16px 28px;
      max-width: 100%;
    }

    .solution-btn span {
      font-size: 16px;
    }
  }
</style>