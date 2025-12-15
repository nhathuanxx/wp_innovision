<?php

/**
 * Reusable Page Title component
 * Usage: get_template_part('template-parts/page', 'title', array('bg' => $bg_image, 'subtitle' => 'Your subtitle'));
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/innovision/image241395-m00k-3400w.png';
$subtitle = isset($args['subtitle']) ? $args['subtitle'] : '';
$lang = pll_current_language('slug');
?>

<section class="page-title-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="page-title-container">
        <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="back-link">
            <div class="back-icon">
                <div class="icon-wrapper">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/vector1765-ck2.svg'); ?>"
                        alt="Back"
                        class="arrow-icon" />
                </div>
            </div>
            <span class="back-text">Back to Portfolio</span>
        </a>

        <h1 class="page-title">
            <?php
            if (is_archive()) {
                // Loại bỏ tiền tố "Lưu trữ:" cho archive
                if (is_post_type_archive()) {
                    post_type_archive_title();
                } elseif (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_tax()) {
                    single_term_title();
                } else {
                    the_archive_title();
                }
            } elseif (is_singular()) {
                the_title();
            } else {
                bloginfo('name');
            }
            ?>
        </h1>

        <?php if (!empty($subtitle)) : ?>
            <p class="page-subtitle">
                <?php echo esc_html($subtitle); ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<style>
    /* Page Title Hero Section */
    .page-title-hero {
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

    .page-title-container {
        gap: 16px;
        width: 100%;
        max-width: 1320px;
        height: auto;
        display: flex;
        align-items: flex-start;
        flex-direction: column;
    }

    /* Back Link */
    .back-link {
        gap: 16px;
        display: flex;
        align-items: center;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        opacity: 0.8;
        transform: translateX(-4px);
    }

    .back-icon {
        width: 16px;
        height: 16px;
        display: flex;
        overflow: hidden;
        position: relative;
        align-items: flex-start;
        flex-shrink: 0;
    }

    .icon-wrapper {
        top: 0px;
        left: 0px;
        width: 16px;
        height: 16px;
        display: flex;
        position: absolute;
        align-items: flex-start;
    }

    .arrow-icon {
        top: 3.57px;
        left: 2.23px;
        width: 12px;
        height: 9px;
        position: absolute;
    }

    .back-text {
        color: #3C90FC;
        height: auto;
        font-size: 16px;
        font-style: normal;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        line-height: normal;
        text-decoration: none;
        white-space: nowrap;
    }

    /* Page Title */
    .page-title {
        font-family: Montserrat;
        font-weight: 700;
        font-style: Bold;
        font-size: 56px;
        line-height: normal;
        letter-spacing: -2%;

        color: #3C90FC;
        text-align: left;
        background: linear-gradient(142.89deg, #3C90FC 18.17%, rgba(60, 144, 252, 0) 152.61%);
        ;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Page Subtitle */
    .page-subtitle {
        color: #474363;
        height: auto;
        font-size: 16px;
        font-style: normal;
        text-align: left;
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        line-height: 28px;
        text-decoration: none;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 1400px) {
        .page-title-hero {
            padding: 100px 40px 70px;
        }

        .page-title {
            font-size: 56px;
        }

        .page-subtitle {
            font-size: 15px;
            line-height: 26px;
        }
    }

    @media (max-width: 1024px) {
        .page-title-hero {
            min-height: 400px;
            padding: 90px 30px 60px;
        }

        .page-title-container {
            gap: 14px;
        }

        .page-title {
            font-size: 48px;
        }

        .back-text {
            font-size: 15px;
        }

        .page-subtitle {
            font-size: 15px;
            line-height: 26px;
        }
    }

    @media (max-width: 768px) {
        .page-title-hero {
            min-height: 350px;
            padding: 80px 24px 50px;
        }

        .page-title-container {
            gap: 12px;
        }

        .back-link {
            gap: 12px;
        }

        .page-title {
            font-size: 40px;
            line-height: 110%;
        }

        .back-text {
            font-size: 14px;
        }

        .page-subtitle {
            font-size: 14px;
            line-height: 24px;
        }
    }

    @media (max-width: 480px) {
        .page-title-hero {
            min-height: 300px;
            padding: 70px 20px 40px;
        }

        .page-title-container {
            gap: 10px;
        }

        .back-link {
            gap: 10px;
        }

        .back-icon {
            width: 14px;
            height: 14px;
        }

        .icon-wrapper {
            width: 14px;
            height: 14px;
        }

        .arrow-icon {
            width: 10px;
            height: 8px;
        }

        .page-title {
            font-size: 32px;
            line-height: 110%;
        }

        .back-text {
            font-size: 13px;
        }

        .page-subtitle {
            font-size: 13px;
            line-height: 22px;
        }
    }

    @media (max-width: 360px) {
        .page-title-hero {
            min-height: 280px;
            padding: 60px 15px 35px;
        }

        .page-title {
            font-size: 28px;
        }

        .back-text {
            font-size: 12px;
        }

        .page-subtitle {
            font-size: 12px;
            line-height: 20px;
        }
    }
</style>