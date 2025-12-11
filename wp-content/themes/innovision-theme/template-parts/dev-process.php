<?php
$fields = get_fields();

if (empty($fields['dev_process_enable'])) return;

// $title       = $fields['dev_process_title'] ?? '';
$desc        = $fields['dev_process_desc'] ?? '';
$key_points  = $fields['dev_process_key_points'] ?? [];
$scrum_roles = $fields['dev_process_scrum_roles'] ?? [];
$screenshot  = $fields['dev_process_screenshot']['url'] ?? '';
?>
<div class="dev-process-section">

  <img
    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image444011-xl4a-1200h.png'); ?>"
    alt="Background"
    class="dev-process-bg"
  />
  <div class="dev-process-content">

    <!-- Header -->
    <div class="dev-process-header">
      <h2 class="section-title">
        <span class="highlight">Development</span>
        <span class="title-highlight">Process</span>
      </h2>
      <p class="section-desc"><?php echo esc_html($desc); ?></p>
    </div>

    <div class="content-wrapper">

      <div class="cards-row">
        
        <!-- Key Points Card -->
        <div class="info-card key-points-card">
          <h3 class="card-title">KEY POINTS (BULLET FORM)</h3>

          <?php foreach ($key_points as $item): ?>
            <div class="bullet-item">
              <div class="bullet-container"><div class="bullet"></div></div>
              <p class="bullet-text"><?php echo esc_html($item['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Scrum Roles Card -->
        <div class="info-card scrum-roles-card">
          <h3 class="card-title">SCRUM ROLES</h3>

          <?php foreach ($scrum_roles as $item): ?>
            <div class="bullet-item">
              <div class="bullet-container"><div class="bullet"></div></div>
              <p class="bullet-text"><?php echo esc_html($item['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>

      </div>

      <img src="<?php echo esc_url($screenshot); ?>" alt="Development Process Screenshot" class="process-screenshot"/>
    
    </div>
  </div>
</div>

<style>
/* Development Process Section */
.dev-process-section {
  width: 100%;
  min-height: 1117px;
  position: relative;
  display: flex;
  align-items: flex-start;
}

.dev-process-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.dev-process-content {
  position: relative;
  z-index: 1;
  max-width: 1321px;
  margin: 0 auto;
  padding: 58px 20px;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

/* Header */
.dev-process-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
  text-align: center;
}

.section-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 48px;
  font-weight: 700;
  color: #000;
  margin: 0;
}

.section-title .highlight {
  color: #000;
}

.section-desc {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 28px;
  color: #474363;
  margin: 0;
  max-width: 100%;
}

/* Content Wrapper */
.content-wrapper {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

/* Cards Row */
.cards-row {
  display: flex;
  gap: 32px;
}

.info-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0px 1px 20px 0px rgba(0, 122, 255, 0.05);
  padding: 32px 24px 32px 32px;
  display: flex;
  flex-direction: column;
  gap: 24px;
  background-size: cover;
  background-position: center;
}

.key-points-card {
  flex: 1;
  min-width: 0;
  background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tq_fqhh2ofxws-r494-1200h.png'); ?>');
}

.scrum-roles-card {
  width: 421px;
  flex-shrink: 0;
  background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tq_dexpi3q_yy-4x7s-1200h.png'); ?>');
}

.card-title {
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
  line-height: 24px;
  color: #474363;
  margin: 0;
  flex: 1;
}

/* Process Screenshot */
.process-screenshot {
  width: 100%;
  height: auto;
  max-height: 501px;
  object-fit: cover;
  border-radius: 12px;
}

/* Responsive */
@media (max-width: 1440px) {
  .dev-process-content {
    max-width: 1200px;
  }
}

@media (max-width: 1200px) {
  .dev-process-content {
    padding: 58px 40px;
  }

  .cards-row {
    flex-direction: column;
  }

  .scrum-roles-card {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .dev-process-section {
    min-height: auto;
  }

  .dev-process-content {
    padding: 40px 20px;
    gap: 32px;
  }

  .section-title {
    font-size: 32px;
  }

  .section-desc {
    font-size: 14px;
    line-height: 24px;
  }

  .info-card {
    padding: 24px 20px;
    gap: 20px;
  }

  .card-title {
    font-size: 18px;
  }

  .bullet-text {
    font-size: 14px;
    line-height: 22px;
  }

  .process-screenshot {
    max-height: 300px;
  }
}

@media (max-width: 480px) {
  .section-title {
    font-size: 28px;
  }

  .section-desc {
    font-size: 13px;
    line-height: 22px;
  }

  .card-title {
    font-size: 16px;
  }

  .bullet-text {
    font-size: 13px;
    line-height: 20px;
  }
}
</style>