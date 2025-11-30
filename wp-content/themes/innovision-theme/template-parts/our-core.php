<div class="competencies-section">
    <div class="competencies-container">
        <div class="competencies-header">
            <h2 class="competencies-title">
                <span class="competencies-highlight">Our</span> Core Competencies
            </h2>
            <p class="competencies-subtitle">
                We operate across three complementary pillars to deliver innovation and value.
            </p>
        </div>

        <div class="competencies-cards">
            <!-- AI Products Card -->
            <div class="competency-card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/chatbot1298-rnvc.svg'); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    class="competency-image" />
                <div class="competency-content">
                    <h3 class="competency-title">AI Products<br><span>LLM & Edge AI</span></h3>
                    <p class="competency-description">
                        Pulvinar ultricies non varius vel feugiat fusce suspendisse lorem cursus aenean
                    </p>
                </div>
            </div>

            <!-- Industrial AI & Automation Card -->
            <div class="competency-card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/cyborg31304-ywda.svg'); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    class="competency-image" />
                <div class="competency-content">
                    <h3 class="competency-title">Industrial AI & Automation<br><span>Smart Manufacturing</span></h3>
                    <p class="competency-description">
                        Pulvinar ultricies non varius vel feugiat fusce suspendisse lorem
                    </p>
                </div>

            </div>

            <!-- Software & Firmware Card -->
            <div class="competency-card">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/computer.png'); ?>"
                    alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                    class="competency-image" />
                <div class="competency-content">
                    <h3 class="competency-title">Software & Firmware<br><span>Embedded & Cloud</span></h3>
                    <p class="competency-description">
                        Pulvinar ultricies non varius vel feugiat fusce suspendisse lorem cursus aenean
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    /* Container */
    .competencies-section {
        padding: 134px 0px 172.1px 0px;
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
    }
    .competency-content{
        margin-top: 50px;
    }
    .competencies-title {
        font-family: Montserrat, sans-serif;
        font-weight: 700;
        font-size: 48px;
        color: rgba(30, 27, 57, 1);
    }

    .competencies-highlight {
        color: var(--dl-color-neutralcolors-color800);
    }

    .competencies-subtitle {
        font-family: Inter, sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 42px;
        color: var(--dl-color-neutralcolors-neutral700);
        margin-top: 12px;
    }

    /* Cards Container */
    .competencies-cards {
        display: flex;
        gap: 32px;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
    }

    /* Individual Card */
    .competency-card {
        background-color: rgba(242, 247, 254, 1);
        border-radius: 24px;
        width: 100%;
        max-width: 419px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 32px;
        position: relative;
        text-align: center;
    }

    .competency-title {
        font-family: Inter, sans-serif;
        font-weight: 700;
        font-size: 24px;
        line-height: 36px;
        color: rgba(30, 27, 57, 1);
        margin-bottom: 8px;
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

    }

    .competency-screens {
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
        justify-content: center;
        margin-top: 20px;
    }

    .competency-screens img {
        max-width: 100%;
        height: auto;
    }
</style>