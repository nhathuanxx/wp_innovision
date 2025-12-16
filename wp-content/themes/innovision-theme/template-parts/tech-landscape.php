<?php
$fields = get_fields();

if (empty($fields['tech_landscape_enable'])) {
    return;
}

$title       = $fields['tech_landscape_title'] ?? '';
$global      = $fields['global_trends'] ?? [];
$vietnam     = $fields['vietnam_context'] ?? [];
$main_img    = $fields['tech_landscape_image']['url']
                ?? get_template_directory_uri() . '/assets/images/innovision/tech-landscape-img.png';
?>

<div class="tech-landscape">

  <div class="tech-header">
    <h2 class="tech-title">
      <span class="highlight">Technology</span>
      <span class="title-highlight">Landscape</span>
    </h2>
  </div>

  <div class="tech-content">
    <div class="tech-cards">

      <!-- GLOBAL TRENDS -->
      <div class="tech-card">
        <div class="card-inner">
          <h3 class="card-title">GLOBAL TRENDS</h3>

          <?php foreach ($global as $row): ?>
            <div class="bullet-item">
              <div class="bullet-container">
                <div class="bullet"></div>
              </div>

              <p class="bullet-text">
                <?php foreach ($row['segments'] as $seg): ?>
                  <span class="text-<?= esc_attr($seg['color']); ?>">
                    <?= esc_html($seg['text']); ?>
                  </span>
                <?php endforeach; ?>
              </p>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

      <!-- VIETNAM CONTEXT -->
      <div class="tech-card">
        <div class="card-inner">
          <h3 class="card-title">VIETNAM CONTEXT</h3>

          <?php foreach ($vietnam as $row): ?>
            <div class="bullet-item">
              <div class="bullet-container">
                <div class="bullet"></div>
              </div>

              <p class="bullet-text">
                <?php foreach ($row['segments'] as $seg): ?>
                  <span class="text-<?= esc_attr($seg['color']); ?>">
                    <?= esc_html($seg['text']); ?>
                  </span>
                <?php endforeach; ?>
              </p>
            </div>
          <?php endforeach; ?>

        </div>
      </div>

    </div>

    <!-- IMAGE GRID -->
    <div class="logo-grid">
      <?php if ($main_img): ?>
        <img src="<?= esc_url($main_img); ?>" alt="" class="logo-main" />
      <?php endif; ?>
    </div>

  </div>
</div>

<style>
/* Technology Landscape Section */
.tech-landscape {
  width: 100%;
  padding: 60px 300px;
  background: linear-gradient(180deg, #fff 0%, #F7F9FC 31%);
}

.tech-header {
  padding-bottom: 40px;
  text-align: center;
}

.tech-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 48px;
  font-weight: 700;
  color: #000;
  margin: 0;
}

.tech-title .highlight {
  color: #000;
}

/* Content Layout */
.tech-content {
  max-width: 1320px;
  margin: 0 auto;
  display: flex;
  gap: 60px;
  align-items: flex-start;
  justify-content: space-between;
}

/* Cards */
.tech-cards {
  display: flex;
  flex-direction: column;
  gap: 32px;
  flex: 1;
  min-width: 500px;
  max-width: 644px;
}

.tech-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.card-inner {
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.card-title {
  font-family: 'Inter', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #474363;
  margin: 0;
}

/* Bullet Items */
.bullet-item {
  display: flex;
  align-items: flex-start;
  gap: 16px;
}

/* .bullet-container {
  flex-shrink: 0;
}

.bullet {
  width: 8px;
  height: 8px;
  background: #3C90FC;
  border-radius: 50%;
  opacity: 0.6;
} */

.bullet-text {
  font-family: 'Inter', sans-serif;
  font-size: 16px;
  line-height: 1.6;
  color: #474363;
  margin: 0;
  flex: 1;
}

.text-default {
  color: #474363;
}

.text-blue {
  color: #3C90FC;
  font-weight: 500;
}

/* Logo Grid */
.logo-grid {
  width: 480px;
  height: 419px;
  position: relative;
  flex-shrink: 0;
}

.logo-main {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* Responsive Breakpoints */

/* Large Desktop (1600px+) - Original design */
@media (min-width: 1600px) {
  .tech-content {
    gap: 100px;
  }
}

/* Medium-Large Desktop (1200px - 1599px) */
@media (max-width: 1599px) {
  .tech-landscape {
    padding: 60px 150px;
  }
  
  .tech-content {
    gap: 60px;
  }
  
  .tech-cards {
    min-width: 450px;
  }
  
  .logo-grid {
    width: 420px;
    height: 367px;
  }
}

/* Medium Desktop (1024px - 1199px) */
@media (max-width: 1199px) {
  .tech-landscape {
    padding: 60px 80px;
  }
  
  .tech-content {
    gap: 40px;
  }
  
  .tech-cards {
    min-width: 400px;
    max-width: 550px;
  }
  
  .logo-grid {
    width: 380px;
    height: 332px;
  }
  
  .tech-title {
    font-size: 42px;
  }
}

/* Small Desktop / Large Tablet (768px - 1023px) */
@media (max-width: 1023px) {
  .tech-landscape {
    padding: 50px 40px;
  }
  
  .tech-content {
    flex-direction: column;
    gap: 50px;
    align-items: center;
  }
  
  .tech-cards {
    width: 100%;
    min-width: auto;
    max-width: 644px;
  }
  
  .logo-grid {
    width: 100%;
    max-width: 480px;
    height: auto;
    aspect-ratio: 480/419;
  }
  
  .tech-title {
    font-size: 38px;
  }
}

/* Tablet (600px - 767px) */
@media (max-width: 767px) {
  .tech-landscape {
    padding: 40px 24px;
  }
  
  .tech-header {
    padding-bottom: 32px;
  }
  
  .tech-title {
    font-size: 32px;
  }
  
  .tech-content {
    gap: 40px;
  }
  
  .card-title {
    font-size: 18px;
  }
  
  .bullet-text {
    font-size: 15px;
    line-height: 1.5;
  }
  
  .logo-grid {
    max-width: 400px;
  }
}

/* Mobile (375px - 599px) */
@media (max-width: 599px) {
  .tech-landscape {
    padding: 32px 20px;
  }
  
  .tech-header {
    padding-bottom: 24px;
  }
  
  .tech-title {
    font-size: 26px;
    line-height: 1.3;
  }
  
  .tech-content {
    gap: 32px;
  }
  
  .tech-cards {
    gap: 24px;
  }
  
  .card-inner {
    padding: 20px;
    gap: 14px;
  }
  
  .card-title {
    font-size: 16px;
  }
  
  .bullet-item {
    gap: 12px;
  }
  
  .bullet {
    width: 6px;
    height: 6px;
  }
  
  .bullet-text {
    font-size: 14px;
  }
  
  .logo-grid {
    max-width: 320px;
  }
}

/* Small Mobile (< 375px) */
@media (max-width: 374px) {
  .tech-landscape {
    padding: 24px 16px;
  }
  
  .tech-title {
    font-size: 24px;
  }
  
  .card-inner {
    padding: 16px;
  }
  
  .card-title {
    font-size: 15px;
  }
  
  .bullet-text {
    font-size: 13px;
  }
  
  .logo-grid {
    max-width: 280px;
  }
}
</style>