<div class="usecase2-section">
  <img
    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image443989-cgp1-2000w.png'); ?>"
    alt="Background"
    class="usecase2-bg"
  />
  
  <div class="usecase2-content">
    <!-- Input/System/Output Content -->
    <div class="usecase2-info">
      <!-- Input Section -->
      <div class="usecase2-block">
        <h3 class="usecase2-block-title">INPUT</h3>
        <p class="usecase2-block-text">
          Citizen submits a scanned tax form or contract PDF
        </p>
      </div>

      <!-- System Section -->
      <div class="usecase2-block">
        <h3 class="usecase2-block-title">SYSTEM</h3>
        
        <div class="usecase2-bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4383989-ztqq-200h.png'); ?>"
            alt=""
            class="usecase2-bullet-icon"
          />
          <p class="usecase2-bullet-text">
            OCR extracts text from the scanned document with 99.5%
            accuracy
          </p>
        </div>

        <div class="usecase2-bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4383989-0omr-200h.png'); ?>"
            alt=""
            class="usecase2-bullet-icon"
          />
          <p class="usecase2-bullet-text">
            RAG pipeline indexes data and creates semantic embeddings
          </p>
        </div>

        <div class="usecase2-bullet-item">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/ellipse4383989-jd8-200h.png'); ?>"
            alt=""
            class="usecase2-bullet-icon"
          />
          <p class="usecase2-bullet-text">
            LLM interprets request using natural language understanding
          </p>
        </div>
      </div>

      <!-- Output Section -->
      <div class="usecase2-block">
        <h3 class="usecase2-block-title">OUTPUT</h3>
        <p class="usecase2-block-text">
          "Tax record located, Ref: Archive #2021-0342, related
          decrees linked."
        </p>
      </div>
    </div>

    <!-- Image Preview -->
    <div class="usecase2-image">
      <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/pro-solu.png'); ?>"
        alt="Solution Preview"
        class="usecase2-img"
      />
    </div>
  </div>
</div>

<style>
/* Use Case Section 2 */
.usecase2-section {
  width: 100%;
  min-height: 680px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.usecase2-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.usecase2-content {
  position: relative;
  z-index: 1;
  max-width: 1320px;
  margin: 0 auto;
  width: 100%;
  padding: 60px 0px;
  display: flex;
  gap: 32px;
  align-items: center;
}

/* Info Content */
.usecase2-info {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.usecase2-block {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.usecase2-block-title {
  font-family: 'Inter', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #474363;
  margin: 0;
}

.usecase2-block-text {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 24px;
  color: #474363;
  margin: 0;
  text-align: justify;
}

/* Bullet Items */
.usecase2-bullet-item {
  display: flex;
  align-items: center;
  gap: 16px;
}

.usecase2-bullet-icon {
  width: 8px;
  height: 8px;
  border: 4px solid rgba(0, 122, 255, 0.15);
  border-radius: 50%;
  flex-shrink: 0;
}

.usecase2-bullet-text {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 24px;
  color: #474363;
  margin: 0;
  flex: 1;
}

/* Image Preview */
.usecase2-image {
  width: 644px;
  flex-shrink: 0;
}

.usecase2-img {
  width: 100%;
  height: auto;
  display: block;
}

/* Responsive */
@media (max-width: 1200px) {
  .usecase2-content {
    flex-direction: column;
    padding: 60px 40px;
  }

  .usecase2-info {
    width: 100%;
    max-width: 644px;
  }

  .usecase2-image {
    width: 100%;
    max-width: 644px;
  }
}

@media (max-width: 768px) {
  .usecase2-section {
    min-height: auto;
  }

  .usecase2-content {
    padding: 40px 20px;
    gap: 40px;
  }

  .usecase2-block-title {
    font-size: 18px;
  }

  .usecase2-block-text,
  .usecase2-bullet-text {
    font-size: 14px;
    line-height: 22px;
  }
}

@media (max-width: 480px) {
  .usecase2-block-title {
    font-size: 16px;
  }

  .usecase2-block-text,
  .usecase2-bullet-text {
    font-size: 13px;
    line-height: 20px;
  }
}
</style>