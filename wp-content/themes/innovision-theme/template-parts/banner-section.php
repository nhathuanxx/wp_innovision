<?php

/**
 * Reusable Page Title component
 * Usage: get_template_part('template-parts/banner-section', 'title', array('bg' => $bg_image));
 */

$bg_image = isset($args['bg']) ? $args['bg'] : get_template_directory_uri() . '/assets/images/background/2.jpg';
?>
<?php $lang = pll_current_language('slug'); ?>

<section class="banner-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg.png'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <!-- <img
        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg.png'); ?>"
        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
        class="banner-image" /> -->
    <div class="banner-content">
        <div class="banner-content-detail">
            <div class="banner-content-title">
                Beyond Intelligent
            </div>
            <div class="banner-content-sub-title">
                AI | LLM | Edge Computing – Transforming Data into Real-World Impact
            </div>
           <div class="banner-content-actions-container">
             <div class="banner-content-actions">
                <div class="contact-us-button">
                    <span class="banner-contact-us-text">Contact Us</span>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22921378-g8xw-200h.png'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="homepage-rectangle">
                </div>

                <div class="view-solutions-button">
                    <span class="banner-solutions-text">View Solutions</span>
                </div>
            </div>
           </div>
        </div>
    </div>
</section>
<style>
    .banner-section {
        /* top: 0px;
        left: 0px; */
        width: 100%;
        min-height: 800px;
        height: auto;
        display: flex;
        /* position: absolute; */
        align-items: center;
        justify-content: center;
        flex-shrink: 1;
    }
    .banner-content-detail{
            display: flex;
    flex-direction: column;
    gap: 24px;
    }

    .banner-image {
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: -1;
    }

    .banner-content-actions .banner {
        gap: 8px;
        display: flex;
        padding: 20px 36px;
        position: relative;
        box-shadow: 0px 10px 19px 0px rgba(49, 107, 255, 0.2800000011920929);
        align-items: center;
        border-color: rgba(13, 81, 255, 1);
        border-style: solid;
        border-width: 1px;
        border-radius: 10px;
        justify-content: center;
        background-color: rgba(48, 106, 255, 1);
    }

    .banner-content-title {
    font-family: Montserrat, sans-serif;
    font-weight: 700;
    font-size: 64px;
    line-height: 100%;
    letter-spacing: -2%;
    text-align: center;

    background: linear-gradient(142.89deg, #3C90FC 18.17%, rgba(60, 144, 252, 0) 152.61%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;

    border: 0.5px solid #FFFFFF96;
    z-index: 1;
}

.banner-content-sub-title {
    font-family: Inter, sans-serif;
    font-weight: 500;
    font-size: 16px;
    line-height: 28px;
    letter-spacing: -0.2px;
    text-align: center;
    color: #3C3C3C;
}

.contact-us-button {
    width: 181px;
    height: 64px;
    opacity: 1;

    border-width: 1px;
    border-radius: 10px;

  display: flex;
    align-items: center;
    justify-content: center;
    background: radial-gradient(
        163.33% 163.33% at 50% 100%, 
        rgba(255, 255, 255, 0.45) 0%, 
        rgba(0, 0, 0, 0) 100%
    ), #316BFF;

    border: 1px solid #0E51FF;
    box-shadow: 0px 10px 19px 0px #316BFF47;
}

.banner-contact-us-text {
    font-family: Inter, sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 100%;
    text-align: center;
    color: #FFFFFF;
    white-space: nowrap;
}

.view-solutions-button {
    width: 222px;
    height: 64px;
    opacity: 1;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #FCFCFC;
    box-shadow:
        0px 10px 10px -3.75px #00000010,
        0px 2.29px 2.29px -2.5px #00000029,
        0px 0.6px 0.6px -1.25px #0000002E,
        inset 0px -5px 4px -3.5px #4788FF4D,
        inset 0px -1.14px 0.92px -2.33px #4788FF9B,
        inset 0px -0.3px 0.24px -1.17px #4788FFAC;
}

.banner-solutions-text {
    font-family: Inter, sans-serif;
    font-weight: 600;
    font-size: 20px;
    line-height: 28px;
    letter-spacing: -0.2px;
    text-align: center;
    color: #0A4DBB;
}

.banner-content-actions-container {
    display: flex;
    justify-content: center;
}

.banner-content-actions {
    width: 468px;
    height: 64px;
    opacity: 1;

    padding: 0 20.5px;

    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
}
</style>