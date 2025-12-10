<?php
$fields = $args['fields'] ?? [];

// Nếu tắt section thì ẩn hoàn toàn
if (empty($fields['portfolio_problem_enable'])) {
    return;
}

// Lấy dữ liệu ACF
$title       = $fields['portfolio_problem_title'] ?? '';
$desc        = $fields['portfolio_problem_description'] ?? '';
$preview_img = $fields['portfolio_problem_preview_image']['url'] ?? get_template_directory_uri() . '/assets/images/innovision/pro-solu.png';
$solutions   = $fields['portfolio_problem_solutions'] ?? [];
?>

<div class="usecase-section">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image443987-rd3c-2000w.png'); ?>"
            alt="Background"
            class="usecase-bg" />

    <div class="usecase-content">
        
        <!-- Preview Image -->
     <div class="usecase-image">
    <img
        src="<?php echo esc_url($preview_img); ?>"
        alt="Solution Preview"
        class="usecase-img" />
</div>

        <!-- Problem & Solution Content -->
        <div class="usecase-info">

            <!-- PROBLEM -->
            <div class="usecase-block">
                <h3 class="usecase-block-title">PROBLEM</h3>

                <p class="usecase-block-text">
                    <?php echo esc_html($desc); ?>
                </p>
            </div>

            <!-- SOLUTION -->
            <div class="usecase-block">
                <h3 class="usecase-block-title">SOLUTION</h3>

                <?php if (!empty($solutions)): ?>
                    <?php foreach ($solutions as $item): ?>
                        <div class="usecase-bullet-item">
                            <div class="bullet-container">
                                <div class="bullet"></div>
                            </div>
                            <p class="usecase-bullet-text">
                                <?php echo esc_html($item['solution_text']); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<style>
    /* Use Case Section */
    .usecase-section {
        width: 100%;
        min-height: 680px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .usecase-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .usecase-content {
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

    /* Image Preview */
    .usecase-image {
        width: 644px;
        flex-shrink: 0;
    }

    .usecase-img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Info Content */
    .usecase-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .usecase-block {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .usecase-block-title {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #474363;
        margin: 0;
    }

    .usecase-block-text {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        line-height: 24px;
        color: #474363;
        margin: 0;
        text-align: justify;
    }

    /* Bullet Items */
    .usecase-bullet-item {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .usecase-bullet-icon {
        width: 8px;
        height: 8px;
        border: 4px solid rgba(0, 122, 255, 0.15);
        border-radius: 50%;
        flex-shrink: 0;
    }

    .usecase-bullet-text {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        line-height: 24px;
        color: #474363;
        margin: 0;
        flex: 1;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .usecase-content {
            flex-direction: column;
            padding: 60px 40px;
        }

        .usecase-image {
            width: 100%;
            max-width: 644px;
        }

        .usecase-info {
            width: 100%;
            max-width: 644px;
        }
    }

    @media (max-width: 768px) {
        .usecase-section {
            min-height: auto;
        }

        .usecase-content {
            padding: 40px 20px;
            gap: 40px;
        }

        .usecase-block-title {
            font-size: 18px;
        }

        .usecase-block-text,
        .usecase-bullet-text {
            font-size: 14px;
            line-height: 22px;
        }
    }

    @media (max-width: 480px) {
        .usecase-block-title {
            font-size: 16px;
        }

        .usecase-block-text,
        .usecase-bullet-text {
            font-size: 13px;
            line-height: 20px;
        }
    }
</style>