<?php $lang = pll_current_language('slug'); ?>
<div class="howwework-frame">
  <div class="howwework-text-block">
    <h2 class="howwework-title">
      <span class="howwework-title-highlight">How</span>
      <span class="title-highlight"> We Work</span>
    </h2>
    <p class="howwework-description">
      Our culture is reflected in the way we work with each other and with our partners. We believe that strong culture is not just internal, but also defines how we deliver value externally
    </p>
  </div>

  <div class="howwework-images-group-container" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image61224-afigh-400h.png'); ?>');">
    <div class="howwework-images-group">

      <!-- Decorative Images - Hidden on Mobile -->
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image31414-wcz-200w.png'); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        class="howwework-image3 decorative-image" />

      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image81415-emn8-200w.png'); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        class="howwework-image8 decorative-image" />

      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image71440-vl5g-200w.png'); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        class="howwework-image7 decorative-image" />

      <!-- Card 1: Lean & Efficient -->
      <div class="howwework-card howwework-card-lean">
        <div class="howwework-card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4371418-2h9s-200h.png'); ?>"
            alt="Lean & Efficient" />
        </div>
        <div class="howwework-card-text">
          <h3 class="howwework-card-title">Lean & Efficient</h3>
          <p class="howwework-card-description">
            Small teams, high impact, clear priorities.
          </p>
        </div>
      </div>

      <!-- Card 2: Continuous Learning -->
      <div class="howwework-card howwework-card-learning">
        <div class="howwework-card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4371424-mhcm-200h.png'); ?>"
            alt="Continuous Learning" />
        </div>
        <div class="howwework-card-text">
          <h3 class="howwework-card-title">Continuous Learning</h3>
          <p class="howwework-card-description">
            Every challenge is an opportunity to grow skills and knowledge.
          </p>
        </div>
      </div>

      <!-- Card 3: Research Meets Practice -->
      <div class="howwework-card howwework-card-research">
        <div class="howwework-card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4371430-p4fc-200h.png'); ?>"
            alt="Research Meets Practice" />
        </div>
        <div class="howwework-card-text">
          <h3 class="howwework-card-title">Research Meets Practice</h3>
          <p class="howwework-card-description">
            We transform cutting-edge AI into real-world applications.
          </p>
        </div>
      </div>

      <!-- Card 4: Partnership Mindset -->
      <div class="howwework-card howwework-card-partnership">
        <div class="howwework-card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4371436-vims-200h.png'); ?>"
            alt="Partnership Mindset" />
        </div>
        <div class="howwework-card-text">
          <h3 class="howwework-card-title">Partnership Mindset</h3>
          <p class="howwework-card-description">
            We treat clients and partners as collaborators, not just customers.
          </p>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
  .howwework-frame {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 48px;
    padding: 80px 20px;
  }

  /* Header */
  .howwework-text-block {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    max-width: 1320px;
    width: 100%;
    text-align: center;
  }

  .howwework-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #1E1B39;
    line-height: normal;
    margin: 0;
  }

  /* .howwework-title-highlight {
    color: #3C90FC;
  } */

  /* .title-highlight {
    color: #1E1B39;
  } */

  .howwework-description {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #474363;
    line-height: 1.6;
    margin: 0;
  }

  /* Images Container */
  .howwework-images-group-container {
    width: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 90px 20px 0;
  }

  .howwework-images-group {
    max-width: 1320px;
    width: 100%;
    height: 295px;
    margin: 0 auto;
    display: flex;
    position: relative;
    align-items: center;
    justify-content: center;
    transform: translateY(-90px);
  }

  /* Decorative Images - Desktop Only */
  .decorative-image {
    position: absolute;
  }

  .howwework-image3 {
    top: 27px;
    left: 271px;
    width: 101px;
    height: 103px;
  }

  .howwework-image8 {
    top: 27px;
    left: 947px;
    width: 101px;
    height: 103px;
  }

  .howwework-image7 {
    top: 76px;
    left: 610px;
    width: 101px;
    height: 102px;
  }

  /* Cards - Desktop Layout */
  .howwework-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 24px;
    width: 306px;
    position: absolute;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .howwework-card:hover {
    transform: translateY(-8px);
  }

  .howwework-card-lean {
    left: 0;
    top: 0;
  }

  .howwework-card-learning {
    left: 676px;
    top: 0;
  }

  .howwework-card-research {
    left: 338px;
    top: 49px;
  }

  .howwework-card-partnership {
    left: 1014px;
    top: 49px;
  }

  /* Card Image */
  .howwework-card-image {
    width: 130px;
    height: 130px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border-radius: 50%;
    overflow: hidden;
  }

  .howwework-card-image img {
    width: 100%;
    height: 100%;
    object-fit: none;
  }

  /* Card Text */
  .howwework-card-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    text-align: center;
  }

  .howwework-card-title {
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    font-weight: 700;
    color: #3C90FC;
    line-height: 20px;
    margin: 0;
  }

  .howwework-card-description {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #474363;
    line-height: 24px;
    margin: 0;
  }

  /* Responsive Design */
  @media (max-width: 1400px) {
    .howwework-images-group {
      max-width: 1200px;
    }

    .howwework-card-lean {
      left: 50px;
    }

    .howwework-card-learning {
      left: 550px;
    }

    .howwework-card-research {
      left: 250px;
    }

    .howwework-card-partnership {
      left: 850px;
    }

    .howwework-image3 {
      left: 200px;
    }

    .howwework-image8 {
      left: 800px;
    }

    .howwework-image7 {
      left: 500px;
    }
  }

  @media (max-width: 1024px) {
    .howwework-frame {
      padding: 60px 20px;
      gap: 40px;
    }

    .howwework-title {
      font-size: 40px;
    }

    .howwework-images-group-container {
      padding: 60px 20px 0;
      background-image: none !important;
    }

    .howwework-images-group {
      flex-direction: column;
      height: auto;
      gap: 32px;
      transform: translateY(0);
      padding: 40px 0;
    }

    /* Hide decorative images on tablet and mobile */
    .decorative-image {
      display: none;
    }

    /* Cards - Mobile Layout */
    .howwework-card {
      position: relative !important;
      left: auto !important;
      top: auto !important;
      width: 100%;
      max-width: 400px;
    }

    .howwework-card:hover {
      transform: translateY(-4px);
    }
  }

  @media (max-width: 768px) {
    .howwework-frame {
      padding: 50px 15px;
      gap: 32px;
    }

    .howwework-title {
      font-size: 36px;
    }

    .howwework-description {
      font-size: 13px;
    }

    .howwework-images-group-container {
      padding: 40px 15px 0;
    }

    .howwework-images-group {
      gap: 28px;
      padding: 30px 0;
    }

    .howwework-card {
      max-width: 350px;
      gap: 20px;
    }

    .howwework-card-image {
      width: 110px;
      height: 110px;
    }

    .howwework-card-title {
      font-size: 17px;
    }

    .howwework-card-description {
      font-size: 15px;
      line-height: 22px;
    }
  }

  @media (max-width: 480px) {
    .howwework-frame {
      padding: 40px 15px;
      gap: 28px;
    }

    .howwework-title {
      font-size: 28px;
    }

    .howwework-description {
      font-size: 12px;
      line-height: 1.5;
    }

    .howwework-images-group-container {
      padding: 30px 10px 0;
    }

    .howwework-images-group {
      gap: 24px;
      padding: 20px 0;
    }

    .howwework-card {
      max-width: 100%;
      gap: 16px;
      padding: 0 10px;
    }

    .howwework-card-image {
      width: 90px;
      height: 90px;
    }

    .howwework-card-title {
      font-size: 16px;
      line-height: 18px;
    }

    .howwework-card-description {
      font-size: 14px;
      line-height: 20px;
    }
  }
</style>