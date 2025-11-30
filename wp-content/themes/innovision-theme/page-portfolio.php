<?php

/**
 * Template Name: Portfolio
 */
get_header();
$lang = pll_current_language('slug'); // vi / en
?>
<?php get_template_part('template-parts/page', 'title', [
  'subtitle' => 'We build fast, scalable AI solutions, from LLM platforms to Edge and embedded systems, that help teams ship smarter and innovate faster.Our projects span real-world use cases across industries, proving how modern AI and engineering can create immediate, tangible impact.',
]); ?>
<div class="portfolio-container">
  <div class="frame1618871146-container1">
    <div class="frame1618871146-frame16188711461">
      <div class="frame1618871146-frame1618871143">
        <span class="frame1618871146-text">All Project</span>
      </div>
      <div class="frame1618871146-frame16188711462">
        <span class="frame1618871146-text">AI Products</span>
      </div>
      <div class="frame1618871146-frame1618871144">
        <span class="frame1618871146-text">
          Industrial AI &amp; Automation
        </span>
      </div>
      <div class="frame1618871146-frame1618871145">
        <span class="frame1618871146-text">
          Software &amp; Firmware Development
        </span>
      </div>
    </div>
  </div>
  <div class="frame1618871142-container1">
    <div class="frame1618871142-frame16188711421">

      <div class="frame1618871142-frame1618871136">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931407-zbxg-300h.png'); ?>"
          alt="Rectangle22931407"
          class="frame1618871142-rectangle22931">
        <span class="frame1618871142-text10">
          Real Estate Data Assistant (LLM + RAG)
        </span>
      </div>

      <div class="frame1618871142-frame1618871137">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931417-n85e-300h.png'); ?>"
          alt="Rectangle22931417"
          class="frame1618871142-rectangle22932">
        <span class="frame1618871142-text11">
          Fintech Transaction Verification AI
        </span>
      </div>

      <div class="frame1618871142-frame1618871138">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931417-by9h-300h.png'); ?>"
          alt="Rectangle22931417"
          class="frame1618871142-rectangle22933">
        <span class="frame1618871142-text12">Government Document AI</span>
      </div>

      <div class="frame1618871142-frame1618871139">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931417-zh5f-300h.png'); ?>"
          alt="Rectangle22931417"
          class="frame1618871142-rectangle22934">
        <span class="frame1618871142-text13">Marketing Content Assistant</span>
      </div>

      <div class="frame1618871142-frame1618871141">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-bccc-300h.png'); ?>"
          alt="Rectangle22931604"
          class="frame1618871142-rectangle22935">
        <span class="frame1618871142-text14">
          Qualcomm QCS6490 Vision AI
        </span>
      </div>

      <div class="frame1618871142-frame16188711422">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-p2x8-300h.png'); ?>"
          alt="Rectangle22931604"
          class="frame1618871142-rectangle22936">
        <span class="frame1618871142-text15">NXP i.MX Edge Inference</span>
      </div>

      <div class="frame1618871142-frame1618871143">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-5se7-300h.png'); ?>"
          alt="Rectangle22931604"
          class="frame1618871142-rectangle22937">
        <span class="frame1618871142-text16">
          Predictive Maintenance (TinyML)
        </span>
      </div>

      <div class="frame1618871142-frame1618871144">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-zp7og-300h.png'); ?>"
          alt="Rectangle22931604"
          class="frame1618871142-rectangle22938">
        <span class="frame1618871142-text17">Edge HMI, Edge Gateway</span>
      </div>

      <div class="frame1618871142-frame1618871140">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22931604-p8p-300h.png'); ?>"
          alt="Rectangle22931604"
          class="frame1618871142-rectangle22939">
        <span class="frame1618871142-text18">Custom SoM Design</span>
      </div>

      <div class="frame1618871142-frame95233">
        <div class="frame1618871142-framelemlist-buttonnew">
          <span class="frame1618871142-text19">Load more</span>
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/rectangle22921604-kf22-200h.png'); ?>"
            alt="Rectangle22921604"
            class="frame1618871142-rectangle2292">
        </div>
      </div>

    </div>

  </div>
</div>


<?php get_footer(); ?>

<style>
  .portfolio-container {
    padding: 49px 0px 46.94px 0px;
    display: flex;
    flex-direction: column;
    gap: 33px;
  }

  .frame1618871142-container1 {
    width: 100%;
    display: flex;
    overflow: auto;
    align-items: center;
    flex-direction: column;
  }

  .frame1618871142-frame16188711421 {
    gap: 32px;
    width: 1321px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    flex-shrink: 0;
    justify-content: center;
  }

  .frame1618871142-frame1618871136 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22931 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text10 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871137 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22932 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text11 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871138 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22933 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text12 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871139 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22934 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text13 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871141 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22935 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text14 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame16188711422 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22936 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text15 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871143 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22937 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text16 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871144 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22938 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text17 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame1618871140 {
    gap: 16px;
    width: 419px;
    display: flex;
    padding: 16px;
    box-shadow: 0px 1px 4px 0px rgba(12, 12, 13, 0.10000000149011612);
    align-items: center;
    flex-shrink: 0;
    border-radius: 16px;
    flex-direction: column;
    justify-content: center;
    background-color: rgba(255, 255, 255, 1);
  }

  .frame1618871142-rectangle22939 {
    width: auto;
    height: 218px;
    align-self: stretch;
    border-radius: 16px;
  }

  .frame1618871142-text18 {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Semi Bold;
    text-align: left;
    font-family: Inter;
    font-weight: 700;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-frame95233 {
    gap: 10px;
    display: flex;
    align-items: center;
    flex-direction: column;
  }

  .frame1618871142-framelemlist-buttonnew {
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

  .frame1618871142-text19 {
    color: white;
    height: auto;
    z-index: 1;
    font-size: 20px;
    font-style: Semi Bold;
    text-align: center;
    font-family: Inter;
    font-weight: 700;
    line-height: normal;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871142-rectangle2292 {
    top: 1px;
    left: 1px;
    width: 172px;
    height: 62px;
    z-index: 3;
    position: absolute;
    border-color: rgba(89, 135, 255, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 9px;
  }

  .frame1618871146-container1 {
    width: 100%;
    display: flex;
    overflow: auto;
    align-items: center;
    flex-direction: column;
  }

  .frame1618871146-frame16188711461 {
    gap: 16px;
    width: 801px;
    height: auto;
    display: flex;
    padding: 8px;
    align-items: center;
    border-color: rgba(118, 118, 128, 0.11999999731779099);
    border-style: solid;
    border-width: 1px;
    border-radius: 8px;
  }

  .frame1618871146-frame1618871143 {
    gap: 10px;
    display: flex;
    padding: 10px 16px;
    align-items: center;
    border-radius: 8px;
    justify-content: center;
    background-color: rgba(48, 106, 255, 1);
  }

  .frame1618871146-text {
    color: rgba(255, 255, 255, 1);
    height: auto;
    white-space: nowrap;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871146-frame16188711462 {
    gap: 10px;
    display: flex;
    padding: 10px 16px;
    align-items: center;
    border-radius: 8px;
    justify-content: center;
    background-color: rgba(118, 118, 128, 0.11999999731779099);
  }

  .frame1618871146-text {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871146-frame1618871144 {
    gap: 10px;
    display: flex;
    padding: 10px 16px;
    align-items: center;
    border-radius: 8px;
    justify-content: center;
    background-color: rgba(118, 118, 128, 0.11999999731779099);
  }

  .frame1618871146-text {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .frame1618871146-frame1618871145 {
    gap: 10px;
    display: flex;
    padding: 10px 16px;
    align-items: center;
    border-radius: 8px;
    justify-content: center;
    background-color: rgba(118, 118, 128, 0.11999999731779099);
  }

  .frame1618871146-text {
    color: rgba(71, 67, 99, 1);
    height: auto;
    font-size: 16px;
    font-style: Regular;
    text-align: left;
    font-family: Inter;
    font-weight: 400;
    line-height: 28px;
    font-stretch: normal;
    text-decoration: none;
  }

  .homepage-footer {
    top: auto !important;
  }
</style>