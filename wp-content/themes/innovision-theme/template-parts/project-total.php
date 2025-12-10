<div class="stats-section">
  <div class="stats-container">
    <div class="stats-row">
      <!-- Stat Card 1 -->
      <div class="stat-card">
        <h3 class="stat-number">1B+</h3>
        <h4 class="stat-title">Processing Capacity</h4>
        <p class="stat-desc">Tokens per day</p>
      </div>

      <!-- Stat Card 2 -->
      <div class="stat-card">
        <h3 class="stat-number">99.5%</h3>
        <h4 class="stat-title">OCR Accuracy</h4>
        <p class="stat-desc">Tokens per day</p>
      </div>

      <!-- Stat Card 3 -->
      <div class="stat-card">
        <h3 class="stat-number">&lt;500ms</h3>
        <h4 class="stat-title">Query Latency</h4>
        <p class="stat-desc">Per docs</p>
      </div>

      <!-- Stat Card 4 -->
      <div class="stat-card">
        <h3 class="stat-number">10M+</h3>
        <h4 class="stat-title">Documents Indexed</h4>
        <p class="stat-desc">Per docs</p>
      </div>
    </div>

    <div class="stats-row">
      <!-- Feature Card 1 -->
      <div class="feature-card">
        <div class="feature-number">
          <span class="number-text">Days → Seconds</span>
        </div>
        <h4 class="feature-title">Search Time Reduction</h4>
        <p class="feature-desc">Reduction in manual workload for accounting teams</p>
      </div>

      <!-- Feature Card 2 -->
      <div class="feature-card">
        <div class="feature-number">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon3952-t5q.svg'); ?>"
            alt="Icon"
            class="feature-icon"
          />
          <span class="number-text">70%</span>
        </div>
        <h4 class="feature-title">Cost Reduction</h4>
        <p class="feature-desc">Significant reduction in manual processing costs</p>
      </div>
    </div>
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
  background: linear-gradient(180deg, #F2F8FE 0%, #FFFFFF 100%);
  border: 1px solid rgba(255, 255, 255, 0.2);
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