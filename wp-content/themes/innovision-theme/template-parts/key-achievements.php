<?php $lang = pll_current_language('slug'); ?>
<div class="achievements-section">
  <!-- Title -->
  <h2 class="section-title">
    Key <span class="title-highlight">Achievements</span>
  </h2>

  <!-- Achievements Grid -->
  <div class="achievements-grid">
    <!-- Row 1: 2 cards -->
    <div class="grid-row row-2">
      <!-- Card 1: AI Vision -->
      <div class="achievement-card card-large">
        <div class="card-content">
          <h3 class="card-title">AI Vision for Manufacturing</h3>
          <p class="card-description">
            Delivered proof-of-concept systems for automated OK/NG inspection with accuracy rates above 95%
          </p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/picturehomepageautomationfinpng1388-2pt5-400h.png'); ?>"
            alt="AI Vision for Manufacturing" />
        </div>
      </div>

      <!-- Card 2: LLM Development -->
      <div class="achievement-card card-large">
        <div class="card-content">
          <h3 class="card-title">LLM Development for Enterprises & Government</h3>
          <p class="card-description">
            Developed a Vietnamese domain-specific LLM with Retrieval-Augmented Generation (RAG) for knowledge management, helping businesses and government agencies digitize documents and provide trustworthy Q&A
          </p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationworkflowsdesktoppng1390-iofa-400h.png'); ?>"
            alt="LLM Development" />
        </div>
      </div>
    </div>

    <!-- Row 2: 3 cards -->
    <div class="grid-row row-3">
      <!-- Card 3: Firmware & IoT -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title">Firmware & IoT Services</h3>
          <p class="card-description">
            Exported embedded software and firmware solutions to clients in Asia and Europe
          </p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationaipoweredinboxpng1395-7bmb-500w.png'); ?>"
            alt="Firmware & IoT Services" />
        </div>
      </div>

      <!-- Card 4: Ecosystem Recognition -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title">Ecosystem Recognition</h3>
          <p class="card-description">
            Accepted into global technology ecosystems (AWS, semiconductor partners, research collaborations)
          </p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationarticlesuggestionspng1400-e03-500w.png'); ?>"
            alt="Ecosystem Recognition" />
        </div>
      </div>

      <!-- Card 5: Real Estate Pipeline -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title">Real Estate Data Pipeline</h3>
          <p class="card-description">
            Built an AI-driven workflow that standardized 5,000 property listings within just 10 days
          </p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationconversationtopicspng1405-pry-500w.png'); ?>"
            alt="Real Estate Data Pipeline" />
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .achievements-section {
    width: 100%;
    max-width: 1320px;
    margin: 0 auto;
    padding: 80px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 48px;
  }

  /* Title */
  .section-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #000000;
    text-align: center;
    margin: 0;
    line-height: normal;
  }

  .title-highlight {
    color: #3C90FC;
  }

  /* Grid Container */
  .achievements-grid {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  /* Grid Rows */
  .grid-row {
    display: flex;
    gap: 32px;
    width: 100%;
  }

  .row-2 {
    justify-content: center;
  }

  .row-3 {
    justify-content: center;
  }

  /* Achievement Cards */
  .achievement-card {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    background: linear-gradient(180deg, #F3F9FF 0%, #C4E0FD 100%);
    border: 1px solid #D3D5D8;
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
  }

  .achievement-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(60, 144, 252, 0.2);
  }

  /* Large Cards (Row 1) */
  .card-large {
    flex: 1;
    max-width: 644px;
    height: 458px;
  }

  /* Small Cards (Row 2) */
  .card-small {
    flex: 1;
    max-width: 419px;
    height: 440px;
  }

  /* Card Content */
  .card-content {
    padding: 32px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 2;
  }

  /* .card-large .card-content {
    max-width: 580px;
  } */

  /* .card-small .card-content {
    max-width: 355px;
  } */

  .card-title {
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #000000;
    margin: 0;
    line-height: 20px;
  }

  .card-description {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #474363;
    margin: 0;
    line-height: 24px;
  }

  /* Card Image */
  .card-image {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    z-index: 1;
  }

  .card-large .card-image {
    height: 301px;
    margin-top: 157px;
  }

  .card-small .card-image {
    height: 260px;
    margin-top: 180px;
  }

  .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Responsive Design */
  @media (max-width: 1400px) {
    .achievements-section {
      max-width: 100%;
      padding: 80px 40px;
    }
  }

  @media (max-width: 1200px) {
    .grid-row {
      flex-wrap: wrap;
    }

    .card-large,
    .card-small {
      max-width: 100%;
      min-width: 300px;
    }
  }

  @media (max-width: 768px) {
    .achievements-section {
      padding: 60px 20px;
      gap: 40px;
    }

    .section-title {
      font-size: 36px;
    }

    .grid-row {
      flex-direction: column;
    }

    .achievement-card {
      width: 100%;
      max-width: 100% !important;
      height: auto;
      min-height: 400px;
    }

    .card-content {
      padding: 24px;
    }

    .card-title {
      font-size: 18px;
    }

    .card-description {
      font-size: 14px;
      line-height: 22px;
    }

    .card-image {
      position: relative;
      height: 240px !important;
      margin-top: 20px !important;
    }
  }

  @media (max-width: 480px) {
    .section-title {
      font-size: 28px;
    }

    .card-content {
      padding: 20px;
    }

    .card-title {
      font-size: 16px;
    }

    .card-description {
      font-size: 13px;
      line-height: 20px;
    }
  }
</style>