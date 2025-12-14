<?php

/**
 * Reusable Page Title New component
 * Usage: get_template_part('template-parts/page', 'title', array('bg' => $bg_image, 'subtitle1' => 'First subtitle', 'subtitle' => 'Second subtitle'));
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/innovision/image241395-m00k-3400w.png';
$title = isset($args['title']) ? $args['title'] : '';
$subtitle1 = isset($args['subtitle1']) ? $args['subtitle1'] : '';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
$lang = pll_current_language('slug');
?>

<section class="page-title-section" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="page-title-content">
        <div class="page-title-content-detail">
            <h1 class="page-title-content-title">
                                   <?php echo esc_html($title); ?>

            </h1>
            
            <?php if (!empty($subtitle1)): ?>
                <p class="page-title-content-sub-title1">
                    <?php echo esc_html($subtitle1); ?>
                </p>
            <?php endif; ?>
            
            <?php if (!empty($subtitle)): ?>
                <p class="page-title-content-sub-title">
                    <?php echo esc_html($subtitle); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<style>
    /* Simple Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Page Title Section */
    .page-title-section {
        width: 100%;
        min-height: 500px;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 120px 20px 80px;
    }

    .page-title-content {
        width: 100%;
        max-width: 1320px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .page-title-content-detail {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        text-align: center;
        width: 100%;
    }

    /* Title with Gradient */
    .page-title-content-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 64px;
        line-height: 100%;
        letter-spacing: -0.02em;
        text-align: center;
        margin: 0;
        background: linear-gradient(142.89deg, #3C90FC 18.17%, rgba(60, 144, 252, 0) 152.61%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        word-break: break-word;
        animation: fadeInDown 0.8s ease-out;
    }

    /* Subtitle 1 - Larger text, lighter color */
    .page-title-content-sub-title1 {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 28px;
        letter-spacing: -0.2px;
        text-align: center;
        color: #3C3C3C;
        margin: 0;
        max-width: 1320px;
        width: 100%;
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    /* Subtitle 2 - Smaller text, darker color */
    .page-title-content-sub-title {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 14px;
        line-height: 28px;
        letter-spacing: -0.2px;
        text-align: center;
        color: #474464;
        margin: 0;
        max-width: 1320px;
        width: 100%;
        animation: fadeInUp 0.8s ease-out 0.3s both;
    }

    /* Responsive Design */
    
    /* Large Desktop (1400px and below) */
    @media (max-width: 1400px) {
        .page-title-section {
            padding: 100px 40px 70px;
        }

        .page-title-content-title {
            font-size: 56px;
        }

        .page-title-content-sub-title1 {
            font-size: 15px;
            line-height: 26px;
        }

        .page-title-content-sub-title {
            font-size: 14px;
            line-height: 26px;
        }
    }

    /* Desktop (1024px and below) */
    @media (max-width: 1024px) {
        .page-title-section {
            min-height: 400px;
            padding: 90px 30px 60px;
        }

        .page-title-content-detail {
            gap: 14px;
        }

        .page-title-content-title {
            font-size: 48px;
        }

        .page-title-content-sub-title1 {
            font-size: 15px;
            line-height: 26px;
            max-width: 800px;
        }

        .page-title-content-sub-title {
            font-size: 13px;
            line-height: 24px;
            max-width: 800px;
        }
    }

    /* Tablet (768px and below) */
    @media (max-width: 768px) {
        .page-title-section {
            min-height: 350px;
            padding: 80px 24px 50px;
        }

        .page-title-content-detail {
            gap: 12px;
        }

        .page-title-content-title {
            font-size: 40px;
            line-height: 110%;
        }

        .page-title-content-sub-title1 {
            font-size: 14px;
            line-height: 24px;
            max-width: 600px;
        }

        .page-title-content-sub-title {
            font-size: 13px;
            line-height: 22px;
            max-width: 600px;
        }
    }

    /* Mobile Large (480px and below) */
    @media (max-width: 480px) {
        .page-title-section {
            min-height: 300px;
            padding: 70px 20px 40px;
        }

        .page-title-content-detail {
            gap: 12px;
        }

        .page-title-content-title {
            font-size: 32px;
            line-height: 110%;
        }

        .page-title-content-sub-title1 {
            font-size: 13px;
            line-height: 22px;
            max-width: 100%;
        }

        .page-title-content-sub-title {
            font-size: 12px;
            line-height: 20px;
            max-width: 100%;
        }
    }

    /* Mobile Small (360px and below) */
    @media (max-width: 360px) {
        .page-title-section {
            min-height: 280px;
            padding: 60px 15px 35px;
        }

        .page-title-content-detail {
            gap: 10px;
        }

        .page-title-content-title {
            font-size: 28px;
        }

        .page-title-content-sub-title1 {
            font-size: 12px;
            line-height: 20px;
        }

        .page-title-content-sub-title {
            font-size: 11px;
            line-height: 18px;
        }
    }
</style>
<!--End Page Title-->