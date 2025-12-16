<?php

/**
 * Template Name: Comming Soon
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/innovision/comming-bg.png';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
get_header();
$lang = pll_current_language('slug'); // vi hoặc en
$home_link = 'https://innovision.amintek.com.vn/';
$back_home_text = 'Back to Homepage';
if ($lang === 'vi') {

$back_home_text = 'Về trang chủ';
    // Link thủ công thêm /vi/
    $home_link = 'https://innovision.amintek.com.vn/vi/';
}
?>
<section class="page-title-section" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="page-title-content">
        <div class="page-title-content-detail">
         <h1 class="page-title-content-title">
<?php
if (is_archive()) {
    echo mb_strtoupper(wp_strip_all_tags(get_the_archive_title()), 'UTF-8');
} elseif (is_singular()) {
    echo mb_strtoupper(get_the_title(), 'UTF-8');
} else {
    echo mb_strtoupper(get_bloginfo('name'), 'UTF-8');
}
?>
</h1>
            
            <!-- <?php if (!empty($subtitle)): ?>
            <p class="page-title-content-sub-title">
                <?php echo esc_html($subtitle); ?>
            </p>
            <?php endif; ?> -->
                <a href="<?php echo esc_url($home_link); ?>" class="contact-us-button">
                        <span class="banner-contact-us-text">
                            <?php echo esc_html($back_home_text); ?>
                        </span>
                    </a>
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

    .page-title-section {
        width: 100%;
        min-height: 683px;
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
        gap: 24px;
        text-align: center;
        width: 100%;
    }

    /* Title */
    .page-title-content-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 64px;
        line-height: 1.6;
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

    /* Subtitle */
    .page-title-content-sub-title {
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

    /* Responsive Design */
    @media (max-width: 1400px) {
        .page-title-section {
            padding: 100px 40px 70px;
        }

        .page-title-content-title {
            font-size: 56px;
        }

        .page-title-content-sub-title {
            font-size: 15px;
            line-height: 26px;
        }
    }

    @media (max-width: 1024px) {
        .page-title-section {
            min-height: 400px;
            padding: 90px 30px 60px;
        }

        .page-title-content-title {
            font-size: 48px;
        }

        .page-title-content-sub-title {
            font-size: 15px;
            line-height: 26px;
            max-width: 800px;
        }
    }

    @media (max-width: 768px) {
        .page-title-section {
            min-height: 350px;
            padding: 80px 24px 50px;
        }

        .page-title-content-detail {
            gap: 20px;
        }

        .page-title-content-title {
            font-size: 40px;
            line-height: 110%;
        }

        .page-title-content-sub-title {
            font-size: 14px;
            line-height: 24px;
            max-width: 600px;
        }
    }

    @media (max-width: 480px) {
        .page-title-section {
            min-height: 300px;
            padding: 70px 20px 40px;
        }

        .page-title-content-detail {
            gap: 16px;
        }

        .page-title-content-title {
            font-size: 32px;
            line-height: 110%;
        }

        .page-title-content-sub-title {
            font-size: 13px;
            line-height: 22px;
            max-width: 100%;
        }
    }

    @media (max-width: 360px) {
        .page-title-section {
            min-height: 280px;
            padding: 60px 15px 35px;
        }

        .page-title-content-title {
            font-size: 28px;
        }

        .page-title-content-sub-title {
            font-size: 12px;
            line-height: 20px;
        }
    }
     .contact-us-button {
        width: auto;
        padding: 0px 12px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(
            163.33% 163.33% at 50% 100%, 
            rgba(255, 255, 255, 0.45) 0%, 
            rgba(0, 0, 0, 0) 100%
        ), #316BFF;
        border-radius: 10px;
        box-shadow: 0px 10px 19px 0px rgba(49, 107, 255, 0.28);
        cursor: pointer;
        text-decoration: none !important;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        /* animation: slideInLeft 0.6s ease-out 0.6s; */
        animation-fill-mode: both;
    }

    .contact-us-button::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
    }

    .contact-us-button:hover::before {
        width: 300px;
        height: 300px;
    }

    .contact-us-button:hover {
        transform: translateY(-2px);
        box-shadow: 0px 15px 25px 0px rgba(49, 107, 255, 0.35);
        background: radial-gradient(
            163.33% 163.33% at 50% 100%, 
            rgba(255, 255, 255, 0.55) 0%, 
            rgba(0, 0, 0, 0) 100%
        ), #4178FF;
    }

    .contact-us-button:active {
        transform: translateY(0);
        box-shadow: 0px 8px 15px 0px rgba(49, 107, 255, 0.25);
    }

    .banner-contact-us-text {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 20px;
        line-height: 100%;
        text-align: center;
        color: #FFFFFF;
        white-space: nowrap;
        position: relative;
        z-index: 1;
    }
</style>
<!--End Page Title-->
<?php get_footer(); ?>