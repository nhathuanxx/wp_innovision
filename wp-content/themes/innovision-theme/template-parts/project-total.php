<?php
$fields = $args['fields'] ?? [];

if (empty($fields['portfolio_stats_enable'])) {
    return;
}

$stats_cards   = $fields['stats_cards'] ?? [];
$feature_cards = $fields['feature_cards'] ?? [];
?>

<div class="stats-section">
    <div class="stats-container">

        <!-- Stats Row -->
        <?php if (!empty($stats_cards)): ?>
            <div class="stats-row">
                <?php foreach ($stats_cards as $card): ?>
                    <?php if (!empty($card['number']) || !empty($card['title']) || !empty($card['desc'])): ?>
                        <div class="stat-card">
                            <?php if (!empty($card['number'])): ?>
                                <h3 class="stat-number"><?= esc_html($card['number']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($card['title'])): ?>
                                <h4 class="stat-title"><?= esc_html($card['title']); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($card['desc'])): ?>
                                <p class="stat-desc"><?= esc_html($card['desc']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Feature Row -->
        <?php if (!empty($feature_cards)): ?>
            <div class="stats-row">
                <?php foreach ($feature_cards as $card): ?>
                    <?php if (!empty($card['number']) || !empty($card['title']) || !empty($card['desc']) || !empty($card['icon'])): ?>
                        <div class="feature-card">
                            <div class="feature-number">
                                <?php if (!empty($card['icon'])): ?>
                                    <img src="<?= esc_url($card['icon']['url']); ?>" alt="Icon" class="feature-icon" />
                                <?php endif; ?>
                                <?php if (!empty($card['number'])): ?>
                                    <span class="number-text"><?= esc_html($card['number']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($card['title'])): ?>
                                <h4 class="feature-title"><?= esc_html($card['title']); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($card['desc'])): ?>
                                <p class="feature-desc"><?= esc_html($card['desc']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<style>
/* Statistics Section */
.stats-section {
  width: 100%;
  padding: 60px 20px;
  background-color: #3C90FC;
  display: flex;
  justify-content: center;
}

.stats-container {
  max-width: 1320px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.stats-row {
  display: flex;
  gap: 32px;
  width: 100%;
}

/* Stat Cards (White gradient cards) */
.stat-card {
  flex: 1;
  padding: 32px;
  /* background: linear-gradient(180deg, #F2F8FE 0%, #FFFFFF 100%); */
  background: linear-gradient(180deg, rgba(242, 248, 254, 0.33) 0%, rgba(255, 255, 255, 0) 100%);
  border-image-source: linear-gradient(180deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);


  /* border: 1px solid rgba(255, 255, 255, 0.2); */
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.stat-number {
  font-family: 'Inter', sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 72px;
  color: #fff;
  margin: 0;
}

.stat-title {
  font-family: 'Inter', sans-serif;
  font-size: 18px;
  font-weight: 700;
  line-height: 27px;
  color: #fff;
  margin: 0;
}

.stat-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  line-height: 24px;
  color: #fff;
  margin: 0;
}

/* Feature Cards (Green cards) */
.feature-card {
  flex: 1;
  padding: 32px;
  background: linear-gradient(180deg, rgba(50, 230, 176, 0.7) 0%, rgba(50, 230, 176, 0) 100%);
  border-image-source: linear-gradient(180deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.feature-number {
  display: flex;
  align-items: center;
  gap: 10px;
}

.feature-icon {
  width: 48px;
  height: 48px;
}

.number-text {
  font-family: 'Inter', sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 72px;
  color: #fff;
}

.feature-title {
  font-family: 'Inter', sans-serif;
  font-size: 18px;
  font-weight: 700;
  line-height: 27px;
  color: #fff;
  margin: 0;
}

.feature-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  line-height: 24px;
  color: #fff;
  margin: 0;
}

/* Responsive */
@media (max-width: 1200px) {
  .stats-row {
    flex-wrap: wrap;
  }

  .stat-card,
  .feature-card {
    min-width: calc(50% - 16px);
  }
}

@media (max-width: 768px) {
  .stats-section {
    padding: 40px 20px;
  }

  .stats-row {
    flex-direction: column;
  }

  .stat-card,
  .feature-card {
    width: 100%;
    min-width: 100%;
  }

  .stat-number,
  .number-text {
    font-size: 32px;
    line-height: 56px;
  }

  .stat-title,
  .feature-title {
    font-size: 16px;
    line-height: 24px;
  }

  .stat-desc,
  .feature-desc {
    font-size: 13px;
    line-height: 20px;
  }

  .feature-icon {
    width: 36px;
    height: 36px;
  }
}
</style>