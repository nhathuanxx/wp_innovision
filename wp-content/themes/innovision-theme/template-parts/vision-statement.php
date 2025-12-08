<?php
/**
 * Reusable Visiton Statement component
 */

$lang = pll_current_language('slug');
?>

<div class="vision-section">
  <div class="vision-content">
    <div class="vision-header">
      <h2 class="vision-title">
        <span class="highlight">Vision</span>
        <span>Statement</span>
      </h2>
      <p class="vision-description">
        We believe the future of AI lies in domain-specific, localized
        LLMs that empower organizations to unlock their data and
        knowledge
      </p>
    </div>

    <div class="vision-columns">
      <!-- Why Now Column -->
      <div class="vision-column">
        <h3 class="column-title">WHY NOW</h3>
        
        <div class="bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4381406-eghr-200h.png'); ?>"
            alt=""
            class="bullet-icon"
          />
          <p class="bullet-text">
            <span class="text-default">Rise of</span>
            <span class="text-blue"> domain-adapted LLMs</span>
            <span class="text-default"> (finance, healthcare, legal)</span>
          </p>
        </div>

        <div class="bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4381406-e3xj-200h.png'); ?>"
            alt=""
            class="bullet-icon"
          />
          <p class="bullet-text">
            <span class="text-blue">Data privacy &amp; compliance</span>
            <span class="text-default"> becoming top priority.</span>
          </p>
        </div>

        <div class="bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4381406-mjuo-200h.png'); ?>"
            alt=""
            class="bullet-icon"
          />
          <p class="bullet-text">
            <span class="text-blue">Multilingual NLP</span>
            <span class="text-default"> critical in global and emerging markets.</span>
          </p>
        </div>
      </div>

      <!-- Our Thesis Column -->
      <div class="vision-column">
        <h3 class="column-title">OUR THESIS</h3>
        
        <div class="bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4381406-3xsa-200h.png'); ?>"
            alt=""
            class="bullet-icon"
          />
          <p class="bullet-text">
            <span class="text-default">Businesses and government still rely heavily on</span>
            <span class="text-default"> unstructured documents (PDFs, SOPs, contracts)</span>
          </p>
        </div>

        <div class="bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4381406-opap-200h.png'); ?>"
            alt=""
            class="bullet-icon"
          />
          <p class="bullet-text">
            <span class="text-default">Strong demand for</span>
            <span class="text-blue"> AI assistants</span>
            <span class="text-default"> that understand Vietnamese context and terminology.</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <img
    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/screenshot20251205at15030814184-1x1f-500h.png'); ?>"
    alt="Vision Statement Illustration"
    class="vision-image"
  />
</div>

<style>
/* Vision Section */
.vision-section {
  max-width: 1320px;
  margin: 0 auto;
  display: flex;
  margin-top: 61px;
  margin-bottom:46px;
  flex-direction: column;
  gap: 32px;
}

/* Vision Content */
.vision-content {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

/* Header */
.vision-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
  text-align: center;
}

.vision-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 48px;
  font-weight: 700;
  color: #000;
  margin: 0;
}

.vision-title .highlight {
  color: #000;
}

.vision-description {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 28px;
  color: #474363;
  margin: 0;
  max-width: 800px;
}

/* Columns */
.vision-columns {
  display: flex;
  gap: 32px;
}

.vision-column {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.column-title {
  font-family: 'Inter', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #474363;
  margin: 0;
}

/* Bullet Items */
.bullet-item {
  display: flex;
  align-items: center;
  gap: 16px;
}

.bullet-icon {
  width: 8px;
  height: 8px;
  border: 4px solid rgba(0, 122, 255, 0.15);
  border-radius: 50%;
  flex-shrink: 0;
}

.bullet-text {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  color: #474363;
  margin: 0;
  flex: 1;
}

.text-default {
  color: #474363;
}

.text-blue {
  color: #3C90FC;
}

/* Vision Image */
.vision-image {
  width: 100%;
  height: auto;
  max-height: 437px;
  border-radius: 16px;
  object-fit: cover;
}

/* Responsive */
@media (max-width: 1024px) {
  .vision-section {
    max-width: 100%;
    padding: 0 20px;
  }

  .vision-columns {
    flex-direction: column;
  }

  .vision-title {
    font-size: 36px;
  }
}

@media (max-width: 768px) {
  .vision-title {
    font-size: 28px;
  }

  .vision-description {
    font-size: 14px;
    line-height: 24px;
  }

  .column-title {
    font-size: 18px;
  }

  .bullet-text {
    font-size: 14px;
  }
}
</style>
<!--End Page Title-->