<?php
/**
 * Reusable Page Title component
 * Usage: get_template_part('template-parts/banner-section', 'title', array('bg' => $bg_image));
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/background/2.jpg';
$lang = pll_current_language('slug');
?>

<section class="banner-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg.png'); ?>');">
    <div class="banner-content">
        <div class="banner-content-detail">
            <h1 class="banner-content-title">Beyond Intelligent</h1>
            
            <p class="banner-content-sub-title">
                AI | LLM | Edge Computing – Transforming Data into Real-World Impact
            </p>
            
            <div class="banner-content-actions-container">
                <div class="banner-content-actions">
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="contact-us-button">
                        <span class="banner-contact-us-text">Contact Us</span>
                    </a>

                    <a href="<?php echo esc_url(home_url('/solutions')); ?>" class="view-solutions-button">
                        <span class="banner-solutions-text">View Solutions</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
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

    /* Title */
    .banner-content-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 64px;
        /* line-height: 100%; */
        letter-spacing: -0.02em;
        text-align: center;
        margin: 0;
        background: linear-gradient(142.89deg, #3C90FC 18.17%, rgba(60, 144, 252, 0) 152.61%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Subtitle */
    .banner-content-sub-title {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 28px;
        letter-spacing: -0.2px;
        text-align: center;
        color: #3C3C3C;
        margin: 0;
    }

    /* Actions Container */
    .banner-content-actions-container {
        display: flex;
        justify-content: center;
        width: 100%;
        margin-top: 16px;
    }

    .banner-content-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 24px;
        flex-wrap: wrap;
    }

    /* Contact Us Button */
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
        /* border: 1px solid #0E51FF; */
        border-radius: 10px;
        box-shadow: 0px 10px 19px 0px rgba(49, 107, 255, 0.28);
        cursor: pointer;
        text-decoration: none !important;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
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

    /* View Solutions Button */
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
        color: #0A4DBB;
        position: relative;
        z-index: 1;
        transition: color 0.3s ease;
    }

    .view-solutions-button:hover .banner-solutions-text {
        color: #0842A8;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .banner-section {
            min-height: 700px;
            padding: 80px 40px;
        }

        .banner-content-title {
            font-size: 56px;
        }

        .banner-content-sub-title {
            font-size: 15px;
            line-height: 26px;
        }
    }

    @media (max-width: 768px) {
        .banner-section {
            min-height: 600px;
            padding: 60px 30px;
        }

        .banner-content-title {
            font-size: 42px;
        }

        .banner-content-sub-title {
            font-size: 14px;
            line-height: 24px;
        }

        .banner-content-actions {
            gap: 16px;
        }

        .contact-us-button {
            width: 160px;
            height: 56px;
        }

        .view-solutions-button {
            width: 190px;
            height: 56px;
        }

        .banner-contact-us-text,
        .banner-solutions-text {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .banner-section {
            min-height: 500px;
            padding: 40px 20px;
        }

        .banner-content-detail {
            gap: 20px;
        }

        .banner-content-title {
            font-size: 32px;
            /* line-height: 110%; */
        }

        .banner-content-sub-title {
            font-size: 13px;
            line-height: 22px;
        }

        .banner-content-actions-container {
            margin-top: 8px;
        }

        .banner-content-actions {
            flex-direction: column;
            gap: 12px;
            width: 100%;
        }

        .contact-us-button,
        .view-solutions-button {
            width: 100%;
            max-width: 280px;
            height: 52px;
        }

        .banner-contact-us-text,
        .banner-solutions-text {
            font-size: 16px;
        }
    }

    @media (max-width: 360px) {
        .banner-content-title {
            font-size: 28px;
        }

        .banner-content-sub-title {
            font-size: 12px;
            line-height: 20px;
        }
    }
</style>