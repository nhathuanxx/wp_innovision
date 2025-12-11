<?php $lang = pll_current_language('slug'); ?>
<div class="homepage-footer">
  <div class="footer-container">
    <!-- CONTACT INFO -->
    <div class="footer-column">
      <a href="https://innovision.amintek.com.vn/home/" class="footer-logo">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/asset14x12033-ysci-200h.png'); ?>"
          alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
      </a>
      <div class="office-info">
        <div class="text-item">Alley 62, Khuc Thua Du, Dich Vong Ward, Cau Giay District</div>
        <a href="tel:+84886392913" class="text-item">(+84) 88.639.2913</a>
                <a href="mailto:support@innovision.com" class="text-item">support@innovision.com</a>

      </div>
          <!-- <div class="contact-info">
        <a href="mailto:support@innovision.com" class="link-text">support@innovision.com</a>
      </div> -->
    </div>
    <!-- COMPANY & INDUSTRIES -->
    <div class="footer-column">
      <div class="section-title-footer-bold">COMPANY</div>
      <div class="footer-list">
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="link-text">About Innovision</a>
        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="link-text">Portfolio</a>
        <a href="<?php echo esc_url(home_url('/careers')); ?>" class="link-text">Careers</a>
        <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="link-text">Contact Us</a>
      </div>
    </div>
    <!-- SOLUTIONS & TECHNOLOGIES -->
    <div class="footer-column">
      <div class="section-title-footer-bold">SOLUTIONS</div>
      <div class="footer-list">
        <a href="<?php echo esc_url(home_url('/ai-products')); ?>" class="link-text">AI Products</a>
        <a href="<?php echo esc_url(home_url('/industrial-ai-automation')); ?>" class="link-text">Industrial AI &amp; Automation</a>
        <a href="<?php echo esc_url(home_url('/software-firmware-development')); ?>" class="link-text multi-line">Software &amp; Firmware Development</a>
      </div>
    </div>

    <!-- AI PRODUCTS & EDGE AI -->
    <div class="footer-column">
      <div class="section-title-footer-bold">AI PRODUCTS</div>
      <div class="footer-list">
        <a href="<?php echo esc_url(home_url('/real-estate-ai-assistant')); ?>" class="link-text">Real Estate AI Assistant</a>
        <a href="<?php echo esc_url(home_url('/fintech-verification-ai')); ?>" class="link-text">Fintech Verification AI</a>
        <a href="<?php echo esc_url(home_url('/government-document-ai')); ?>" class="link-text">Government Document AI</a>
        <a href="<?php echo esc_url(home_url('/marketing-content-assistant')); ?>" class="link-text multi-line">Marketing Content Assistant</a>
        <a href="<?php echo esc_url(home_url('/document-intelligence')); ?>" class="link-text">Document Intelligence</a>
        <a href="<?php echo esc_url(home_url('/conversational-ai')); ?>" class="link-text">Conversational AI</a>
      </div>
    </div>
  </div>

  <div class="footer-copyright">
    <span>©2025 Innovision Corporation. All rights reserved.</span>
  </div>
</div>

<style>
  .homepage-footer {
    width: 100%;
    padding: 80px 114px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 60px;
    background-color: rgba(244, 247, 252, 1);
  }

  .footer-container {
    width: 1320px;
    display: flex;
    gap: 32px;
  }

  .footer-column {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  /* Reset default <a> styles */
  .homepage-footer a {
    color: inherit;
    text-decoration: none;
    background: none;
    border: none;
    padding: 0;
    margin: 0;
  }

  .footer-logo {
    width: 187px;
    height: 36px;
    display: block;
    transition: opacity 0.3s ease;
  }

  .footer-logo:hover {
    opacity: 0.8;
  }

  .footer-logo img {
    width: 98px;
    height: 36px;
  }

  .contact-info,
  .office-info {
    display: flex;
    flex-direction: column;
    padding-right: 30px;
    gap: 8px;
  }

  .section-title-footer {
    color: rgba(71, 67, 99, 1);
    font-size: 14px;
    font-family: Helvetica;
    font-weight: 400;
    line-height: 21px;
  }

  .section-title-footer-bold {
    color: rgba(0, 0, 0, 0.9);
    font-size: 14px;
    font-family: Inter;
    font-weight: 700;
    line-height: 21px;
    margin-bottom: 12px;
  }

  .link-text {
    color: rgba(71, 67, 99, 1);
    font-size: 14px;
    font-family: Inter;
    font-weight: 400;
    line-height: 21px;
    cursor: pointer;
    transition: all 0.2s ease;
    display: inline-block;
    position: relative;
  }

  .link-text::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 1px;
    background-color: rgba(71, 67, 99, 1);
    transition: width 0.3s ease;
  }

  .link-text:hover {
    color: rgba(60, 144, 252, 1);
  }

  .link-text:hover::after {
    width: 100%;
    background-color: rgba(60, 144, 252, 1);
  }

  .text-item {
    color: rgba(71, 67, 99, 1);
    font-size: 14px;
    font-family: Inter;
    font-weight: 400;
    line-height: 21px;
  }

  .multi-line {
    line-height: 21px;
  }

  .footer-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 20px;
  }

  .footer-copyright {
    width: 1320px;
    padding: 33px 0;
    border-top: 1px solid rgba(224, 224, 224, 1);
    text-align: center;
  }

  .footer-copyright span {
    color: rgba(156, 163, 175, 1);
    font-size: 14px;
    font-family: Inter;
    font-weight: 400;
    line-height: 21px;
  }

  /* Responsive */
  @media (max-width: 1400px) {
    .homepage-footer {
      padding: 60px 40px 0;
    }
    
    .footer-container,
    .footer-copyright {
      width: 100%;
      max-width: 1320px;
    }
  }

  @media (max-width: 1024px) {
    .homepage-footer {
      padding: 50px 30px 0;
      gap: 50px;
    }

    .footer-container {
      gap: 40px;
      flex-wrap: wrap;
    }

    .footer-column {
      flex: 1 1 calc(50% - 20px);
      min-width: 250px;
    }
  }

  @media (max-width: 768px) {
    .homepage-footer {
      padding: 40px 20px 0;
      gap: 40px;
    }

    .footer-container {
      flex-direction: column;
      gap: 32px;
    }
    
    .footer-column {
      width: 100%;
      max-width: 100%;
    }

    .footer-copyright {
      padding: 24px 0;
    }
  }

  @media (max-width: 480px) {
    .homepage-footer {
      padding: 30px 15px 0;
      gap: 30px;
    }

    .footer-container {
      gap: 28px;
    }

    .section-title-footer-bold {
      font-size: 13px;
      margin-bottom: 10px;
    }

    .link-text,
    .text-item,
    .section-title-footer {
      font-size: 13px;
      line-height: 20px;
    }

    .footer-list {
      gap: 10px;
      margin-bottom: 16px;
    }

    .footer-copyright {
      padding: 20px 0;
    }

    .footer-copyright span {
      font-size: 12px;
    }
  }
</style>