<?php
$fields = get_fields();

// Nếu section tắt thì không render
if (empty($fields['solutions_edge_ai_enable'])) {
    return;
}

// Vision content
$vision_desc  = $fields['solutions_edge_ai_description'] ?? '';
$vision_image = $fields['solutions_edge_ai_image']['url'] 
    ?? get_template_directory_uri() . '/assets/images/innovision/statement-side-img.png';

// Why Edge AI Matters
$why_list = $fields['solutions_edge_ai_matters'] ?? [];
?>

<div class="edge-ai-vision-section">

  <!-- Device Mockup -->
  <div class="edge-ai-device-mockup">
    <?php if ($vision_image): ?>
      <img src="<?= esc_url($vision_image); ?>" alt="" class="edge-ai-mockup-ellipse" />
    <?php endif; ?>
  </div>

  <!-- Content -->
  <div class="edge-ai-vision-content">

    <!-- Vision Header -->
    <div class="edge-ai-vision-header">
      <h2 class="edge-ai-vision-title">
        <span class="edge-ai-title-highlight">Vision</span>
        <span class="title-highlight">Statement</span>
      </h2>

      <?php if ($vision_desc): ?>
        <p class="edge-ai-vision-desc">
          <?= esc_html($vision_desc); ?>
        </p>
      <?php endif; ?>
    </div>

    <!-- Why Edge AI Matters -->
    <div class="edge-ai-matters-section">

      <h3 class="edge-ai-matters-title">WHY EDGE AI MATTERS</h3>

      <?php if (!empty($why_list)): ?>
        <?php foreach ($why_list as $row): ?>
          <div class="edge-ai-bullet-item">
            <div class="bullet-container">
              <div class="bullet"></div>
            </div>

            <p class="edge-ai-bullet-text">
              <?= esc_html($row['text'] ?? ''); ?>
            </p>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
</div>

<style>
  /* Edge AI Vision Section */
  .edge-ai-vision-section {
    max-width: 1318px;
    margin: 0 auto;
    padding: 60px 20px;
    display: flex;
    gap: 32px;
    align-items: center;
  }

  /* Device Mockup */
  .edge-ai-device-mockup {
    width: 642px;
    height: 443px;
    position: relative;
    flex-shrink: 0;
  }

  .edge-ai-mockup-ellipse {
    width: 100%;
    height: auto;
  }

  .edge-ai-mockup-ellipse-2 {
    position: absolute;
    top: 0;
    left: 465px;
    width: 177px;
    height: 177px;
  }

  .edge-ai-mockup-rect-1 {
    position: absolute;
    top: 23px;
    left: 0;
    width: 609px;
    height: 420px;
    border: 2.77px solid;
    border-radius: 28px;
  }

  .edge-ai-mockup-rect-2 {
    position: absolute;
    top: 0;
    left: 33px;
    width: 609px;
    height: 420px;
    border: 2.77px solid;
    border-radius: 28px;
  }

  .edge-ai-mockup-screen {
    position: absolute;
    top: 58px;
    left: 110px;
    width: 455px;
    height: 303px;
    border: 20px solid rgba(255, 255, 255, 0.2);
    border-radius: 16px;
  }

  /* Vision Content */
  .edge-ai-vision-content {
    width: 644px;
    display: flex;
    flex-direction: column;
    gap: 40px;
    flex-shrink: 0;
  }

  .edge-ai-vision-header {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .edge-ai-vision-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #000;
    margin: 0;
  }

  .edge-ai-title-highlight {
    color: #000;
  }

  .edge-ai-vision-desc {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    line-height: 28px;
    color: #474363;
    margin: 0;
  }

  /* Edge AI Matters Section */
  .edge-ai-matters-section {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .edge-ai-matters-title {
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #474363;
    margin: 0;
  }

  /* Bullet Items */
  .edge-ai-bullet-item {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .edge-ai-bullet-icon {
    width: 8px;
    height: 8px;
    border: 4px solid rgba(0, 122, 255, 0.15);
    border-radius: 50%;
    flex-shrink: 0;
  }

  .edge-ai-bullet-text {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    color: #474363;
    margin: 0;
    flex: 1;
  }

  /* Responsive */
  @media (max-width: 1440px) {
    .edge-ai-vision-section {
      max-width: 1200px;
    }
  }

  @media (max-width: 1200px) {
    .edge-ai-vision-section {
      flex-direction: column;
      padding: 60px 40px;
    }

    .edge-ai-device-mockup,
    .edge-ai-vision-content {
      width: 100%;
      max-width: 642px;
    }

    .edge-ai-device-mockup {
      height: auto;
      aspect-ratio: 642 / 443;
    }
  }

  @media (max-width: 768px) {
    .edge-ai-vision-section {
      padding: 40px 20px;
      gap: 40px;
    }

    .edge-ai-device-mockup {
      transform: scale(0.85);
      transform-origin: top center;
    }

    .edge-ai-vision-title {
      font-size: 36px;
    }

    .edge-ai-vision-desc {
      font-size: 14px;
      line-height: 24px;
    }

    .edge-ai-matters-title {
      font-size: 18px;
    }

    .edge-ai-bullet-text {
      font-size: 14px;
    }
  }

  @media (max-width: 640px) {
    .edge-ai-device-mockup {
      transform: scale(0.7);
    }

    .edge-ai-vision-title {
      font-size: 28px;
    }

    .edge-ai-vision-desc,
    .edge-ai-bullet-text {
      font-size: 13px;
      line-height: 22px;
    }

    .edge-ai-matters-title {
      font-size: 16px;
    }
  }
</style>