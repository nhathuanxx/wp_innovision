 <div class="competencies-section">
        <div class="competencies-container">
            <div class="competencies-header">
                <h2 class="competencies-title">
                    <span class="competencies-highlight">Our</span> <span class="title-highlight">Core Competencies</span>
                </h2>
                <p class="competencies-subtitle">
                    We operate across three complementary pillars to deliver innovation and value.
                </p>
            </div>

            <div class="competencies-cards">
                <!-- AI Products Card -->
                <div class="competency-card" data-aos="fade-up" data-aos-delay="0">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/chatbot1298-rnvc.svg'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="competency-image" />
                    <div class="competency-content">
                        <h3 class="competency-title">AI Products<br><span>LLM & Edge AI</span></h3>
                        <p class="competency-description">
                            Enterprise LLM and edge AI for intelligent automation.
                        </p>
                    </div>
                </div>

                <!-- Industrial AI & Automation Card -->
                <div class="competency-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/cyborg31304-ywda.svg'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="competency-image" />
                    <div class="competency-content">
                        <h3 class="competency-title">Industrial AI & Automation<br><span>Smart Manufacturing</span></h3>
                        <p class="competency-description">
                            Smart vision, predictive maintenance, and seamless factory integration.
                        </p>
                    </div>
                </div>

                <!-- Software & Firmware Card -->
                <div class="competency-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/computer.png'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                        class="competency-image" />
                    <div class="competency-content">
                        <h3 class="competency-title">Software & Firmware<br><span>Embedded & Cloud</span></h3>
                        <p class="competency-description">
                            End-to-end software from devices to cloud platforms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
     .competencies-section {
            padding: 134px 20px 172.1px 20px;
            background-color: #fff;
        }

        .competencies-container {
            max-width: 1320px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Header */
        .competencies-header {
            text-align: center;
            margin-bottom: 126.7px;
            opacity: 0;
            animation: fadeInDown 0.8s ease-out forwards;
        }

        .competencies-title {
            font-family: Montserrat, sans-serif;
            font-weight: 700;
            font-size: 48px;
            color: rgba(30, 27, 57, 1);
            line-height: 1.2;
        }

        .competencies-highlight {
            color: #1E1B39;
        }

        .competencies-subtitle {
            font-family: Inter, sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 42px;
            color: #474363;
            margin-top: 12px;
        }

        /* Cards Container */
        .competencies-cards {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
            width: 100%;
        }

        /* Individual Card */
        .competency-card {
            background-color: rgba(242, 247, 254, 1);
            border-radius: 24px;
            flex: 1;
            min-width: 280px;
            max-width: 419px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 32px;
            position: relative;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            transform: translateY(30px);
        }

        .competency-card[data-aos="fade-up"] {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .competency-card[data-aos-delay="0"] {
            animation-delay: 0.2s;
        }

        .competency-card[data-aos-delay="100"] {
            animation-delay: 0.4s;
        }

        .competency-card[data-aos-delay="200"] {
            animation-delay: 0.6s;
        }

        .competency-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .competency-card:hover .competency-image {
            transform: scale(1.1) rotate(5deg);
        }

        .competency-content {
            margin-top: 50px;
        }

        .competency-title {
            font-family: Inter, sans-serif;
            font-weight: 700;
            font-size: 24px;
            line-height: 36px;
            color: rgba(30, 27, 57, 1);
            margin-bottom: 8px;
        }

        .competency-title span {
            display: inline;
        }

        .competency-description {
            font-family: Inter, sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: rgba(71, 67, 99, 1);
        }

        /* Images */
        .competency-image {
            position: absolute;
            top: -50px;
            width: 100px;
            height: 100px;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

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

        /* Responsive Design */
        @media (max-width: 1200px) {
            .competencies-cards {
                gap: 24px;
            }

            .competency-card {
                max-width: 380px;
            }
        }

        @media (max-width: 992px) {
            .competencies-section {
                padding: 80px 20px 100px 20px;
            }

            .competencies-header {
                margin-bottom: 80px;
            }

            .competencies-title {
                font-size: 40px;
            }

            .competencies-cards {
                gap: 60px;
            }

            .competency-card {
                max-width: 100%;
                min-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .competencies-section {
                padding: 60px 16px 80px 16px;
            }

            .competencies-header {
                margin-bottom: 60px;
            }

            .competencies-title {
                font-size: 32px;
            }

            .competencies-subtitle {
                font-size: 14px;
                line-height: 24px;
            }

            .competencies-cards {
                flex-direction: column;
                gap: 70px;
            }

            .competency-card {
                min-width: 100%;
                padding: 24px;
            }

            .competency-title {
                font-size: 20px;
                line-height: 30px;
            }

            .competency-description {
                font-size: 14px;
                line-height: 22px;
            }
        }

        @media (max-width: 480px) {
            .competencies-title {
                font-size: 28px;
            }

            .competency-image {
                width: 80px;
                height: 80px;
                top: -40px;
            }

            .competency-card {
                padding: 20px;
            }

            .competency-content {
                margin-top: 40px;
            }

            .competency-title {
                font-size: 18px;
                line-height: 26px;
            }
        }
</style>