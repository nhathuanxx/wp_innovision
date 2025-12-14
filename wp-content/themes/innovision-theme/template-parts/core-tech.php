<?php
$fields = get_fields();

if (empty($fields['core_tech_enable'])) {
    return;
}

$title  = $fields['core_tech_title'] ?? '';
$steps  = $fields['core_tech_steps'] ?? [];
$cards  = $fields['core_tech_cards'] ?? [];
?>

<div class="core-tech">

  <!-- Title -->
  <h2 class="core-tech-title">
       <span class="highlight">Core</span>
    <span class="title-highlight">Technology</span>
  </h2>

  <!-- Process Steps -->
  <div class="process-steps">
    <?php foreach ($steps as $step): ?>
      <div class="step-item">
        
        <?php if (!empty($step['icon']['url'])): ?>
          <img src="<?= esc_url($step['icon']['url']); ?>" alt="" class="step-icon" />
        <?php endif; ?>

        <div class="step-content">
          <h3 class="step-title"><?= esc_html($step['title']); ?></h3>
          <p class="step-desc"><?= nl2br(esc_html($step['desc'])); ?></p>
        </div>

      </div>
    <?php endforeach; ?>
  </div>

  <!-- Feature Cards -->
  <div class="feature-cards">

    <?php foreach ($cards as $card): ?>
      <div class="feature-card <?= esc_attr($card['card_color']); ?>">

        <div class="card-header">
          <h3 class="card-title"><?= esc_html($card['card_title']); ?></h3>
        </div>

        <div class="card-body">
          <div class="feature-list">

            <?php foreach ($card['features'] as $feature): ?>
              <div class="feature-item">

            <?php if (!empty($feature['icon']['url'])): ?>
  <img
    src="<?= esc_url($feature['icon']['url']); ?>"
    alt=""
    class="check-icon"
  />
<?php else: ?>
  <img
    src="<?= esc_url(get_template_directory_uri() . '/assets/images/innovision/svgmargin1973-1sjho.svg'); ?>"
    alt=""
    class="check-icon"
  />
<?php endif; ?>

                <p class="feature-text"><?= esc_html($feature['text']); ?></p>

              </div>
            <?php endforeach; ?>

          </div>
        </div>

      </div>
    <?php endforeach; ?>

  </div>

</div>

<style>
  /* Core Technology Section */
  .core-tech {
    max-width: 1321px;
    margin: 0 auto;
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }

  .core-tech-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 48px;
    font-weight: 700;
    color: #000;
    text-align: center;
    margin: 0;
  }

  .core-tech-title .highlight {
    color: #000;
  }

  /* Process Steps */
  .process-steps {
    display: flex;
    gap: 32px;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    flex-wrap: nowrap;
  }

  .step-item {
    width: 193px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
  }

  .step-icon {
    width: 160px;
    height: 160px;
    object-fit: contain;
  }

  .step-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
  }

  .step-title {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #3C90FC;
    text-align: center;
    margin: 0;
  }

  .step-desc {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: #474363;
    text-align: center;
    margin: 0;
    line-height: 1.5;
  }

  /* Feature Cards */
  .feature-cards {
    display: flex;
    gap: 32px;
    width: 100%;
  }
  .core-tech .feature-card{
box-shadow: 
  0 4px 6px rgba(0, 0, 0, 0.07),
  0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .feature-card {
    flex: 1;
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }

  .card-blue {
    background: linear-gradient(115.12deg, #1085F2 3.62%, #7BC9FC 77.9%);
  }

  .card-cyan {
    background: linear-gradient(117.86deg, #29AAF3 1.82%, #7ECDFF 79.22%);
  }

  .card-light-blue {
    background: linear-gradient(118.91deg, #09B9F0 3.1%, #8FE4FF 77.63%);

  }

  .card-header {
    padding: 32px 32px 25px 24px;
  }

  .feature-cards .card-title {
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #fff ;
    margin: 0;
  }

  .card-body {
    border: 1px solid #fff;
    border-radius: 12px;
    flex: 1;
  }

  .card-blue .card-body {
    background:
      linear-gradient(180deg, rgba(22, 100, 255, 0.2) 0%, rgba(22, 100, 255, 0) 33.08%),
      linear-gradient(0deg, #FFFFFF, #FFFFFF);
    border: 1px solid #FFFFFF;

  }

  .card-cyan .card-body {
    background: linear-gradient(180deg, rgba(97, 198, 242, 0.2) 0%, rgba(97, 198, 242, 0) 33.08%), linear-gradient(0deg, #FFFFFF, #FFFFFF);

  }

  .card-light-blue .card-body {
    background: linear-gradient(180deg, rgba(97, 198, 242, 0.2) 0%, rgba(97, 198, 242, 0) 33.08%), linear-gradient(0deg, #FFFFFF, #FFFFFF);

  }

  .feature-list {
    /* padding: 32px 24px; */
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .feature-item {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .check-icon {
    width: 22px;
    height: 22px;
    flex-shrink: 0;
  }

  .feature-text {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    line-height: 22px;
    color: #4E5969;
    margin: 0;
    flex: 1;
  }

  /* Responsive */
  @media (max-width: 1440px) {
    .core-tech {
      max-width: 100%;
      padding: 60px 40px;
    }
  }

  @media (max-width: 1200px) {
    .process-steps {
      justify-content: center;
    }
  }

  @media (max-width: 1024px) {
    .core-tech {
      padding: 40px 20px;
    }

    .core-tech-title {
      font-size: 36px;
    }

    .process-steps {
      gap: 20px;
    }

    .step-item {
      width: 150px;
    }

    .step-icon {
      width: 120px;
      height: 120px;
    }

    .feature-cards {
      flex-direction: column;
    }
  }

  @media (max-width: 768px) {
    .core-tech-title {
      font-size: 28px;
    }

    .process-steps {
      gap: 16px;
    }

    .step-item {
      width: 120px;
    }

    .step-icon {
      width: 100px;
      height: 100px;
    }

    .step-title {
      font-size: 14px;
    }

    .step-desc {
      font-size: 12px;
    }

    .card-title {
      font-size: 18px;
    }

    .feature-text {
      font-size: 13px;
    }
  }

  @media (max-width: 640px) {
    .process-steps {
      flex-direction: column;
    }

    .step-item {
      width: 100%;
      max-width: 200px;
    }
  }
</style>