<?php 
$lang = pll_current_language('slug');

// ===== DEFAULT: EN =====
$section_title_1 = "Key";
$section_title_2 = "Achievements";

// Card 1
$c1_title = "AI Vision for Manufacturing";
$c1_desc  = "Delivered proof-of-concept systems for automated OK/NG inspection with accuracy rates above 95%";

// Card 2
$c2_title = "LLM Development for Enterprises & Government";
$c2_desc  = "Developed a Vietnamese domain-specific LLM with Retrieval-Augmented Generation (RAG) for knowledge management, helping businesses and government agencies digitize documents and provide trustworthy Q&A";

// Card 3
$c3_title = "Firmware & IoT Services";
$c3_desc  = "Exported embedded software and firmware solutions to clients in Asia and Europe";

// Card 4
$c4_title = "Ecosystem Recognition";
$c4_desc  = "Accepted into global technology ecosystems (AWS, semiconductor partners, research collaborations)";

// Card 5
$c5_title = "Real Estate Data Pipeline";
$c5_desc  = "Built an AI-driven workflow that standardized 5,000 property listings within just 10 days";


// ===== VIETNAMESE =====
if ($lang === 'vi') {

    $section_title_1 = "Những";
    $section_title_2 = "Thành Tựu Nổi Bật";

    // Card 1
    $c1_title = "AI Thị Giác cho Sản Xuất";
    $c1_desc  = "Phát triển hệ thống thử nghiệm OK/NG tự động với độ chính xác trên 95%";

    // Card 2
    $c2_title = "Phát triển LLM cho Doanh nghiệp & Chính phủ";
    $c2_desc  = "Xây dựng mô hình LLM chuyên ngành tiếng Việt kết hợp RAG giúp số hoá tài liệu và cung cấp khả năng hỏi đáp đáng tin cậy cho doanh nghiệp và cơ quan nhà nước";

    // Card 3
    $c3_title = "Dịch vụ Firmware & IoT";
    $c3_desc  = "Xuất khẩu giải pháp phần mềm nhúng và firmware cho khách hàng tại châu Á và châu Âu";

    // Card 4
    $c4_title = "Công Nhận Hệ Sinh Thái";
    $c4_desc  = "Được chấp nhận vào các hệ sinh thái công nghệ toàn cầu (AWS, đối tác bán dẫn, hợp tác nghiên cứu)";

    // Card 5
    $c5_title = "Pipeline Dữ Liệu Bất Động Sản";
    $c5_desc  = "Xây dựng quy trình AI chuẩn hóa 5.000 tin bất động sản chỉ trong 10 ngày";
}
?>


<div class="achievements-section">
  <!-- Title -->
  <h2 class="section-title">
    <?php echo esc_html($section_title_1); ?> 
    <span class="title-highlight"><?php echo esc_html($section_title_2); ?></span>
  </h2>

  <!-- Achievements Grid -->
  <div class="achievements-grid">

    <!-- Row 1: 2 cards -->
    <div class="grid-row row-2">

      <!-- Card 1 -->
      <div class="achievement-card card-large">
        <div class="card-content">
          <h3 class="card-title"><?php echo esc_html($c1_title); ?></h3>
          <p class="card-description"><?php echo esc_html($c1_desc); ?></p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/picturehomepageautomationfinpng1388-2pt5-400h.png'); ?>"
            alt="<?php echo esc_attr($c1_title); ?>" />
        </div>
      </div>

      <!-- Card 2 -->
      <div class="achievement-card card-large">
        <div class="card-content">
          <h3 class="card-title"><?php echo esc_html($c2_title); ?></h3>
          <p class="card-description"><?php echo esc_html($c2_desc); ?></p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationworkflowsdesktoppng1390-iofa-400h.png'); ?>"
            alt="<?php echo esc_attr($c2_title); ?>" />
        </div>
      </div>
    </div>

    <!-- Row 2: 3 cards -->
    <div class="grid-row row-3">

      <!-- Card 3 -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title"><?php echo esc_html($c3_title); ?></h3>
          <p class="card-description"><?php echo esc_html($c3_desc); ?></p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationaipoweredinboxpng1395-7bmb-500w.png'); ?>"
            alt="<?php echo esc_attr($c3_title); ?>" />
        </div>
      </div>

      <!-- Card 4 -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title"><?php echo esc_html($c4_title); ?></h3>
          <p class="card-description"><?php echo esc_html($c4_desc); ?></p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationarticlesuggestionspng1400-e03-500w.png'); ?>"
            alt="<?php echo esc_attr($c4_title); ?>" />
        </div>
      </div>

      <!-- Card 5 -->
      <div class="achievement-card card-small">
        <div class="card-content">
          <h3 class="card-title"><?php echo esc_html($c5_title); ?></h3>
          <p class="card-description"><?php echo esc_html($c5_desc); ?></p>
        </div>
        <div class="card-image">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/homepageautomationconversationtopicspng1405-pry-500w.png'); ?>"
            alt="<?php echo esc_attr($c5_title); ?>" />
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