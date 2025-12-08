<div class="stats-section-2">
  <div class="stats-row">
    <!-- Stat Card 1 - Supported Channels -->
    <div class="stat-card">
      <div class="icon-group">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/materialsymbolsmail3986-zjyc.svg'); ?>"
          alt="Mail"
          class="channel-icon"
        />
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icbaselinefacebook3986-2p2c.svg'); ?>"
          alt="Facebook"
          class="channel-icon"
        />
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/mdilinkedin3986-7vzp.svg'); ?>"
          alt="LinkedIn"
          class="channel-icon"
        />
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/solarglobalbold3986-p9p.svg'); ?>"
          alt="Web"
          class="channel-icon"
        />
      </div>
      <h4 class="stat-title">Supported Channels</h4>
      <p class="stat-desc">Tokens per day</p>
    </div>

    <!-- Stat Card 2 -->
    <div class="stat-card">
      <h3 class="stat-number">&lt;2s</h3>
      <h4 class="stat-title">Generation Speed</h4>
      <p class="stat-desc">For long-form content generation</p>
    </div>

    <!-- Stat Card 3 -->
    <div class="stat-card">
      <h3 class="stat-number">95%+</h3>
      <h4 class="stat-title">Brand Consistency</h4>
      <p class="stat-desc">Brand style adherence rate</p>
    </div>
  </div>

  <div class="stats-row">
    <!-- Feature Card 1 -->
    <div class="feature-card">
      <div class="feature-number">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon3986-anrn.svg'); ?>"
          alt="Icon"
          class="feature-icon"
        />
        <span class="number-text">3-5x Faster</span>
      </div>
      <h4 class="feature-title">Content Generation Speed</h4>
      <p class="feature-desc">Dramatically accelerated content creation process</p>
    </div>

    <!-- Feature Card 2 -->
    <div class="feature-card">
      <div class="feature-number">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon3986-sija.svg'); ?>"
          alt="Icon"
          class="feature-icon"
        />
        <span class="number-text">50%</span>
      </div>
      <h4 class="feature-title">Cost Reduction</h4>
      <p class="feature-desc">Reduced outsourcing and agency costs</p>
    </div>
  </div>
</div>

<style>
/* Statistics Section 2 */
.stats-section-2 {
  width: 100%;
  padding: 60px 300px;
  background-color: #3C90FC;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.stats-row {
  display: flex;
  gap: 32px;
  width: 100%;
  justify-content: center;
}

/* Stat Cards (White gradient cards) */
.stat-card {
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
.icon-group {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  min-height: 72px;
  align-items: center;
}

.channel-icon {
  width: 40px;
  height: 40px;
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
  background: linear-gradient(180deg, #32E6B0 0%, #32E6B0 100%);
  border: 1px solid rgba(255, 255, 255, 0.2);
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
@media (max-width: 1440px) {
  .stats-section-2 {
    padding: 60px 100px;
  }
}

@media (max-width: 1200px) {
  .stats-section-2 {
    padding: 60px 40px;
  }

  .stats-row {
    flex-wrap: wrap;
  }

  .stat-card,
  .feature-card {
    min-width: calc(50% - 16px);
  }
}

@media (max-width: 768px) {
  .stats-section-2 {
    padding: 40px 20px;
  }

  .stats-row {
    flex-direction: column;
  }

  .stat-card,
  .feature-card {
    width: 100%;
  }

  .icon-group {
    gap: 15px;
  }

  .channel-icon {
    width: 36px;
    height: 36px;
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