<?php 
$lang = pll_current_language('slug'); 
$template_uri = get_template_directory_uri();

/* ============================
   TEXT & LOGO DATA BY LANGUAGE
   ============================ */

$data = [
    'en' => [
        'title' => 'Clients &',
        'description' => 'Trusted by enterprises, government, and technology partners',

        'clients_title' => 'Our Clients',
        'clients_text' => [
            "Enterprises in manufacturing, real estate, and technology.",
            "Government agencies adopting AI and data-driven solutions to enhance efficiency and public services.",
            "Startups & SMEs outsourcing AI, software, and firmware development.",
        ],

        'partners_title' => 'Our Partners',
        'partners_text' => [
            "Semiconductor companies – supporting hardware and embedded ecosystems.",
            "AWS/GCP – cloud & AI infrastructure.",
            "Electronics factories – enabling real-world deployment of Edge AI devices.",
            "Universities & Research Institutes – co-developing AI innovation.",
        ],
    ],

    'vi' => [
        'title' => 'Khách hàng &',
        'description' => 'Được tin tưởng bởi doanh nghiệp, chính phủ và các đối tác công nghệ',

        'clients_title' => 'Khách hàng của chúng tôi',
        'clients_text' => [
            "Các doanh nghiệp trong lĩnh vực sản xuất, bất động sản và công nghệ.",
            "Cơ quan chính phủ ứng dụng AI và dữ liệu để nâng cao hiệu quả dịch vụ công.",
            "Startup & SME thuê ngoài giải pháp AI, phần mềm và firmware.",
        ],

        'partners_title' => 'Đối tác của chúng tôi',
        'partners_text' => [
            "Các hãng bán dẫn – hỗ trợ hệ sinh thái phần cứng và nhúng.",
            "AWS/GCP – hạ tầng AI & Cloud.",
            "Nhà máy điện tử – triển khai thiết bị Edge AI thực tế.",
            "Trường đại học & viện nghiên cứu – đồng phát triển công nghệ AI.",
        ],
    ],
];

/* Fallback nếu ngôn ngữ không tồn tại */
$D = $data[$lang] ?? $data['en'];

/* LOGOS (dùng chung không cần dịch) */
$clients_logos = [
    "rotek4x19848-4g7i-200h.png",
    "ais4x19847-b9pf-200h.png",
    "image99850-s96-200h.png",
    "image109853-whwh-200w.png",
    "itmon4x19855-nv68-200h.png",
    "tz4x19846-9iws-200h.png",
];

$partners_logos = [
    "image201061-fhvi-200h.png",
    "image191061-gitn-200h.png",
    "image181061-s4u8-200h.png",
    "image141061-1a09-200h.png",
    "image171061-wavk-200h.png",
    "image151061-pszb-200h.png",
    "image121061-px5m-200h.png",
    "image131061-n76d-200h.png",
    "image161061-eju4-200h.png",
];
?>

<div class="clients-partners-section" style="background-image: url('<?php echo esc_url($template_uri . '/assets/images/innovision/client-partner-bg.png'); ?>');">

  <!-- Header -->
  <div class="cp-section-header">
    <h2 class="cp-section-title">
      <?php echo esc_html($D['title']); ?>
      <span class="cp-title-highlight"><?php echo ($lang === 'vi') ? 'Đối tác' : 'Partners'; ?></span>
    </h2>
    <p class="cp-section-description">
      <?php echo esc_html($D['description']); ?>
    </p>
  </div>

  <!-- DESKTOP SLIDER -->
  <div class="cp-slider-wrapper">
    <div class="cp-slider-btn cp-btn-prev" id="cpPrevBtn">
      <svg width="33" height="33" viewBox="0 0 33 33">
        <!-- <circle cx="16.5" cy="16.5" r="16.5" fill="white" stroke="#E5E7EB" stroke-width="1" /> -->
        <path d="M18.5 11L13.5 16.5L18.5 22" stroke="#3C90FC" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="none" />
      </svg>
    </div>

    <div class="cp-slider-container">
      <div class="cp-slider-track" id="cpSliderTrack">

        <!-- CLIENTS SLIDE -->
        <div class="cp-slide active">
          <div class="cp-slide-content">
            <h3 class="cp-slide-title"><?php echo esc_html($D['clients_title']); ?></h3>

            <div class="cp-client-list">
              <?php foreach ($D['clients_text'] as $text): ?>
                <div class="cp-client-item">
                  <div class="bullet-container"><div class="bullet"></div></div>
                  <p><?php echo esc_html($text); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="cp-clients-logos-grid">
            <?php foreach ($clients_logos as $i => $logo): ?>
              <img src="<?php echo esc_url($template_uri . '/assets/images/innovision/' . $logo); ?>" 
                   class="cp-client-logo cp-client-logo-<?php echo $i + 1; ?>">
            <?php endforeach; ?>
          </div>
        </div>

        <!-- PARTNERS SLIDE -->
        <div class="cp-slide">
          <div class="cp-slide-content">
            <h3 class="cp-slide-title"><?php echo esc_html($D['partners_title']); ?></h3>

            <div class="cp-client-list">
              <?php foreach ($D['partners_text'] as $text): ?>
                <div class="cp-client-item">
                  <div class="bullet-container"><div class="bullet"></div></div>
                  <p><?php echo esc_html($text); ?></p>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="cp-partners-logos-grid">
            <?php foreach ($partners_logos as $i => $logo): ?>
              <img src="<?php echo esc_url($template_uri . '/assets/images/innovision/' . $logo); ?>" 
                   class="cp-partner-logo cp-partner-logo-<?php echo $i + 1; ?>">
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>

    <div class="cp-slider-btn cp-btn-next" id="cpNextBtn">
      <svg width="33" height="33" viewBox="0 0 33 33">
        <!-- <circle cx="16.5" cy="16.5" r="16.5" fill="white" stroke="#E5E7EB" stroke-width="1" /> -->
        <path d="M14.5 11L19.5 16.5L14.5 22" stroke="#3C90FC" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="none" />
      </svg>
    </div>
  </div>

  <!-- MOBILE VERSION -->
  <div class="cp-mobile-content">

    <!-- CLIENTS MOBILE -->
    <div class="cp-mobile-section">
      <h3 class="cp-mobile-title"><?php echo esc_html($D['clients_title']); ?></h3>

      <div class="cp-mobile-text-list">
        <?php foreach ($D['clients_text'] as $text): ?>
          <div class="cp-mobile-item">
            <div class="bullet-container"><div class="bullet"></div></div>
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="cp-mobile-logos">
        <?php foreach ($clients_logos as $logo): ?>
          <img src="<?php echo esc_url($template_uri . '/assets/images/innovision/' . $logo); ?>">
        <?php endforeach; ?>
      </div>
    </div>

    <!-- PARTNERS MOBILE -->
    <div class="cp-mobile-section">
      <h3 class="cp-mobile-title"><?php echo esc_html($D['partners_title']); ?></h3>

      <div class="cp-mobile-text-list">
        <?php foreach ($D['partners_text'] as $text): ?>
          <div class="cp-mobile-item">
            <div class="bullet-container"><div class="bullet"></div></div>
            <p><?php echo esc_html($text); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="cp-mobile-logos">
        <?php foreach ($partners_logos as $logo): ?>
          <img src="<?php echo esc_url($template_uri . '/assets/images/innovision/' . $logo); ?>">
        <?php endforeach; ?>
      </div>
    </div>

  </div>

</div>

<style>
  .clients-partners-section {
    width: 100%;
    min-height: 784px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 114px 20px 80px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
  }

  /* Header */
  .cp-section-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 80px;
    text-align: center;
  }

  .cp-section-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #000000;
    margin: 0;
  }

  .cp-title-highlight {
    color: #4A90E2;
  }

  .cp-section-description {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    color: #474363;
    margin: 0;
  }

  /* Desktop Slider */
  .cp-slider-wrapper {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1320px;
    width: 100%;
  }

  .cp-slider-btn {
    width: 33.33px;
    height: 33.33px;
    border:  1px solid #3C90FC;
    background: transparent;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* .cp-slider-btn:hover {
    transform: scale(1.1);
  } */

  .cp-slider-container {
    flex: 1;
    overflow: hidden;
  }

  .cp-slider-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .cp-slide {
    min-width: 100%;
    display: flex;
    align-items: center;
    gap: 40px;
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .cp-slide.active {
    opacity: 1;
  }

  .cp-slide-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .cp-slide-title {
    font-family: 'Inter', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #474363;
    margin: 0;
  }

  .cp-client-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .cp-client-item {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .cp-bullet-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background-color: rgba(0, 122, 255, 0.15);
    flex-shrink: 0;
    margin-top: 2px;
  }

  .cp-bullet {
    width: 8px;
    height: 8px;
    background: #007AFF;
    border-radius: 50%;
  }

  .cp-client-item p {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    color: #474363;
    margin: 0;
    line-height: 1.6;
    flex: 1;
  }

  /* Logos Grids */
  .cp-clients-logos-grid {
    width: 500px;
    height: 300px;
    position: relative;
    flex-shrink: 0;
  }

  .cp-client-logo {
    position: absolute;
    transition: all 0.3s ease;
    max-width: 100%;
    height: auto;
  }

  .cp-client-logo:hover {
    transform: scale(1.05);
  }

  .cp-client-logo-1 { top: 0; left: 0; width: 200px; }
  .cp-client-logo-2 { top: 5px; right: 40px; width: 120px; }
  .cp-client-logo-3 { top: 110px; left: 10px; width: 220px; }
  .cp-client-logo-4 { top: 100px; right: 55px; width: 55px; }
  .cp-client-logo-5 { bottom: 0; left: 10px; width: 115px; }
  .cp-client-logo-6 { bottom: 5px; left: 180px; width: 240px; }

  .cp-partners-logos-grid {
    width: 500px;
    height: 180px;
    position: relative;
    flex-shrink: 0;
  }

  .cp-partner-logo {
    position: absolute;
    transition: all 0.3s ease;
    max-width: 100%;
    height: auto;
  }

  .cp-partner-logo:hover {
    transform: scale(1.05);
  }

  .cp-partner-logo-1 { top: 0; left: 0; width: 125px; }
  .cp-partner-logo-2 { bottom: 0; left: 0; width: 235px; }
  .cp-partner-logo-3 { top: 75px; left: 0; width: 270px; }
  .cp-partner-logo-4 { bottom: 0; right: 0; width: 115px; }
  .cp-partner-logo-5 { top: 68px; right: 5px; width: 98px; }
  .cp-partner-logo-6 { top: 0; left: 175px; width: 120px; }
  .cp-partner-logo-7 { top: 0; right: 0; width: 150px; }
  .cp-partner-logo-8 { bottom: 0; left: 263px; width: 72px; }
  .cp-partner-logo-9 { top: 69px; left: 303px; width: 43px; }

  /* Mobile Content - Hidden on Desktop */
  .cp-mobile-content {
    display: none;
  }

  /* Responsive */
  @media (max-width: 1024px) {
    .clients-partners-section {
      padding: 60px 20px;
    }

    .cp-section-header {
      margin-bottom: 60px;
    }

    .cp-section-title {
      font-size: 36px;
    }

    /* Hide Desktop Slider */
    .cp-slider-wrapper {
      display: none;
    }

    /* Show Mobile Content */
    .cp-mobile-content {
      display: flex;
      flex-direction: column;
      gap: 60px;
      max-width: 800px;
      width: 100%;
    }

    .cp-mobile-section {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .cp-mobile-title {
      font-family: 'Inter', sans-serif;
      font-size: 28px;
      font-weight: 700;
      color: #474363;
      margin: 0;
      text-align: center;
    }

    .cp-mobile-text-list {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .cp-mobile-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .cp-mobile-item p {
      font-family: 'Inter', sans-serif;
      font-size: 15px;
      line-height: 1.6;
      color: #474363;
      margin: 0;
    }

    /* Mobile Logos Grid */
    .cp-mobile-logos {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px 20px;
      align-items: center;
      justify-items: center;
      padding: 20px 0;
    }

    .cp-mobile-logos img {
      max-width: 100%;
      height: auto;
      max-height: 60px;
      object-fit: contain;
    }
  }

  @media (max-width: 768px) {
    .cp-section-title {
      font-size: 28px;
    }

    .cp-section-description {
      font-size: 14px;
    }

    .cp-mobile-title {
      font-size: 24px;
    }

    .cp-mobile-item p {
      font-size: 14px;
    }

    .cp-mobile-logos {
      grid-template-columns: repeat(2, 1fr);
      gap: 25px 15px;
    }
  }

  @media (max-width: 480px) {
    .cp-mobile-logos {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px 10px;
    }

    .cp-mobile-logos img {
      max-height: 50px;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.getElementById('cpSliderTrack');
    const prevBtn = document.getElementById('cpPrevBtn');
    const nextBtn = document.getElementById('cpNextBtn');
    const slides = document.querySelectorAll('.cp-slide');

    if (!sliderTrack || !prevBtn || !nextBtn) return;

    let currentSlide = 0;
    const totalSlides = slides.length;

    function updateSlider() {
      sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
      slides.forEach((slide, index) => {
        slide.classList.toggle('active', index === currentSlide);
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

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    let autoSlideInterval = setInterval(nextSlide, 5000);

    sliderTrack.addEventListener('mouseenter', () => {
      clearInterval(autoSlideInterval);
    });

    sliderTrack.addEventListener('mouseleave', () => {
      autoSlideInterval = setInterval(nextSlide, 5000);
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') prevSlide();
      if (e.key === 'ArrowRight') nextSlide();
    });
  });
</script>