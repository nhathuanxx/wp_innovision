<?php

/**
 * Header template for Innovision Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
  <?php wp_head(); ?>
  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      -webkit-font-smoothing: antialiased;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
      color: inherit;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    pre {
      white-space: normal;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    details {
      display: block;
      margin: 0;
      padding: 0;
    }

    summary::-webkit-details-marker {
      display: none;
    }

    [data-thq="accordion"] [data-thq="accordion-content"] {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-in-out;
      padding: 0;
    }

    [data-thq="accordion"] details[data-thq="accordion-trigger"][open]+[data-thq="accordion-content"] {
      max-height: 1000vh;
    }

    details[data-thq="accordion-trigger"][open] summary [data-thq="accordion-icon"] {
      transform: rotate(180deg);
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-theme-neutral-dark);
      background: var(--dl-color-theme-neutral-light);

      fill: var(--dl-color-theme-neutral-dark);
    }
  </style>
  <link
    rel="stylesheet"
    href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    data-tag="font" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body <?php body_class(); ?>>

  <div class="header-container">
    <div class="header-content">
      <div class="header-detail"><img
          src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/asset14x11240-j6w-200h.png'); ?>"
          alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
          class="homepage-asset14x11" />
        <div class="homepage-frame1618871097">
          <?php
          if (has_nav_menu('main-menu')) {
            wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'container'      => false,
              'menu_class'     => 'main-menu',
              'depth'          => 3,
              'fallback_cb'    => false,
            ));
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <style>
    .header-detail {
      display: flex;
      z-index: 1;
      flex-grow: 1;
      align-items: center;
      border-color: rgba(255, 255, 255, 0.07999999821186066);
      border-style: solid;
      border-width: 1px;
      border-radius: 999px;
      justify-content: space-between;
      background-color: rgba(255, 255, 255, 0.019999999552965164);
    }

    .main-menu li.menu-item>a {
      display: flex;
      align-items: flex-start;
      color: rgba(0, 0, 0, 0.9);
      font-size: 14px;
      font-weight: 600;
      font-family: Montserrat;
      line-height: 20px;
      text-decoration: none;
    }

    /* Active menu */
    .main-menu li.current-menu-item>a,
    .main-menu li.current-menu-ancestor>a {
      font-style: semi-bold;
      color: #3C90FC;
    }

    #menu-main-menu {
      list-style: none;
      display: flex;
      gap: 24px;
    }

    .header-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

    .header-content {
      max-width: 1320px;
      margin: 0px auto;
      height: 109px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
  </style>