<?php

/**
 * Template Name: About Us
 */
get_header();
$lang = pll_current_language('slug'); // vi hoặc en
?>

<?php
// ===== DEFAULT (EN) =====
$page_subtitle = "Engineering Intelligence for the Real World";

$about_title_1 = "About ";
$about_title_2 = "Innovision";

$about_sub_1 = "Software Technology Solutions";
$about_sub_2 = "Custom Software Services";

$about_description = "Innovision Corporation is a technology startup specializing in AI, LLMs, and Edge AI. We deliver scalable, real-world solutions by combining AI software and embedded systems expertise. Beyond product development, we also provide automation, software, and firmware services that drive sustainable business growth.";

$projects_text = "Our Projects";
$contact_text = "Tell us your requirements";
$projects_link = home_url('/portfolio');
$contact_link  = home_url('/contact-us');

$vision_title_1 = "Our ";
$vision_title_2 = "Vision";
$vision_text = "To become a leading AI and Edge Computing technology company in Southeast Asia, empowering enterprises to unlock the potential of their data and accelerate digital transformation.";

$mission_title_1 = "Our ";
$mission_title_2 = "Mission";

$mission_list = [
    "Bring AI closer to data and operational workflows.",
    "Transform unstructured information into actionable business intelligence.",
    "Build a reusable and scalable AI ecosystem that bridges research and applications.",
    "Deliver innovative solutions that drive sustainable business growth.",
];

$values_title_1 = "Our ";
$values_title_2 = "Values";

$values = [
    ["Agility & Ownership", "We move fast, take initiative, and own our results."],
    ["Innovation with Purpose", "Every project must bring practical value to clients and society."],
    ["Openness & Collaboration", "We welcome ideas, embrace partnerships, and thrive on teamwork."],
    ["Integrity & Trust", "We commit to transparency and long-term relationships."],
];

// ===== VIETNAMESE =====
if ($lang === 'vi') {
    $page_subtitle = "Kiến tạo trí tuệ cho thế giới thực";

    $about_title_1 = "Về ";
    $about_title_2 = "Innovision";

    $about_sub_1 = "Giải pháp công nghệ phần mềm";
    $about_sub_2 = "Dịch vụ phần mềm tùy chỉnh";

    $about_description = "Innovision là một startup công nghệ chuyên về AI, LLM và Edge AI. Chúng tôi xây dựng các giải pháp thực tế, có khả năng mở rộng bằng cách kết hợp thế mạnh giữa phần mềm AI và hệ thống nhúng. Ngoài phát triển sản phẩm, chúng tôi còn cung cấp dịch vụ tự động hóa, phần mềm và firmware nhằm thúc đẩy tăng trưởng bền vững cho doanh nghiệp.";

    $projects_text = "Dự án của chúng tôi";
    $contact_text = "Gửi yêu cầu của bạn";

    $projects_link = home_url('/vi/portfolio');
    $contact_link  = home_url('/vi/contact-us');

    $vision_title_1 = "Tầm nhìn ";
    $vision_title_2 = "của chúng tôi";
    $vision_text = "Trở thành công ty dẫn đầu Đông Nam Á trong lĩnh vực AI và Điện toán biên, giúp doanh nghiệp khai phá giá trị từ dữ liệu và thúc đẩy chuyển đổi số.";

    $mission_title_1 = "Sứ mệnh ";
    $mission_title_2 = "của chúng tôi";

    $mission_list = [
        "Đưa AI đến gần hơn với dữ liệu và quy trình vận hành.",
        "Biến dữ liệu phi cấu trúc thành thông tin hữu ích phục vụ kinh doanh.",
        "Xây dựng hệ sinh thái AI mở rộng và tái sử dụng, kết nối nghiên cứu với ứng dụng.",
        "Cung cấp các giải pháp đổi mới nhằm thúc đẩy tăng trưởng bền vững.",
    ];

    $values_title_1 = "Giá trị ";
    $values_title_2 = "cốt lõi";

    $values = [
        ["Tốc độ & Tinh thần sở hữu", "Chúng tôi hành động nhanh, chủ động và chịu trách nhiệm đến cùng."],
        ["Đổi mới có mục tiêu", "Mỗi dự án đều phải mang lại giá trị thực tế cho khách hàng và xã hội."],
        ["Cởi mở & Hợp tác", "Chúng tôi chào đón ý tưởng mới, đề cao hợp tác và tinh thần làm việc nhóm."],
        ["Khách quan & Tin cậy", "Chúng tôi cam kết minh bạch và xây dựng quan hệ bền vững lâu dài."],
    ];
}
?>

<?php get_template_part('template-parts/page', 'title', [
    'subtitle' => $page_subtitle,
]); ?>

<div class="about-us-section">

    <!-- About Innovision -->
    <div class="about-intro-wrapper">

        <div class="about-title-container">
            <h2 class="about-title">
                <span><?php echo esc_html($about_title_1); ?></span>
                <span class="title-highlight"><?php echo esc_html($about_title_2); ?></span>
            </h2>
        </div>

        <div class="about-detail-bg"
            style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/bg-about-us.png'); ?>');">

            <div class="about-detail-content">

                <div class="about-subtitle-group">
                    <span class="about-subtitle"><?php echo esc_html($about_sub_1); ?></span>
                    <span class="about-subtitle"><?php echo esc_html($about_sub_2); ?></span>
                </div>

                <div class="about-divider"></div>

                <p class="about-description">
                    <?php echo esc_html($about_description); ?>
                </p>

                <div class="about-cta-buttons">
                    <a href="<?php echo esc_url($projects_link); ?>" class="btn-secondary">
                        <span><?php echo esc_html($projects_text); ?></span>
                    </a>

                    <!-- <a href="<?php echo esc_url($contact_link); ?>" class="btn-primary">
                        <span><?php echo esc_html($contact_text); ?></span>
                    </a> -->
                </div>

            </div>
        </div>

    </div>

    <!-- Vision & Mission -->
    <div class="vision-mission-wrapper">

        <!-- Vision -->
        <div class="vision-card">
            <h3 class="card-title">
                <span><?php echo esc_html($vision_title_1); ?></span>
                <span class="title-highlight"><?php echo esc_html($vision_title_2); ?></span>
            </h3>

            <p class="card-text">
                <?php echo esc_html($vision_text); ?>
            </p>
        </div>

        <!-- Mission -->
        <div class="mission-card">
            <h3 class="card-title">
                <span><?php echo esc_html($mission_title_1); ?></span>
                <span class="title-highlight"><?php echo esc_html($mission_title_2); ?></span>
            </h3>

            <div class="mission-list">
                <?php foreach ($mission_list as $m): ?>
                    <div class="mission-item">
                        <div class="bullet-container">
                            <div class="bullet"></div>
                        </div>
                        <p><?php echo esc_html($m); ?></p>
                    </div>
                <?php endforeach; ?>
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
                <span><?php echo esc_html($values_title_1); ?></span>
                <span class="title-highlight"><?php echo esc_html($values_title_2); ?></span>
            </h3>

            <div class="values-list">

                <?php foreach ($values as $index => $v): ?>
                    <div class="value-card">
                        <div class="value-icon">
                            <!-- giữ nguyên icon theo từng card -->
                            <?php if ($index === 0): ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1336-vow7-1700h.png'); ?>" class="icon-bg" alt="">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1337-345c-200h.png'); ?>" class="icon-img" alt="">
                            <?php elseif ($index === 1): ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/backgroundi134-rdca-1700h.png'); ?>" class="icon-bg" alt="">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/iconi134-y2ij-200h.png'); ?>" class="icon-img" alt="">
                            <?php elseif ($index === 2): ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1352-143c-1700h.png'); ?>" class="icon-bg" alt="">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1353-b42t-200h.png'); ?>" class="icon-img" alt="">
                            <?php else: ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/background1362-n2wl-1700h.png'); ?>" class="icon-bg" alt="">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/icon1363-5rjr-200h.png'); ?>" class="icon-img" alt="">
                            <?php endif; ?>
                        </div>

                        <div class="value-text">
                            <h4><?php echo esc_html($v[0]); ?></h4>
                            <p><?php echo esc_html($v[1]); ?></p>
                        </div>
                    </div>

                    <?php if ($index < 3): ?>
                        <div class="value-divider"></div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<style>
    /* Base Styles */
    .about-us-section {
        width: 100%;
        padding: 58px 20px 68px;
        max-width: 100%;
        overflow-x: hidden;
    }

    /* Animations */
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

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideInFromTop {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }

        100% {
            background-position: 1000px 0;
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes rotateIn {
        from {
            opacity: 0;
            transform: rotate(-10deg) scale(0.9);
        }

        to {
            opacity: 1;
            transform: rotate(0) scale(1);
        }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            transform: scale(0.3);
        }

        50% {
            opacity: 1;
            transform: scale(1.05);
        }

        70% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
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

    /* About Intro */
    .about-intro-wrapper {
        margin-bottom: 80px;
    }

    .about-title-container {
        max-width: 1320px;
        margin: 0 auto 24px;
        padding: 0 20px;
        animation: fadeInUp 0.8s ease-out;
    }

    .about-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #1E1B39;
        line-height: 1.2;
        margin: 0;
    }

    .title-highlight {
        color: #3C90FC;
        display: inline-block;
        animation: fadeInRight 0.8s ease-out 0.2s both;
    }

    .about-detail-bg {
        width: 100%;
        padding: 24px 20px 116px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        animation: scaleIn 0.8s ease-out 0.3s both;
        position: relative;
        overflow: hidden;
    }

    .about-detail-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(60, 144, 252, 0.05) 0%, rgba(48, 107, 255, 0.05) 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        pointer-events: none;
    }

    .about-detail-bg:hover::before {
        opacity: 1;
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
        animation: fadeInLeft 0.8s ease-out 0.5s both;
    }

    .about-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 700;
        color: #474363;
        line-height: 24px;
        transition: color 0.3s ease, transform 0.3s ease;
        display: inline-block;
    }

    .about-subtitle:hover {
        color: #3C90FC;
        transform: translateX(5px);
    }

    .about-divider {
        width: 200px;
        height: 1px;
        background: linear-gradient(90deg, #474363 0%, rgba(71, 67, 99, 0) 100%);
        margin: 16px 0;
        animation: fadeInLeft 0.6s ease-out 0.6s both;
        position: relative;
        overflow: hidden;
    }

    .about-divider::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(60, 144, 252, 0.6), transparent);
        animation: shimmer 3s infinite;
    }

    .about-description {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0 0 32px;
        animation: fadeInUp 0.8s ease-out 0.7s both;
    }

    .about-cta-buttons {
        display: flex;
        gap: 17px;
        flex-wrap: wrap;
        animation: fadeInUp 0.8s ease-out 0.8s both;
    }

    /* Button Styles - Matching Banner Section */
    .btn-secondary,
    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 64px;
        padding: 14px 30px;
        border-radius: 10px;
        text-decoration: none !important;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        cursor: pointer;
        border: none;
    }

    /* View Solutions Button (Secondary) */
    .btn-secondary {
        min-width: 222px;
        background: #FCFCFC;
        box-shadow:
            0px 10px 10px -3.75px rgba(0, 0, 0, 0.06),
            0px 2.29px 2.29px -2.5px rgba(0, 0, 0, 0.16),
            0px 0.6px 0.6px -1.25px rgba(0, 0, 0, 0.18),
            inset 0px -5px 4px -3.5px rgba(71, 136, 255, 0.3),
            inset 0px -1.14px 0.92px -2.33px rgba(71, 136, 255, 0.6),
            inset 0px -0.3px 0.24px -1.17px rgba(71, 136, 255, 0.67);
    }

    .btn-secondary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(71, 136, 255, 0.15), transparent);
        transition: left 0.6s ease;
    }

    .btn-secondary::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(71, 136, 255, 0.1);
        transform: translate(-50%, -50%);
        transition: width 0.5s ease, height 0.5s ease;
    }

    .btn-secondary:hover::before {
        left: 100%;
    }

    .btn-secondary:hover::after {
        width: 300px;
        height: 300px;
    }

    .btn-secondary span {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 600;
        color: #0A4DBB;
        position: relative;
        z-index: 1;
        transition: color 0.3s ease, transform 0.3s ease;
        white-space: nowrap;
    }

    .btn-secondary:hover {
        transform: translateY(-3px) scale(1.02);
        background: #FFFFFF;
        box-shadow:
            0px 15px 20px -3.75px rgba(0, 0, 0, 0.1),
            0px 3px 3px -2.5px rgba(0, 0, 0, 0.18),
            0px 1px 1px -1.25px rgba(0, 0, 0, 0.2),
            inset 0px -6px 5px -3.5px rgba(71, 136, 255, 0.4),
            inset 0px -1.5px 1px -2.33px rgba(71, 136, 255, 0.7),
            inset 0px -0.4px 0.3px -1.17px rgba(71, 136, 255, 0.75);
    }

    .btn-secondary:hover span {
        color: #0842A8;
        transform: scale(1.05);
    }

    .btn-secondary:active {
        transform: translateY(-1px) scale(1);
        box-shadow:
            0px 8px 8px -3.75px rgba(0, 0, 0, 0.05),
            0px 2px 2px -2.5px rgba(0, 0, 0, 0.14),
            inset 0px -4px 3px -3.5px rgba(71, 136, 255, 0.28);
    }

    /* Contact Us Button (Primary) */
    .btn-primary {
        padding: 20px 36px;
        background: radial-gradient(163.33% 163.33% at 50% 100%,
                rgba(255, 255, 255, 0.45) 0%,
                rgba(0, 0, 0, 0) 100%), #316BFF;
        box-shadow: 0px 10px 19px 0px rgba(49, 107, 255, 0.28);
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
    }

    /* 
    .btn-primary::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            45deg,
            transparent 30%,
            rgba(255, 255, 255, 0.2) 50%,
            transparent 70%
        );
        transform: rotate(45deg);
        animation: shimmer 3s infinite;
    } */

    .btn-primary:hover::before {
        width: 300px;
        height: 300px;
    }

    .btn-primary span {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 600;
        color: #FFFFFF;
        position: relative;
        z-index: 1;
        transition: transform 0.3s ease;
        white-space: nowrap;
    }

    .btn-primary:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0px 15px 30px 0px rgba(49, 107, 255, 0.4);
        background: radial-gradient(163.33% 163.33% at 50% 100%,
                rgba(255, 255, 255, 0.55) 0%,
                rgba(0, 0, 0, 0) 100%), #4178FF;
    }

    .btn-primary:hover span {
        transform: scale(1.05);
    }

    .btn-primary:active {
        transform: translateY(-1px) scale(1);
        box-shadow: 0px 8px 15px 0px rgba(49, 107, 255, 0.25);
    }

    /* Remove underline from links */
    .btn-secondary:focus,
    .btn-secondary:active,
    .btn-secondary:visited,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary:visited {
        text-decoration: none !important;
        outline: none;
    }

    /* Vision & Mission */
    .vision-mission-wrapper {
        max-width: 1320px;
        margin: 0 auto 80px;
        padding: 0 20px;
        display: flex;
        gap: 32px;
    }

    .vision-card,
    .mission-card {
        flex: 1;
        padding: 32px;
        border-radius: 20px;
        background-size: cover;
        background-position: center;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .vision-card::after,
    .mission-card::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.5s ease, transform 0.5s ease;
        pointer-events: none;
    }

    .vision-card:hover::after,
    .mission-card:hover::after {
        opacity: 1;
        transform: translate(-25%, -25%);
    }

    .vision-card {
        background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/tq_y9obmf5xdu-futh-1400w.png'); ?>');
        animation: fadeInLeft 0.8s ease-out 0.2s both;
    }

    .vision-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0px 20px 40px rgba(0, 0, 0, 0.2);
    }

    .mission-card {
        background: #F4F7FC;
        animation: fadeInRight 0.8s ease-out 0.2s both;
    }

    .mission-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0px 20px 40px rgba(60, 144, 252, 0.15);
        background: linear-gradient(135deg, #F4F7FC 0%, #E8F0FE 100%);
    }

    .card-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #474363;
        line-height: 1.2;
        margin: 0 0 24px;
        animation: slideInDown 0.8s ease-out 0.4s both;
    }

    .card-title .title-highlight {
        display: inline-block;
        background: linear-gradient(135deg, #3C90FC, #306BFF);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        background-size: 200% 200%;
        animation: gradientShift 3s ease infinite;
    }

    .card-text {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
        animation: fadeInUp 0.8s ease-out 0.6s both;
        transition: transform 0.3s ease;
    }

    .vision-card:hover .card-text {
        transform: translateY(-3px);
    }

    .mission-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .mission-item {
        display: flex;
        align-items: center;
        gap: 16px;
        opacity: 0;
        animation: fadeInLeft 0.6s ease-out forwards;
    }

    .mission-item:nth-child(1) {
        animation-delay: 0.4s;
    }

    .mission-item:nth-child(2) {
        animation-delay: 0.5s;
    }

    .mission-item:nth-child(3) {
        animation-delay: 0.6s;
    }

    .mission-item:nth-child(4) {
        animation-delay: 0.7s;
    }

    /* .bullet {
        width: 8px;
        height: 8px;
        min-width: 8px;
        background: #007AFF;
        border: 4px solid rgba(0, 122, 255, 0.15);
        border-radius: 50%;
        margin-top: 6px;
        transition: all 0.3s ease;
    } */

    /* .mission-item:hover .bullet {
        transform: scale(1.3);
        background: #0051D5;
        box-shadow: 0 0 15px rgba(0, 122, 255, 0.5);
    } */

    .mission-item p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .mission-item:hover p {
        color: #1E1B39;
        transform: translateX(5px);
    }

    /* Our Values */
    .values-wrapper {
        max-width: 1320px;
        margin: 0 auto;
        padding: 38px 20px 0;
        display: flex;
        gap: 32px;
        align-items: flex-start;
    }

    .values-image {
        flex: 1;
        border-radius: 24px;
        overflow: hidden;
        max-width: 50%;
        animation: fadeInLeft 0.8s ease-out 0.2s both;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        position: relative;
    }

    .values-image::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(60, 144, 252, 0.2), rgba(48, 107, 255, 0.2));
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: 1;
    }

    .values-image:hover::before {
        opacity: 1;
    }

    .values-image:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(60, 144, 252, 0.3);
    }

    .values-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .values-image:hover img {
        transform: scale(1.1) rotate(2deg);
    }

    .values-content {
        flex: 1;
        max-width: 50%;
        animation: fadeInRight 0.8s ease-out 0.2s both;
    }

    .values-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #1E1B39;
        line-height: 1.2;
        margin: 0 0 32px;
        position: relative;
        display: inline-block;
    }

    .values-title .title-highlight {
        background: linear-gradient(135deg, #3C90FC, #306BFF, #3C90FC);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        background-size: 200% auto;
        animation: gradientShift 3s linear infinite;
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
        opacity: 0;
        animation: fadeInUp 0.6s ease-out forwards;
        transition: transform 0.3s ease;
    }

    .value-card:nth-child(1) {
        animation-delay: 0.3s;
    }

    .value-card:nth-child(3) {
        animation-delay: 0.4s;
    }

    .value-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .value-card:nth-child(7) {
        animation-delay: 0.6s;
    }

    .value-card:hover {
        transform: translateX(10px);
    }

    .value-icon {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 100px;
        flex-shrink: 0;
        transition: transform 0.4s ease;
    }

    .value-card:hover .value-icon {
        transform: rotate(10deg) scale(1.1);
    }

    .icon-bg {
        position: absolute;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        transition: transform 0.4s ease;
    }

    .value-card:hover .icon-bg {
        transform: scale(1.15);
    }

    .icon-img {
        position: relative;
        width: 100px;
        height: 67px;
        z-index: 2;
        transition: transform 0.3s ease;
    }

    .value-card:hover .icon-img {
        transform: translateY(-5px);
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
        line-height: 1.3;
        margin: 0;
        transition: color 0.3s ease;
    }

    .value-card:hover .value-text h4 {
        color: #3C90FC;
    }

    .value-text p {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #474363;
        line-height: 24px;
        margin: 0;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .value-card:hover .value-text p {
        color: #1E1B39;
        transform: translateX(5px);
    }

    .value-divider {
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, rgba(229, 231, 235, 0), #E5E7EB, rgba(229, 231, 235, 0));
        transition: background 0.5s ease;
        position: relative;
        overflow: hidden;
    }

    .value-divider::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(60, 144, 252, 0.5), transparent);
        animation: shimmer 4s infinite;
    }

    .homepage-footer {
        top: auto !important;
    }

    /* Tablet Landscape - 1200px */
    @media (max-width: 1200px) {
        .about-us-section {
            padding: 50px 30px 60px;
        }

        .about-title {
            font-size: 42px;
        }

        .card-title,
        .values-title {
            font-size: 42px;
        }

        .vision-card,
        .mission-card {
            padding: 28px;
        }
    }

    /* Tablet - 1024px */
    @media (max-width: 1024px) {
        .about-title {
            font-size: 40px;
        }

        .card-title,
        .values-title {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .vision-mission-wrapper {
            flex-direction: column;
            margin-bottom: 60px;
        }

        .vision-card,
        .mission-card {
            min-height: auto;
        }

        .values-wrapper {
            flex-direction: column;
            gap: 40px;
        }

        .values-image,
        .values-content {
            max-width: 100%;
        }

        .values-image {
            max-height: 400px;
        }
    }

    /* Tablet Portrait - 768px */
    @media (max-width: 768px) {
        .about-us-section {
            padding: 40px 20px 50px;
        }

        .about-title-container {
            padding: 0;
        }

        .about-title {
            font-size: 36px;
        }

        .about-detail-bg {
            padding: 20px 16px 60px;
        }

        .about-subtitle {
            font-size: 15px;
        }

        .about-description {
            font-size: 15px;
            line-height: 22px;
            margin-bottom: 28px;
        }

        .about-cta-buttons {
            flex-direction: column;
            gap: 12px;
        }

        .btn-secondary,
        .btn-primary {
            width: 100%;
            max-width: 100%;
            height: 56px;
        }

        .btn-secondary span,
        .btn-primary span {
            font-size: 18px;
        }

        .card-title,
        .values-title {
            font-size: 36px;
            margin-bottom: 18px;
        }

        .vision-card,
        .mission-card {
            padding: 24px;
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

        .value-card {
            gap: 20px;
        }

        .values-wrapper {
            padding-top: 20px;
        }
    }

    /* Mobile Large - 640px */
    @media (max-width: 640px) {
        .about-title {
            font-size: 32px;
        }

        .card-title,
        .values-title {
            font-size: 32px;
        }

        .about-divider {
            width: 160px;
        }

        .value-icon {
            width: 90px;
            height: 90px;
        }

        .icon-bg {
            width: 90px;
            height: 90px;
        }

        .icon-img {
            width: 90px;
            height: 60px;
        }
    }

    /* Mobile - 480px */
    @media (max-width: 480px) {
        .about-us-section {
            padding: 30px 16px 40px;
        }

        .about-title {
            font-size: 28px;
        }

        .about-detail-bg {
            padding: 16px 12px 50px;
        }

        .about-subtitle {
            font-size: 14px;
            line-height: 20px;
        }

        .about-divider {
            width: 140px;
            margin: 12px 0;
        }

        .about-description {
            font-size: 14px;
            line-height: 20px;
            margin-bottom: 24px;
        }

        .btn-secondary,
        .btn-primary {
            height: 52px;
            padding: 12px 24px;
        }

        .btn-secondary span,
        .btn-primary span {
            font-size: 16px;
        }

        .card-title,
        .values-title {
            font-size: 28px;
            margin-bottom: 16px;
        }

        .vision-card,
        .mission-card {
            padding: 20px;
        }

        .card-text,
        .mission-item p,
        .value-text p {
            font-size: 14px;
            line-height: 20px;
        }

        .mission-list {
            gap: 14px;
        }

        .mission-item {
            gap: 12px;
        }

        .value-icon {
            width: 80px;
            height: 80px;
        }

        .icon-bg {
            width: 80px;
            height: 80px;
        }

        .icon-img {
            width: 80px;
            height: 54px;
        }

        .value-card {
            gap: 16px;
            padding: 20px 0;
        }

        .value-text h4 {
            font-size: 16px;
        }
    }

    /* Mobile Small - 375px */
    @media (max-width: 375px) {
        .about-us-section {
            padding: 24px 12px 36px;
        }

        .about-title {
            font-size: 26px;
        }

        .card-title,
        .values-title {
            font-size: 26px;
        }

        .btn-secondary,
        .btn-primary {
            height: 48px;
            padding: 10px 20px;
        }

        .btn-secondary span,
        .btn-primary span {
            font-size: 15px;
        }

        .value-icon {
            width: 70px;
            height: 70px;
        }

        .icon-bg {
            width: 70px;
            height: 70px;
        }

        .icon-img {
            width: 70px;
            height: 47px;
        }
    }
</style>