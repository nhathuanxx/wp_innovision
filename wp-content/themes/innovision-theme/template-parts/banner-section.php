<?php
/**
 * Reusable Page Title component
 * Usage: get_template_part('template-parts/banner-section', 'title', array('bg' => $bg_image));
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/background/2.jpg';
$lang = pll_current_language('slug'); // vi hoặc en hoặc ngôn ngữ khác

// --- TEXT ---
$title = 'Beyond Intelligent';
$subtitle = 'AI | LLM | Edge Computing – Transforming Data into Real-World Impact';
$contact_text = 'Contact Us';
$solutions_text = 'View Solutions';

// --- LINKS ---
$contact_link = home_url('/contact-us');
$solutions_link = home_url('/solutions');

if ($lang === 'vi') {
    $title = 'Vượt Qua Mọi Giới Hạn Trí Tuệ';
    $subtitle = 'AI | LLM | Điện toán biên – Biến dữ liệu thành giá trị thực tế';
    $contact_text = 'Liên hệ';
    $solutions_text = 'Xem giải pháp';

    // Link thủ công thêm /vi/
    $contact_link = home_url('/vi/contact-us');
    $solutions_link = home_url('/vi/solutions');
}

?>

<section class="banner-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg.png'); ?>');">
    <div class="banner-content">
        <div class="banner-content-detail">

            <h1 class="banner-content-title">
                <?php echo esc_html($title); ?>
            </h1>

            <p class="banner-content-sub-title">
                <?php echo esc_html($subtitle); ?>
            </p>

            <div class="banner-content-actions-container">
                <div class="banner-content-actions">

                    <!-- <a href="<?php echo esc_url($contact_link); ?>" class="contact-us-button">
                        <span class="banner-contact-us-text">
                            <?php echo esc_html($contact_text); ?>
                        </span>
                    </a> -->

                    <a href="<?php echo esc_url($solutions_link); ?>" class="view-solutions-button">
                        <span class="banner-solutions-text">
                            <?php echo esc_html($solutions_text); ?>
                        </span>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Keyframes cho animations */
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

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.95);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .banner-section {
        width: 100%;
        min-height: 800px;
        height: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding: 100px 20px;
    }

    .banner-content {
        width: 100%;
        max-width: 1200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .banner-content-detail {
        display: flex;
        flex-direction: column;
        gap: 24px;
        align-items: center;
        text-align: center;
        max-width: 900px;
        width: 100%;
    }

    /* Title với animation */
    .banner-content-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 64px;
        letter-spacing: -0.02em;
        text-align: center;
        margin: 0;
        background: linear-gradient(142.89deg, #3C90FC 18.17%, rgba(60, 144, 252, 0) 152.61%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        white-space: nowrap;
        animation: fadeInScale 0.8s ease-out;
    }

    /* Subtitle với animation */
    .banner-content-sub-title {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 28px;
        letter-spacing: -0.2px;
        text-align: center;
        color: #3C3C3C;
        margin: 0;
        animation: fadeInUp 0.8s ease-out 0.2s;
        animation-fill-mode: both;
    }

    /* Actions Container */
    .banner-content-actions-container {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 16px;
        animation: fadeInUp 0.8s ease-out 0.4s;
        animation-fill-mode: both;
    }

    .banner-content-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
    }

    /* Contact Us Button với animation */
    .contact-us-button {
        width: 181px;
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
        animation: slideInLeft 0.6s ease-out 0.6s;
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

    /* View Solutions Button với animation */
    .view-solutions-button {
        width: 222px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #FCFCFC;
        border-radius: 10px;
        box-shadow:
            0px 10px 10px -3.75px rgba(0, 0, 0, 0.06),
            0px 2.29px 2.29px -2.5px rgba(0, 0, 0, 0.16),
            0px 0.6px 0.6px -1.25px rgba(0, 0, 0, 0.18),
            inset 0px -5px 4px -3.5px rgba(71, 136, 255, 0.3),
            inset 0px -1.14px 0.92px -2.33px rgba(71, 136, 255, 0.6),
            inset 0px -0.3px 0.24px -1.17px rgba(71, 136, 255, 0.67);
        cursor: pointer;
        text-decoration: none !important;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        animation: slideInRight 0.6s ease-out 0.6s;
        animation-fill-mode: both;
    }

    .view-solutions-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(71, 136, 255, 0.1), transparent);
        transition: left 0.5s ease;
    }

    .view-solutions-button:hover::before {
        left: 100%;
    }

    .view-solutions-button:hover {
        transform: translateY(-2px);
        background: #FFFFFF;
        box-shadow:
            0px 15px 15px -3.75px rgba(0, 0, 0, 0.08),
            0px 3px 3px -2.5px rgba(0, 0, 0, 0.18),
            0px 1px 1px -1.25px rgba(0, 0, 0, 0.2),
            inset 0px -6px 5px -3.5px rgba(71, 136, 255, 0.35),
            inset 0px -1.5px 1px -2.33px rgba(71, 136, 255, 0.65),
            inset 0px -0.4px 0.3px -1.17px rgba(71, 136, 255, 0.72);
    }

    .view-solutions-button:active {
        transform: translateY(0);
        box-shadow:
            0px 8px 8px -3.75px rgba(0, 0, 0, 0.05),
            0px 2px 2px -2.5px rgba(0, 0, 0, 0.14),
            inset 0px -4px 3px -3.5px rgba(71, 136, 255, 0.28);
    }

    .banner-solutions-text {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        letter-spacing: -0.2px;
        text-align: center;
        /* color: #0A4DBB; */
        position: relative;
        z-index: 1;
        transition: color 0.3s ease;
         background: linear-gradient(161.19deg, #145AFF 0%, #023F78 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  color: transparent;
    }

    .view-solutions-button:hover .banner-solutions-text {
        color: #0842A8;
    }

    /* Responsive Design - Mobile Only */
    @media (max-width: 768px) {
        .banner-section {
            min-height: 500px;
            padding: 60px 20px;
        }

        .banner-content-detail {
            gap: 16px;
        }

        .banner-content-title {
            font-size: 32px;
            white-space: normal;
            line-height: 1.2;
        }

        .banner-content-sub-title {
            font-size: 13px;
            line-height: 20px;
        }

        .banner-content-actions-container {
            margin-top: 8px;
        }

        .banner-content-actions {
            flex-direction: column;
            gap: 12px;
            width: 100%;
        }

        .contact-us-button {
            width: 100%;
            max-width: 240px;
            height: 48px;
            animation: fadeInUp 0.6s ease-out 0.6s;
        }

        .view-solutions-button {
            width: 100%;
            max-width: 240px;
            height: 48px;
            animation: fadeInUp 0.6s ease-out 0.7s;
        }

        .banner-contact-us-text {
            font-size: 16px;
        }

        .banner-solutions-text {
            font-size: 16px;
            line-height: 100%;
        }
    }

    @media (max-width: 480px) {
        .banner-section {
            min-height: 450px;
            padding: 50px 16px;
        }

        .banner-content-detail {
            gap: 14px;
        }

        .banner-content-title {
            font-size: 28px;
        }

        .banner-content-sub-title {
            font-size: 12px;
            line-height: 18px;
        }

        .contact-us-button,
        .view-solutions-button {
            max-width: 220px;
            height: 46px;
        }

        .banner-contact-us-text,
        .banner-solutions-text {
            font-size: 15px;
        }
    }

    @media (max-width: 360px) {
        .banner-section {
            min-height: 400px;
            padding: 40px 12px;
        }

        .banner-content-title {
            font-size: 24px;
        }

        .banner-content-sub-title {
            font-size: 11px;
            line-height: 17px;
        }

        .contact-us-button,
        .view-solutions-button {
            max-width: 200px;
            height: 44px;
        }

        .banner-contact-us-text,
        .banner-solutions-text {
            font-size: 14px;
        }
    }

    /* Tắt animation khi người dùng đã bật reduce motion */
    @media (prefers-reduced-motion: reduce) {
        .banner-content-title,
        .banner-content-sub-title,
        .banner-content-actions-container,
        .contact-us-button,
        .view-solutions-button {
            animation: none;
        }
    }
</style>