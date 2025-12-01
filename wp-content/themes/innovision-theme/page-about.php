<?php
/**
 * Template Name: About Us
 */
get_header();
$lang = pll_current_language('slug');
?>

<?php get_template_part('template-parts/page', 'title', [
    'subtitle' => 'Engineering Intelligence for the Real World',
]); ?>

<div class="about-us-section">
    <!-- About Innovision -->
    <div class="about-intro-wrapper">
        <div class="about-title-container">
            <h2 class="about-title">
                <span>About </span>
                <span class="title-highlight">Innovision</span>
            </h2>
        </div>

        <div class="about-detail-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg-about-us.png'); ?>');">
            <div class="about-detail-content">
                <div class="about-subtitle-group">
                    <span class="about-subtitle">Software Technology Solutions</span>
                    <span class="about-subtitle">Custom Software Services</span>
                </div>

                <div class="about-divider"></div>

                <p class="about-description">
                    Innovision Corporation is a technology startup specializing in AI, LLMs, and Edge AI. We deliver scalable, real-world solutions by combining AI software and embedded systems expertise. Beyond product development, we also provide automation, software, and firmware services that drive sustainable business growth.
                </p>

                <div class="about-cta-buttons">
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="btn-secondary">
                        <span>Our Projects</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn-primary">
                        <span>Tell us your requirements</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="vision-mission-wrapper">
        <!-- Vision -->
        <div class="vision-card">
            <h3 class="card-title">
                <span>Our </span>
                <span class="title-highlight">Vision</span>
            </h3>
            <p class="card-text">
                To become a leading AI and Edge Computing technology company in Southeast Asia, empowering enterprises to unlock the potential of their data and accelerate digital transformation.
            </p>
        </div>

        <!-- Mission -->
        <div class="mission-card">
            <h3 class="card-title">
                <span>Our </span>
                <span class="title-highlight">Mission</span>
            </h3>

            <div class="mission-list">
                <div class="mission-item">
                    <span class="bullet"></span>
                    <p>Bring AI closer to data and operational workflows.</p>
                </div>

                <div class="mission-item">
                    <span class="bullet"></span>
                    <p>Transform unstructured information into actionable business intelligence.</p>
                </div>

                <div class="mission-item">
                    <span class="bullet"></span>
                    <p>Build a reusable and scalable AI ecosystem that bridges research and applications.</p>
                </div>

                <div class="mission-item">
                    <span class="bullet"></span>
                    <p>Deliver innovative solutions that drive sustainable business growth.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Values -->
    <div class="values-wrapper">
        <div class="values-image">
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/image1324-lvv-900h.png'); ?>"
                alt="Our Values" />
        </div>

        <div class="values-content">
            <h3 class="values-title">
                <span>Our </span>
                <span class="title-highlight">Values</span>
            </h3>

            <div class="values-list">
                <!-- Value 1 -->
                <div class="value-card">
                    <div class="value-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1336-vow7-1700h.png'); ?>" class="icon-bg" alt="">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1337-345c-200h.png'); ?>" class="icon-img" alt="">
                    </div>
                    <div class="value-text">
                        <h4>Agility & Ownership</h4>
                        <p>We move fast, take initiative, and own our results.</p>
                    </div>
                </div>

                <div class="value-divider"></div>

                <!-- Value 2 -->
                <div class="value-card">
                    <div class="value-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/backgroundi134-rdca-1700h.png'); ?>" class="icon-bg" alt="">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/iconi134-y2ij-200h.png'); ?>" class="icon-img" alt="">
                    </div>
                    <div class="value-text">
                        <h4>Innovation with Purpose</h4>
                        <p>Every project must bring practical value to clients and society.</p>
                    </div>
                </div>

                <div class="value-divider"></div>

                <!-- Value 3 -->
                <div class="value-card">
                    <div class="value-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1352-143c-1700h.png'); ?>" class="icon-bg" alt="">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1353-b42t-200h.png'); ?>" class="icon-img" alt="">
                    </div>
                    <div class="value-text">
                        <h4>Openness & Collaboration</h4>
                        <p>We welcome ideas, embrace partnerships, and thrive on teamwork.</p>
                    </div>
                </div>

                <div class="value-divider"></div>

                <!-- Value 4 -->
                <div class="value-card">
                    <div class="value-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1362-n2wl-1700h.png'); ?>" class="icon-bg" alt="">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1363-5rjr-200h.png'); ?>" class="icon-img" alt="">
                    </div>
                    <div class="value-text">
                        <h4>Integrity & Trust</h4>
                        <p>We commit to transparency and long-term relationships.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    .about-us-section {
        width: 100%;
        padding: 58px 20px 68px;
    }

    /* About Intro */
    .about-intro-wrapper {
        margin-bottom: 80px;
    }

    .about-title-container {
        max-width: 1320px;
        margin: 0 auto 24px;
    }

    .about-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #1E1B39;
        line-height: normal;
        margin: 0;
    }

    .title-highlight {
        color: #3C90FC;
    }

    .about-detail-bg {
        width: 100%;
        padding: 24px 20px 116px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .about-detail-content {
        max-width: 1320px;
        margin: 0 auto;
    }

    .about-subtitle-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-bottom: 16px;
    }

    .about-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 700;
        color: #474363;
        line-height: 24px;
    }

    .about-divider {
        width: 200px;
        height: 1px;
        background-color: #474363;
        margin: 16px 0;
    }

    .about-description {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0 0 32px;
    }

    .about-cta-buttons {
        display: flex;
        gap: 17px;
        flex-wrap: wrap;
    }

    .btn-secondary {
        width: 222px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 14px 30px;
        border-radius: 10px;
        background: #FCFCFC;
        box-shadow: 0px 0.6px 0.6px -1.25px rgba(0, 0, 0, 0.18);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-secondary span {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 600;
        background: linear-gradient(161.19deg, #145AFF 0%, #023F78 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0px 4px 12px rgba(20, 90, 255, 0.2);
    }

    .btn-primary {
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px 36px;
        border-radius: 10px;
        background: #306BFF;
        border: 1px solid #0D51FF;
        box-shadow: 0px 10px 19px rgba(49, 107, 255, 0.28);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-primary span {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #FFFFFF;
    }

    .btn-primary:hover {
        background: #4178FF;
        transform: translateY(-2px);
        box-shadow: 0px 15px 25px rgba(49, 107, 255, 0.35);
    }

    /* Vision & Mission */
    .vision-mission-wrapper {
        max-width: 1320px;
        margin: 0 auto 80px;
        display: flex;
        gap: 32px;
    }

    .vision-card,
    .mission-card {
        flex: 1;
        padding: 24px;
        border-radius: 20px;
        background-size: cover;
        background-position: center;
    }

    .vision-card {
        background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tq_y9obmf5xdu-futh-1400w.png'); ?>');
    }

    .mission-card {
        background: #F4F7FC;
    }

    .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #474363;
        line-height: normal;
        margin: 0 0 24px;
    }

    .card-text {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
    }

    .mission-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .mission-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .bullet {
        width: 8px;
        height: 8px;
        min-width: 8px;
        background: #007AFF;
        border: 4px solid rgba(0, 122, 255, 0.15);
        border-radius: 50%;
        margin-top: 6px;
    }

    .mission-item p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
    }

    /* Our Values */
    .values-wrapper {
        max-width: 1320px;
        margin: 0 auto;
        display: flex;
        gap: 32px;
        padding-top: 38px;
    }

    .values-image {
        flex: 1;
        border-radius: 24px;
        overflow: hidden;
    }

    .values-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .values-content {
        flex: 1;
        padding-top: 35px;
    }

    .values-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #1E1B39;
        line-height: normal;
        margin: 0 0 24px;
    }

    .values-list {
        display: flex;
        flex-direction: column;
    }

    .value-card {
        display: flex;
        align-items: center;
        gap: 26px;
        padding: 24px 0;
    }

    .value-icon {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 100px;
        flex-shrink: 0;
    }

    .icon-bg {
        position: absolute;
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }

    .icon-img {
        position: relative;
        width: 100px;
        height: 67px;
        z-index: 2;
    }

    .value-text {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .value-text h4 {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #1E1B39;
        line-height: normal;
        margin: 0;
    }

    .value-text p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
    }

    .value-divider {
        width: 100%;
        height: 1px;
        background: #E5E7EB;
    }

    .homepage-footer {
        top: auto !important;
    }

    /* Responsive */
    @media (max-width: 1400px) {
        .about-us-section {
            padding: 50px 40px 60px;
        }
    }

    @media (max-width: 1024px) {
        .about-title {
            font-size: 40px;
        }

        .card-title,
        .values-title {
            font-size: 40px;
        }

        .vision-mission-wrapper {
            flex-direction: column;
            margin-bottom: 60px;
        }

        .values-wrapper {
            flex-direction: column;
        }

        .values-content {
            padding-top: 0;
        }
    }

    @media (max-width: 768px) {
        .about-us-section {
            padding: 40px 24px 50px;
        }

        .about-title {
            font-size: 32px;
        }

        .about-detail-bg {
            padding: 20px 16px 80px;
        }

        .about-subtitle {
            font-size: 15px;
        }

        .about-description {
            font-size: 15px;
            line-height: 22px;
        }

        .about-cta-buttons {
            flex-direction: column;
        }

        .btn-secondary,
        .btn-primary {
            width: 100%;
            max-width: 400px;
        }

        .card-title,
        .values-title {
            font-size: 32px;
        }

        .card-text,
        .mission-item p,
        .value-text p {
            font-size: 15px;
            line-height: 22px;
        }

        .value-text h4 {
            font-size: 18px;
        }
    }

    @media (max-width: 480px) {
        .about-us-section {
            padding: 30px 15px 40px;
        }

        .about-title {
            font-size: 28px;
        }

        .about-detail-bg {
            padding: 16px 12px 60px;
        }

        .about-subtitle {
            font-size: 14px;
        }

        .about-divider {
            width: 150px;
        }

        .about-description {
            font-size: 14px;
            line-height: 20px;
        }

        .btn-secondary span,
        .btn-primary span {
            font-size: 18px;
        }

        .card-title,
        .values-title {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .vision-card,
        .mission-card {
            padding: 20px;
        }

        .value-icon {
            width: 80px;
            height: 80px;
        }

        .icon-bg,
        .icon-img {
            width: 80px;
        }

        .icon-img {
            height: 54px;
        }

        .value-card {
            gap: 20px;
            padding: 20px 0;
        }

        .value-text h4 {
            font-size: 16px;
        }

        .card-text,
        .mission-item p,
        .value-text p {
            font-size: 14px;
            line-height: 20px;
        }
    }
</style>