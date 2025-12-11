<?php
$fields = get_fields();
if (empty($fields['sw_dev_enable'])) return;

$cards = $fields['sw_dev_cards'] ?? [];
?>
<div class="software-dev">
    <h2 class="software-dev-title">
        <span class="highlight">Software</span>
        <span class="title-highlight">Development</span>
    </h2>

    <div class="feature-cards">

        <?php foreach ($cards as $card): ?>
            <div class="feature-card <?php echo esc_attr($card['card_color']); ?>">

                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo esc_html($card['card_title']); ?>
                    </h3>
                </div>

                <div class="card-body">
                    <div class="feature-list">

                        <?php foreach ($card['features'] as $feature): ?>
                            <div class="feature-item">
                                <?php if (!empty($feature['icon']['url'])): ?>
                                    <img
                                        src="<?= esc_url($feature['icon']['url']); ?>"
                                        alt=""
                                        class="check-icon" />
                                <?php else: ?>
                                    <img
                                        src="<?= esc_url(get_template_directory_uri() . '/assets/images/innovision/svgmargin1973-1sjho.svg'); ?>"
                                        alt=""
                                        class="check-icon" />
                                <?php endif; ?>

                                <p class="feature-text">
                                    <?php echo esc_html($feature['text']); ?>
                                </p>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</div>

<style>
    .software-dev {
        max-width: 1321px;
        margin: 0 auto;
        padding: 60px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 40px;
    }

    .software-dev-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #000;
        text-align: center;
        margin: 0;
    }

    .software-dev-title .highlight {
        color: #000;
    }

    /* Process Steps */
    .process-steps {
        display: flex;
        gap: 32px;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        flex-wrap: nowrap;
    }

    .step-item {
        width: 193px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
    }

    .step-icon {
        width: 160px;
        height: 160px;
        object-fit: contain;
    }

    .step-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
    }

    .step-title {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
        font-weight: 700;
        color: #3C90FC;
        text-align: center;
        margin: 0;
    }

    .step-desc {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #474363;
        text-align: center;
        margin: 0;
        line-height: 1.5;
    }

    /* Feature Cards */
    .feature-cards {
        display: flex;
        gap: 32px;
        width: 100%;
    }

    .software-dev .feature-card {
        flex: 1;
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .software-dev .card-bold-blue {
        background: linear-gradient(115.12deg, #084BDD 3.62%, #59B5F0 77.9%);

    }

    .software-dev .card-blue {
        background: linear-gradient(115.12deg, #1085F2 3.62%, #7BC9FC 77.9%);

    }

    .software-dev .card-cyan {
        background: linear-gradient(117.86deg, #29AAF3 1.82%, #7ECDFF 79.22%);
    }

    .software-dev .card-light-blue {
        background: linear-gradient(118.91deg, #09B9F0 3.1%, #8FE4FF 77.63%);

    }

    .software-dev .card-header {
        padding: 32px 32px 25px 24px;
    }

    .software-dev .feature-cards .card-title {
        font-family: 'Inter', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        margin: 0;
    }

    .software-dev .card-body {
        border: 1px solid #fff;
        border-radius: 12px;
        flex: 1;
    }

    .software-dev .card-bold-blue .card-body {
        background: linear-gradient(180deg, rgba(22, 100, 255, 0.2) 0%, rgba(22, 100, 255, 0) 33.08%), linear-gradient(0deg, #FFFFFF, #FFFFFF);
        border: 1px solid #FFFFFF;

    }

    .software-dev .card-blue .card-body {
        background:
            linear-gradient(180deg, rgba(22, 100, 255, 0.2) 0%, rgba(22, 100, 255, 0) 33.08%),
            linear-gradient(0deg, #FFFFFF, #FFFFFF);
        border: 1px solid #FFFFFF;

    }

    .software-dev .card-cyan .card-body {
        background: linear-gradient(180deg, rgba(97, 198, 242, 0.2) 0%, rgba(97, 198, 242, 0) 33.08%), linear-gradient(0deg, #FFFFFF, #FFFFFF);

    }

    .software-dev .card-light-blue .card-body {
        background: linear-gradient(180deg, rgba(97, 198, 242, 0.2) 0%, rgba(97, 198, 242, 0) 33.08%), linear-gradient(0deg, #FFFFFF, #FFFFFF);

    }

    .feature-list {
        /* padding: 32px 24px; */
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .check-icon {
        width: 22px;
        height: 22px;
        flex-shrink: 0;
    }

    .feature-text {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        line-height: 22px;
        color: #4E5969;
        margin: 0;
        flex: 1;
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .software-dev {
            max-width: 100%;
            padding: 60px 40px;
        }
    }

    @media (max-width: 1200px) {
        .process-steps {
            justify-content: center;
        }
    }

    @media (max-width: 1024px) {
        .software-dev {
            padding: 40px 20px;
        }

        .software-dev-title {
            font-size: 36px;
        }

        .process-steps {
            gap: 20px;
        }

        .step-item {
            width: 150px;
        }

        .step-icon {
            width: 120px;
            height: 120px;
        }

        .feature-cards {
            flex-direction: column;
        }
    }

    @media (max-width: 768px) {
        .software-dev-title {
            font-size: 28px;
        }

        .process-steps {
            gap: 16px;
        }

        .step-item {
            width: 120px;
        }

        .step-icon {
            width: 100px;
            height: 100px;
        }

        .step-title {
            font-size: 14px;
        }

        .step-desc {
            font-size: 12px;
        }

        .card-title {
            font-size: 18px;
        }

        .feature-text {
            font-size: 13px;
        }
    }

    @media (max-width: 640px) {
        .process-steps {
            flex-direction: column;
        }

        .step-item {
            width: 100%;
            max-width: 200px;
        }
    }
</style>