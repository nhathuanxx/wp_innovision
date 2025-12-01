<?php $lang = pll_current_language('slug'); ?>
<div class="clients-partners-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/client-partner-bg.png'); ?>');">

  <!-- Header -->
  <div class="section-header">
    <h2 class="section-title">
      Clients & <span class="title-highlight">Partners</span>
    </h2>
    <p class="section-description">
      Trusted by enterprises, government, and technology partners
    </p>
  </div>

  <!-- Slider Container -->
  <div class="slider-wrapper">

    <!-- Previous Button -->
    <button class="slider-btn btn-prev" id="prevBtn">
      <svg width="33" height="33" viewBox="0 0 33 33">
        <circle cx="16.5" cy="16.5" r="16.5" fill="white" stroke="#E5E7EB" stroke-width="1" />
        <path d="M18.5 11L13.5 16.5L18.5 22" stroke="#474363" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" />
      </svg>
    </button>

    <!-- Slider Content -->
    <div class="slider-container">
      <div class="slider-track" id="sliderTrack">

        <!-- Slide 1 -->
        <div class="slide active">
          <div class="slide-content">
            <h3 class="slide-title">Our Clients</h3>

            <div class="client-list">
              <div class="client-item">
                <span class="bullet"></span>
                <p>Enterprises in manufacturing, real estate, and technology.</p>
              </div>

              <div class="client-item">
                <span class="bullet"></span>
                <p>Government agencies adopting AI and data-driven solutions to enhance efficiency and public services.</p>
              </div>

              <div class="client-item">
                <span class="bullet"></span>
                <p>Startups & SMEs outsourcing AI, software, and firmware development.</p>
              </div>
            </div>
          </div>

          <div class="logos-grid">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rotek4x19848-4g7i-200h.png'); ?>" alt="Rostek" class="logo logo-1">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ais4x19847-b9pf-200h.png'); ?>" alt="AIS" class="logo logo-2">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image99850-s96-200h.png'); ?>" alt="Vinfast" class="logo logo-3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image109853-whwh-200w.png'); ?>" alt="Devzone" class="logo logo-4">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/itmon4x19855-nv68-200h.png'); ?>" alt="ITmon" class="logo logo-5">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tz4x19846-9iws-200h.png'); ?>" alt="TZ Hitec" class="logo logo-6">
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
          <div class="slide-content">
            <h3 class="slide-title">Our Partners</h3>

            <div class="client-list">
              <div class="client-item">
                <span class="bullet"></span>
                <p>Semiconductor companies – supporting hardware and embedded ecosystems.</p>
              </div>

              <div class="client-item">
                <span class="bullet"></span>
                <p>AWS/GCP – cloud & AI infrastructure.</p>
              </div>

              <div class="client-item">
                <span class="bullet"></span>
                <p>Electronics factories – enabling real-world deployment of Edge AI devices.</p>
              </div>
              <div class="client-item">
                <span class="bullet"></span>
                <p>Universities & Research Institutes – co-developing AI innovation.</p>
              </div>
            </div>
          </div>

          <div class="logos-grid">
            <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo1.png'); ?>" alt="Partner 1" class="logo logo-1">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo2.png'); ?>" alt="Partner 2" class="logo logo-2">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo3.png'); ?>" alt="Partner 3" class="logo logo-3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo4.png'); ?>" alt="Partner 4" class="logo logo-4">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo5.png'); ?>" alt="Partner 5" class="logo logo-5">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo6.png'); ?>" alt="Partner 6" class="logo logo-6">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo7.png'); ?>" alt="Partner 4" class="logo logo-7">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo8.png'); ?>" alt="Partner 5" class="logo logo-8">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/2logo9.png'); ?>" alt="Partner 6" class="logo logo-9"> -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rotek4x19848-4g7i-200h.png'); ?>" alt="Rostek" class="logo logo-1">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ais4x19847-b9pf-200h.png'); ?>" alt="AIS" class="logo logo-2">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image99850-s96-200h.png'); ?>" alt="Vinfast" class="logo logo-3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image109853-whwh-200w.png'); ?>" alt="Devzone" class="logo logo-4">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/itmon4x19855-nv68-200h.png'); ?>" alt="ITmon" class="logo logo-5">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tz4x19846-9iws-200h.png'); ?>" alt="TZ Hitec" class="logo logo-6">
          </div>
        </div>

      </div>
    </div>

    <!-- Next Button -->
    <button class="slider-btn btn-next" id="nextBtn">
      <svg width="33" height="33" viewBox="0 0 33 33">
        <circle cx="16.5" cy="16.5" r="16.5" fill="white" stroke="#E5E7EB" stroke-width="1" />
        <path d="M14.5 11L19.5 16.5L14.5 22" stroke="#474363" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" />
      </svg>
    </button>

  </div>

  <!-- Slide Indicators -->
  <div class="slide-indicators">
    <span class="indicator active" data-slide="0"></span>
    <span class="indicator" data-slide="1"></span>
  </div>

</div>

<style>
  .clients-partners-section {
    width: 100%;
    height: 784px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding-top: 114px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
  }

  /* Header */
  .section-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 149px;
    text-align: center;
  }

  .section-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #000000;
    margin: 0;
    line-height: normal;
  }

  .title-highlight {
    color: #4A90E2;
  }

  .section-description {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #474363;
    margin: 0;
  }

  /* Slider Wrapper */
  .slider-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 71px;
    width: 100%;
    max-width: 1400px;
    position: relative;
  }

  /* Slider Buttons */
  .slider-btn {
    width: 40px;
    height: 40px;
    border: none;
    background: transparent;
    cursor: pointer;
    transition: transform 0.2s ease;
    flex-shrink: 0;
    padding: 0;
  }

  .slider-btn:hover {
    transform: scale(1.1);
  }

  .slider-btn:active {
    transform: scale(0.95);
  }

  /* Slider Container */
  .slider-container {
    width: 1260px;
    max-width: 100%;
    overflow: hidden;
    position: relative;
  }

  .slider-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  /* Slide */
  .slide {
    min-width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 71px;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .slide.active {
    opacity: 1;
  }

  /* Slide Content */
  .slide-content {
    width: 643px;
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .slide-title {
    font-family: 'Inter', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #474363;
    margin: 0;
    line-height: normal;
  }

  /* Client List */
  .client-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .client-item {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .bullet {
    width: 8px;
    height: 8px;
    background: #007AFF;
    border-radius: 50%;
    border: 4px solid rgba(0, 122, 255, 0.15);
    flex-shrink: 0;
  }

  .client-item p {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #474363;
    margin: 0;
    line-height: normal;
  }

  /* Logos Grid */
  .logos-grid {
    width: 590px;
    height: 364px;
    position: relative;
    flex-shrink: 0;
  }

  .logo {
    position: absolute;
    filter: grayscale(100%);
    opacity: 0.7;
    transition: all 0.3s ease;
  }

  .logo:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.05);
  }

  .logo-1 {
    top: 0;
    left: 0;
    width: 320px;
    height: 97px;
  }

  .logo-2 {
    top: 7px;
    right: 53px;
    width: 168px;
    height: 94px;
  }

  .logo-3 {
    top: 154px;
    left: 15px;
    width: 312px;
    height: 70px;
  }

  .logo-4 {
    top: 141px;
    right: 75px;
    width: 79px;
    height: 96px;
  }

  .logo-5 {
    bottom: 0;
    left: 15px;
    width: 165px;
    height: 130px;
  }

  .logo-6 {
    bottom: 6px;
    left: 254px;
    width: 336px;
    height: 85px;
  }

  /* Slide Indicators */
  .slide-indicators {
    display: flex;
    gap: 12px;
    margin-top: 40px;
    display: none;
  }

  .indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #D1D5DB;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .indicator.active {
    background: #4A90E2;
    width: 30px;
    border-radius: 5px;
  }

  /* Responsive */
  @media (max-width: 1400px) {
    .slider-wrapper {
      gap: 40px;
      padding: 0 20px;
    }

    .slide {
      gap: 40px;
    }

    .slide-content {
      width: 500px;
    }

    .logos-grid {
      width: 500px;
      height: 300px;
      transform: scale(0.85);
    }
  }

  @media (max-width: 1024px) {
    .clients-partners-section {
      height: auto;
      padding: 60px 20px 80px;
    }

    .section-header {
      margin-bottom: 60px;
    }

    .section-title {
      font-size: 36px;
    }

    .slider-wrapper {
      flex-direction: column;
      gap: 40px;
    }

    .slider-btn {
      display: none;
    }

    .slide {
      flex-direction: column;
      gap: 40px;
    }

    .slide-content {
      width: 100%;
      max-width: 600px;
    }

    .logos-grid {
      width: 100%;
      max-width: 500px;
      height: 300px;
      transform: scale(0.8);
    }
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 28px;
    }

    .section-description {
      font-size: 14px;
    }

    .slide-title {
      font-size: 24px;
    }

    .client-item p {
      font-size: 14px;
    }

    .logos-grid {
      transform: scale(0.6);
      height: 250px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.getElementById('sliderTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');

    let currentSlide = 0;
    const totalSlides = slides.length;

    function updateSlider() {
      // Move slider
      sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;

      // Update active states
      slides.forEach((slide, index) => {
        slide.classList.toggle('active', index === currentSlide);
      });

      indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlide);
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      updateSlider();
    }

    function prevSlide() {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      updateSlider();
    }

    // Button events
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Indicator events
    indicators.forEach((indicator, index) => {
      indicator.addEventListener('click', () => {
        currentSlide = index;
        updateSlider();
      });
    });

    // Auto slide every 5 seconds
    let autoSlideInterval = setInterval(nextSlide, 5000);

    // Pause auto slide on hover
    sliderTrack.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });

    sliderTrack.addEventListener('mouseleave', () => {
      autoSlideInterval = setInterval(nextSlide, 5000);
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') prevSlide();
      if (e.key === 'ArrowRight') nextSlide();
    });
  });
</script>