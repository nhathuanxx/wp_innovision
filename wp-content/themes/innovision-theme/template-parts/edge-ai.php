
<?php
$fields = get_fields();
if (empty($fields['som_pipeline_enable'])) return;

$title       = $fields['som_pipeline_title'] ?? '';
$diagram     = $fields['som_pipeline_diagram'] ?? [];
$metrics     = $fields['som_pipeline_metrics'] ?? [];
$image       = $fields['som_pipeline_image']['url'] ?? '';
?>
<div class="som-pipeline-section">

  <div class="som-pipeline-header">
    <h2 class="som-pipeline-title">
      <span class="som-title-highlight">Edge AI</span>
      <span class="title-highlight">SOM Pipeline</span>
    </h2>
  </div>

  <div class="som-pipeline-content">

    <div class="som-pipeline-info">

      <!-- Diagram Section -->
      <div class="som-diagram-section">
        <h3 class="som-section-title">DIAGRAM</h3>

        <?php foreach ($diagram as $item): ?>
          <div class="som-bullet-item">
            <div class="bullet-container"><div class="bullet"></div></div>
            <p class="som-bullet-text"><?php echo esc_html($item['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Key Metrics Section -->
      <div class="som-metrics-section">
        <h3 class="som-section-title">KEY METRICS</h3>

        <?php foreach ($metrics as $item): ?>
          <div class="som-bullet-item">
            <div class="bullet-container"><div class="bullet"></div></div>
            <p class="som-bullet-text"><?php echo esc_html($item['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    <!-- Device Mockup -->
    <div class="som-device-mockup">
      <?php if ($image): ?>
        <img src="<?php echo esc_url($image); ?>" alt="" class="som-mockup-ellipse"/>
      <?php endif; ?>
    </div>

  </div>
</div>

<style>
/* SOM Pipeline Section */
.som-pipeline-section {
  width: 100%;
  padding: 60px 300px;
  overflow: hidden;
  background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tq_n3idokjp1y-s4y-2000w.png'); ?>');
  background-size: cover;
  background-position: center;
}

/* Header */
.som-pipeline-header {
  padding-bottom: 40px;
  text-align: center;
}

.som-pipeline-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 48px;
  font-weight: 700;
  color: #000;
  margin: 0;
}

.som-title-highlight {
  color: #000;
}

/* Content Layout */
.som-pipeline-content {
  max-width: 1320px;
  margin: 0 auto;
  display: flex;
  gap: 221px;
  align-items: center;
  justify-content: space-between;
}

/* Left Info */
.som-pipeline-info {
  width: 644px;
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.som-diagram-section,
.som-metrics-section {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.som-section-title {
  font-family: 'Inter', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #474363;
  margin: 0;
}

/* Bullet Items */
.som-bullet-item {
  display: flex;
  align-items: center;
  gap: 16px;
}

.som-bullet-icon {
  width: 8px;
  height: 8px;
  border: 4px solid rgba(0, 122, 255, 0.15);
  border-radius: 50%;
  flex-shrink: 0;
}

.som-bullet-text {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 24px;
  color: #474363;
  margin: 0;
  flex: 1;
}

/* Device Mockup */
.som-device-mockup {
  width: 642px;
  height: 443px;
  position: relative;
  flex-shrink: 0;
}

.som-mockup-ellipse {
width: 100%;
height: auto;
}

.som-mockup-ellipse-2 {
  position: absolute;
  top: 0;
  left: 465px;
  width: 177px;
  height: 177px;
}

.som-mockup-rect-1 {
  position: absolute;
  top: 23px;
  left: 0;
  width: 609px;
  height: 420px;
  border: 2.77px solid;
  border-radius: 28px;
}

.som-mockup-rect-2 {
  position: absolute;
  top: 0;
  left: 33px;
  width: 609px;
  height: 420px;
  border: 2.77px solid;
  border-radius: 28px;
}

.som-mockup-screen {
  position: absolute;
  top: 54px;
  left: 129px;
  width: 415px;
  height: 311px;
  border-radius: 16px;
}

/* Responsive */
@media (max-width: 1440px) {
  .som-pipeline-section {
    padding: 60px 100px;
  }

  .som-pipeline-content {
    gap: 100px;
  }
}

@media (max-width: 1200px) {
  .som-pipeline-section {
    padding: 60px 40px;
  }

  .som-pipeline-content {
    flex-direction: column;
    gap: 60px;
  }

  .som-pipeline-info,
  .som-device-mockup {
    width: 100%;
    max-width: 644px;
  }

  .som-device-mockup {
    height: auto;
    aspect-ratio: 642 / 443;
  }
}

@media (max-width: 768px) {
  .som-pipeline-section {
    padding: 40px 20px;
  }

  .som-pipeline-title {
    font-size: 36px;
  }

  .som-device-mockup {
    transform: scale(0.85);
    transform-origin: top center;
  }

  .som-section-title {
    font-size: 18px;
  }

  .som-bullet-text {
    font-size: 14px;
    line-height: 22px;
  }
}

@media (max-width: 640px) {
  .som-pipeline-title {
    font-size: 28px;
  }

  .som-device-mockup {
    transform: scale(0.7);
  }

  .som-section-title {
    font-size: 16px;
  }

  .som-bullet-text {
    font-size: 13px;
    line-height: 20px;
  }
}
</style>