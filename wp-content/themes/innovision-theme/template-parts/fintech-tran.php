<?php

$fields = $args['fields'] ?? [];

if (empty($fields['fintech_diagram_enable'])) {
    return;
}

$section_title = $fields['fintech_diagram_title'] ?? 'Fintech Transaction Verification Assistant';
$diagram_image = $fields['fintech_diagram_image'] ?? null;
?>

<div class="fintech-diagram-section">
  <div class="fintech-diagram-container">
    
    <!-- Section Title -->
    <h2 class="fintech-diagram-title"><?= esc_html($section_title); ?></h2>

    <!-- Diagram Image -->
    <div class="fintech-diagram-wrapper">
      <img
        src="<?= esc_url($diagram_image['url']); ?>"
        alt="<?= esc_attr($diagram_image['alt'] ?: $section_title); ?>"
        class="fintech-diagram-image"
        loading="lazy"
      />
    </div>

  </div>
</div>

<style>
/* ========================================
   Fintech Diagram Section
   ======================================== */

.fintech-diagram-section {
  width: 100%;
  padding: 43px 0px 22px 0px;
  /* background: #ffffff; */
}

.fintech-diagram-container {
  max-width: 1320px;
  margin: 0 auto;
}

/* Title */
.fintech-diagram-title {
font-family: Montserrat;
font-weight: 700;
font-style: Bold;
font-size: 36px;
line-height: normal;
letter-spacing: 0%;
text-align: center;
vertical-align: middle;
color: #474464;

}

/* Diagram Wrapper */
.fintech-diagram-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.fintech-diagram-image {
  width: 100%;
  height: auto;
  display: block;
  max-width: 100%;
}

/* ========================================
   Responsive Design
   ======================================== */

/* Desktop */
@media (max-width: 1440px) {
  .fintech-diagram-title {
    font-size: 36px;
    margin-bottom: 50px;
  }
}

/* Tablet Large */
@media (max-width: 1024px) {
  .fintech-diagram-section {
    padding: 60px 0;
  }

  .fintech-diagram-container {
    padding: 0 30px;
  }

  .fintech-diagram-title {
    font-size: 32px;
    margin-bottom: 40px;
  }
}

/* Tablet */
@media (max-width: 768px) {
  .fintech-diagram-section {
    padding: 50px 0;
  }

  .fintech-diagram-container {
    padding: 0 20px;
  }

  .fintech-diagram-title {
    font-size: 28px;
    margin-bottom: 30px;
  }
}

/* Mobile Large */
@media (max-width: 480px) {
  .fintech-diagram-section {
    padding: 40px 0;
  }

  .fintech-diagram-container {
    padding: 0 16px;
  }

  .fintech-diagram-title {
    font-size: 24px;
    margin-bottom: 24px;
    line-height: 1.3;
  }
}

/* Mobile Small */
@media (max-width: 360px) {
  .fintech-diagram-title {
    font-size: 20px;
    margin-bottom: 20px;
  }
}

/* Print Styles */
@media print {
  .fintech-diagram-section {
    padding: 20px 0;
    page-break-inside: avoid;
  }
}
</style>