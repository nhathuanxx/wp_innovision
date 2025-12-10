
<?php
$fields = $args['fields'] ?? [];

if (empty($fields['stats_social_section_enable'])) {
    return;
}

$social_icons  = $fields['stats_social_icons'] ?? [];
$card_title    = $fields['stats_social_card_title'] ?? '';
$card_desc     = $fields['stats_social_card_desc'] ?? '';
$stats_cards   = $fields['stats_social_cards'] ?? [];
$feature_cards = $fields['stats_social_feature_cards'] ?? [];
?>

<div class="stats2-section">
    <div class="stats2-container">

        <!-- Stats Row -->
        <div class="stats2-row">
            
            <!-- First Card: Social Icons -->
            <?php if (!empty($social_icons) || !empty($card_title) || !empty($card_desc)): ?>
                <div class="stats2-card">
                    <?php if (!empty($social_icons)): ?>
                        <div class="stats2-icon-group">
                            <?php foreach ($social_icons as $icon): ?>
                                <?php if (!empty($icon['icon_image']) && !empty($icon['icon_url'])): ?>
                                    <a href="<?= esc_url($icon['icon_url']); ?>" 
                                       target="_blank" 
                                       rel="noopener noreferrer"
                                       class="stats2-icon-link">
                                        <img
                                            src="<?= esc_url($icon['icon_image']['url']); ?>"
                                            alt="<?= esc_attr($icon['icon_alt']); ?>"
                                            class="stats2-channel-icon"
                                        />
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($card_title)): ?>
                        <h4 class="stats2-title"><?= esc_html($card_title); ?></h4>
                    <?php endif; ?>
                    
                    <?php if (!empty($card_desc)): ?>
                        <p class="stats2-desc"><?= esc_html($card_desc); ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Regular Stat Cards -->
            <?php if (!empty($stats_cards)): ?>
                <?php foreach ($stats_cards as $card): ?>
                    <?php if (!empty($card['number']) || !empty($card['title']) || !empty($card['desc'])): ?>
                        <div class="stats2-card">
                            <?php if (!empty($card['number'])): ?>
                                <h3 class="stats2-number"><?= esc_html($card['number']); ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($card['title'])): ?>
                                <h4 class="stats2-title"><?= esc_html($card['title']); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($card['desc'])): ?>
                                <p class="stats2-desc"><?= esc_html($card['desc']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Feature Row -->
        <?php if (!empty($feature_cards)): ?>
            <div class="stats2-row">
                <?php foreach ($feature_cards as $card): ?>
                    <?php if (!empty($card['number']) || !empty($card['title']) || !empty($card['desc']) || !empty($card['icon'])): ?>
                        <div class="stats2-feature-card">
                            <div class="stats2-feature-number">
                                <?php if (!empty($card['icon'])): ?>
                                    <img src="<?= esc_url($card['icon']['url']); ?>" alt="Icon" class="stats2-feature-icon" />
                                <?php endif; ?>
                                <?php if (!empty($card['number'])): ?>
                                    <span class="stats2-number-text"><?= esc_html($card['number']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($card['title'])): ?>
                                <h4 class="stats2-feature-title"><?= esc_html($card['title']); ?></h4>
                            <?php endif; ?>
                            <?php if (!empty($card['desc'])): ?>
                                <p class="stats2-feature-desc"><?= esc_html($card['desc']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</div>

<style>
/* Statistics Section 2 */
.stats2-section {
  width: 100%;
  padding: 60px 20px;
  background-color: #3C90FC;
  display: flex;
  justify-content: center;
}

.stats2-container {
  max-width: 1320px;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.stats2-row {
  display: flex;
  gap: 32px;
  width: 100%;
}

/* Stat Cards (White gradient cards) */
.stats2-card {
  flex: 1;
  padding: 32px;
  background: linear-gradient(180deg, rgba(242, 248, 254, 0.33) 0%, rgba(255, 255, 255, 0) 100%);
  border-image-source: linear-gradient(180deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

/* Icon Group for Supported Channels */
.stats2-icon-group {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  min-height: 72px;
  align-items: center;
}

.stats2-channel-icon {
  max-width: 40px;
  height: auto;
}

.stats2-number {
  font-family: 'Inter', sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 72px;
  color: #fff;
  margin: 0;
}

.stats2-title {
  font-family: 'Inter', sans-serif;
  font-size: 18px;
  font-weight: 700;
  line-height: 27px;
  color: #fff;
  margin: 0;
}

.stats2-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  line-height: 24px;
  color: #fff;
  margin: 0;
}

/* Feature Cards (Green cards) */
.stats2-feature-card {
  flex: 1;
  padding: 32px;
  background: linear-gradient(180deg, rgba(50, 230, 176, 0.7) 0%, rgba(50, 230, 176, 0) 100%);
  border-image-source: linear-gradient(180deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0) 100%);
  border-radius: 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.stats2-feature-number {
  display: flex;
  align-items: center;
  gap: 10px;
}

.stats2-feature-icon {
  width: 48px;
  height: 48px;
}

.stats2-number-text {
  font-family: 'Inter', sans-serif;
  font-size: 40px;
  font-weight: 700;
  line-height: 72px;
  color: #fff;
}

.stats2-feature-title {
  font-family: 'Inter', sans-serif;
  font-size: 18px;
  font-weight: 700;
  line-height: 27px;
  color: #fff;
  margin: 0;
}

.stats2-feature-desc {
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  line-height: 24px;
  color: #fff;
  margin: 0;
}

/* Responsive */
@media (max-width: 1200px) {
  .stats2-row {
    flex-wrap: wrap;
  }

  .stats2-card,
  .stats2-feature-card {
    min-width: calc(50% - 16px);
  }
}

@media (max-width: 768px) {
  .stats2-section {
    padding: 40px 20px;
  }

  .stats2-row {
    flex-direction: column;
  }

  .stats2-card,
  .stats2-feature-card {
    width: 100%;
    min-width: 100%;
  }

  .stats2-icon-group {
    gap: 15px;
  }

  .stats2-channel-icon {
    width: 36px;
    height: 36px;
  }

  .stats2-number,
  .stats2-number-text {
    font-size: 32px;
    line-height: 56px;
  }

  .stats2-title,
  .stats2-feature-title {
    font-size: 16px;
    line-height: 24px;
  }

  .stats2-desc,
  .stats2-feature-desc {
    font-size: 13px;
    line-height: 20px;
  }

  .stats2-feature-icon {
    width: 36px;
    height: 36px;
  }
}
</style>