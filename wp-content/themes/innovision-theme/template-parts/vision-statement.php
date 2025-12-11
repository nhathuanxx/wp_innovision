<?php
/**
 * Reusable Vision Statement component
 */

$fields = $args['fields'] ?? [];

if (empty($fields['solutions_vision_enable'])) {
    return; // Section OFF
}

$description  = $fields['solutions_vision_description'] ?? '';
$why_now      = $fields['solutions_vision_why_now'] ?? [];
$thesis_items = $fields['solutions_vision_thesis'] ?? [];
$image_url    = $fields['solutions_vision_image']['url']
    ?? get_template_directory_uri() . '/assets/images/innovision/screenshot20251205at15030814184-1x1f-500h.png';
?>

<div class="vision-section">
  <div class="vision-content">
    
    <!-- Header -->
    <div class="vision-header">
      <h2 class="vision-title">
        <span class="highlight">Vision</span>
        <span class="title-highlight">Statement</span>
      </h2>

      <?php if (!empty($description)): ?>
        <p class="vision-description">
          <?= esc_html($description); ?>
        </p>
      <?php endif; ?>
    </div>

    <div class="vision-columns">

      <!-- WHY NOW Column -->
      <div class="vision-column">
        <h3 class="column-title">WHY NOW</h3>

        <?php if (!empty($why_now)): ?>
          <?php foreach ($why_now as $bullet): ?>
            <div class="bullet-item">
              <div class="bullet-container"><div class="bullet"></div></div>

              <p class="bullet-text">
                <?php if (!empty($bullet['segments'])): ?>
                  <?php foreach ($bullet['segments'] as $seg): ?>
                    <span class="text-<?= esc_attr($seg['color'] ?? 'default'); ?>">
                      <?= esc_html($seg['text'] ?? ''); ?>
                    </span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <!-- OUR THESIS Column -->
      <div class="vision-column">
        <h3 class="column-title">OUR THESIS</h3>

        <?php if (!empty($thesis_items)): ?>
          <?php foreach ($thesis_items as $item): ?>
            <div class="bullet-item">
              <div class="bullet-container"><div class="bullet"></div></div>

              <p class="bullet-text">
                <?php if (!empty($item['segments'])): ?>
                  <?php foreach ($item['segments'] as $seg): ?>
                    <span class="text-<?= esc_attr($seg['color'] ?? 'default'); ?>">
                      <?= esc_html($seg['text'] ?? ''); ?>
                    </span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </p>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <img
    src="<?= esc_url($image_url); ?>"
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
    margin-bottom: 46px;
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