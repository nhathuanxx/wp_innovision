<div class="stats2-section">
  <div class="stats2-container">
    <div class="stats2-row">
      <!-- Stat Card 1 - Supported Channels -->
      <div class="stats2-card">
        <div class="stats2-icon-group">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/materialsymbolsmail3986-zjyc.svg'); ?>"
            alt="Mail"
            class="stats2-channel-icon"
          />
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icbaselinefacebook3986-2p2c.svg'); ?>"
            alt="Facebook"
            class="stats2-channel-icon"
          />
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/mdilinkedin3986-7vzp.svg'); ?>"
            alt="LinkedIn"
            class="stats2-channel-icon"
          />
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/solarglobalbold3986-p9p.svg'); ?>"
            alt="Web"
            class="stats2-channel-icon"
          />
        </div>
        <h4 class="stats2-title">Supported Channels</h4>
        <p class="stats2-desc">Tokens per day</p>
      </div>

      <!-- Stat Card 2 -->
      <div class="stats2-card">
        <h3 class="stats2-number">&lt;2s</h3>
        <h4 class="stats2-title">Generation Speed</h4>
        <p class="stats2-desc">For long-form content generation</p>
      </div>

      <!-- Stat Card 3 -->
      <div class="stats2-card">
        <h3 class="stats2-number">95%+</h3>
        <h4 class="stats2-title">Brand Consistency</h4>
        <p class="stats2-desc">Brand style adherence rate</p>
      </div>
    </div>

    <div class="stats2-row">
      <!-- Feature Card 1 -->
      <div class="stats2-feature-card">
        <div class="stats2-feature-number">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon3986-anrn.svg'); ?>"
            alt="Icon"
            class="stats2-feature-icon"
          />
          <span class="stats2-number-text">3-5x Faster</span>
        </div>
        <h4 class="stats2-feature-title">Content Generation Speed</h4>
        <p class="stats2-feature-desc">Dramatically accelerated content creation process</p>
      </div>

      <!-- Feature Card 2 -->
      <div class="stats2-feature-card">
        <div class="stats2-feature-number">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon3986-sija.svg'); ?>"
            alt="Icon"
            class="stats2-feature-icon"
          />
          <span class="stats2-number-text">50%</span>
        </div>
        <h4 class="stats2-feature-title">Cost Reduction</h4>
        <p class="stats2-feature-desc">Reduced outsourcing and agency costs</p>
      </div>
    </div>
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
  background: linear-gradient(180deg, #F2F8FE 0%, #FFFFFF 100%);
  border: 1px solid rgba(255, 255, 255, 0.2);
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
  width: 40px;
  height: 40px;
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
  background: linear-gradient(180deg, #32E6B0 0%, #32E6B0 100%);
  border: 1px solid rgba(255, 255, 255, 0.2);
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