<?php $lang = pll_current_language('slug'); ?>
<div class="homepage-footer">
  <div class="footer-container">
    <!-- CONTACT INFO -->
    <div class="footer-column">
      <div class="footer-logo">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/asset14x12033-ysci-200h.png'); ?>"
          alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
      </div>
      <div class="contact-info">
        <div class="section-title-footer">Email:</div>
        <div class="link-text">support@innovision.com</div>
      </div>
      <div class="office-info">
        <div class="section-title-footer-bold">Vietnam • Hanoi Office</div>
        <div class="text-item">Hoan Kiem District, Hanoi</div>
        <div class="text-item">(+84) 88.639.2913</div>
      </div>
    </div>

    <!-- SOLUTIONS & TECHNOLOGIES -->
    <div class="footer-column">
      <div class="section-title-footer-bold">SOLUTIONS</div>
      <div class="footer-list">
        <div class="link-text">AI Products</div>
        <div class="link-text">Industrial AI &amp; Automation</div>
        <div class="link-text multi-line">Software &amp; Firmware Development</div>
      </div>

      <div class="section-title-footer-bold">TECHNOLOGIES</div>
      <div class="footer-list">
        <div class="text-item">LLM &amp; RAG</div>
        <div class="text-item">Edge AI (Qualcomm, NXP)</div>
        <div class="text-item">Computer Vision</div>
        <div class="text-item">TinyML</div>
        <div class="text-item">Embedded Systems</div>
      </div>
    </div>

    <!-- AI PRODUCTS & EDGE AI -->
    <div class="footer-column">
      <div class="section-title-footer-bold">AI PRODUCTS</div>
      <div class="footer-list">
        <div class="text-item">Real Estate AI Assistant</div>
        <div class="text-item">Fintech Verification AI</div>
        <div class="text-item">Government Document AI</div>
        <div class="text-item multi-line">Marketing Content Assistant</div>
        <div class="text-item">Document Intelligence</div>
        <div class="text-item">Conversational AI</div>
      </div>

      <div class="section-title-footer-bold">EDGE AI</div>
      <div class="footer-list">
        <div class="text-item">Qualcomm QCS6490 Vision AI</div>
        <div class="text-item">NXP i.MX Edge Inference</div>
        <div class="text-item">Predictive Maintenance</div>
        <div class="text-item">Custom SoM Design</div>
      </div>
    </div>

    <!-- SOFTWARE & FIRMWARE -->
    <div class="footer-column">
      <div class="section-title-footer-bold">SOFTWARE &amp; FIRMWARE</div>
      <div class="footer-list">
        <div class="text-item">Embedded Connectivity</div>
        <div class="text-item">Motor Controller (FOC)</div>
        <div class="text-item">High-Traffic Web Platform</div>
        <div class="text-item">Full-Stack IoT Platform</div>
        <div class="text-item">OCPP Firmware (EV Charger)</div>
        <div class="text-item">BLE &amp; Cellular</div>
      </div>
    </div>

    <!-- COMPANY & INDUSTRIES -->
    <div class="footer-column">
      <div class="section-title-footer-bold">COMPANY</div>
      <div class="footer-list">
        <div class="link-text">About Innovision</div>
        <div class="link-text">Portfolio</div>
        <div class="text-item">Careers</div>
        <div class="link-text">Contact Us</div>
      </div>

      <div class="section-title-footer-bold">INDUSTRIES</div>
      <div class="footer-list">
        <div class="text-item">Fintech</div>
        <div class="text-item">Real Estate</div>
        <div class="text-item">Manufacturing</div>
        <div class="text-item">Government</div>
        <div class="text-item">Healthcare</div>
        <div class="text-item">IoT &amp; Smart Devices</div>
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

  .footer-logo {
    width: 187px;
    height: 36px;
  }

  .footer-logo img {
    width: 98px;
    height: 36px;
  }

  .contact-info,
  .office-info {
    display: flex;
    flex-direction: column;
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
  }

  .link-text:hover {
    text-decoration: underline;
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
    padding: 33px;
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

  @media (max-width: 768px) {
    .footer-container {
      flex-direction: column;
    }
    
    .footer-column {
      width: 100%;
    }
  }
</style>