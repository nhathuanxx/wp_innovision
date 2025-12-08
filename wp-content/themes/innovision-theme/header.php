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
  <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
</head>

<body <?php body_class(); ?>>

  <header class="header-container">
    <div class="header-content">
      <div class="header-detail">
        <!-- Logo with Home Link -->
        <a href="https://innovision.amintek.com.vn/home/" class="logo-link">
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/logo.svg'); ?>"
            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
            class="header-logo" />
        </a>

        <!-- Desktop Navigation -->
        <nav class="desktop-nav">
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
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay">
      <div class="mobile-nav-container">
        <div class="mobile-nav-header">
          <a href="https://innovision.amintek.com.vn/home/" class="mobile-logo-link">
            <img
              src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovision/logo.svg'); ?>"
              alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
              class="mobile-logo" />
          </a>
          <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
          </button>
        </div>

        <nav class="mobile-nav">
          <?php
          if (has_nav_menu('main-menu')) {
            wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'container'      => false,
              'menu_class'     => 'mobile-menu',
              'depth'          => 3,
              'fallback_cb'    => false,
            ));
          }
          ?>
        </nav>
      </div>
    </div>
  </header>

  <style>
    /* Header Container */
    .header-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      padding: 20px;
    }

    .header-content {
      max-width: 1320px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-detail {
      display: flex;
      width: 100%;
      max-width: 1320px;
      align-items: center;
      justify-content: space-between;
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.02);
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
    }

    .header-detail:hover {
      background: rgba(255, 255, 255, 0.05);
      border-color: rgba(255, 255, 255, 0.12);
    }

    /* Logo */
    .logo-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      transition: transform 0.3s ease;
    }

    .logo-link:hover {
      transform: scale(1.05);
    }

    .header-logo {
      height: 36px;
      width: auto;
    }

    /* Desktop Navigation */
    .desktop-nav {
      display: flex;
      align-items: center;
    }

    .main-menu {
      list-style: none;
      display: flex;
      gap: 24px;
      margin: 0;
      padding: 0;
    }

    .main-menu li.menu-item>a {
      display: flex;
      align-items: center;
      color: rgba(0, 0, 0, 0.9);
      font-size: 14px;
      font-weight: 600;
      font-family: 'Montserrat', sans-serif;
      line-height: 20px;
      text-decoration: none;
      padding: 8px 12px;
      border-radius: 8px;
      transition: all 0.3s ease;
      position: relative;
    }

    .main-menu li.menu-item>a:hover {
      color: #3C90FC;
      /* background: rgba(60, 144, 252, 0.08); */
    }

    .main-menu li.menu-item>a::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      width: 0;
      height: 2px;
      background: #3C90FC;
      transform: translateX(-50%);
      transition: width 0.3s ease;
    }

    .main-menu li.menu-item>a:hover::after {
      width: 80%;
    }

    /* Active menu */
    .main-menu li.current-menu-item>a,
    .main-menu li.current-menu-ancestor>a {
      color: #3C90FC;
      /* background: rgba(60, 144, 252, 0.1); */
    }

    .main-menu li.current-menu-item>a::after,
    .main-menu li.current-menu-ancestor>a::after {
      width: 80%;
    }

    /* Mobile Menu Toggle */
    .mobile-menu-toggle {
      display: none;
      flex-direction: column;
      gap: 5px;
      width: 32px;
      height: 32px;
      padding: 4px;
      background: transparent;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .hamburger-line {
      width: 100%;
      height: 2px;
      background: #000;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    .mobile-menu-toggle:hover .hamburger-line {
      background: #3C90FC;
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(1) {
      transform: translateY(7px) rotate(45deg);
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(2) {
      opacity: 0;
    }

    .mobile-menu-toggle.active .hamburger-line:nth-child(3) {
      transform: translateY(-7px) rotate(-45deg);
    }

    /* Mobile Navigation Overlay */
    .mobile-nav-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(8px);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 9999;
    }

    .mobile-nav-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .mobile-nav-container {
      position: absolute;
      top: 0;
      right: 0;
      width: 100%;
      max-width: 400px;
      height: 100vh;
      background: white;
      transform: translateX(100%);
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
    }

    .mobile-nav-overlay.active .mobile-nav-container {
      transform: translateX(0);
    }

    /* Mobile Nav Header */
    .mobile-nav-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      border-bottom: 1px solid #E5E7EB;
    }

    .mobile-logo-link {
      display: flex;
      align-items: center;
    }

    .mobile-logo {
      height: 32px;
      width: auto;
    }

    .mobile-menu-close {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #F3F4F6;
      border: none;
      border-radius: 50%;
      cursor: pointer;
      transition: all 0.3s ease;
      color: #000;
    }

    .mobile-menu-close:hover {
      background: #E5E7EB;
      transform: rotate(90deg);
    }

    /* Mobile Navigation */
    .mobile-nav {
      padding: 20px;
      flex: 1;
    }

    .mobile-menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .mobile-menu li.menu-item>a {
      display: flex;
      align-items: center;
      padding: 16px 20px;
      color: rgba(0, 0, 0, 0.9);
      font-size: 16px;
      font-weight: 600;
      font-family: 'Montserrat', sans-serif;
      text-decoration: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .mobile-menu li.menu-item>a:hover {
      background: rgba(60, 144, 252, 0.08);
      color: #3C90FC;
      transform: translateX(8px);
    }

    .mobile-menu li.current-menu-item>a,
    .mobile-menu li.current-menu-ancestor>a {
      background: rgba(60, 144, 252, 0.1);
      color: #3C90FC;
      font-weight: 700;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .header-detail {
        padding: 14px 20px;
      }

      .main-menu {
        gap: 16px;
      }

      .main-menu li.menu-item>a {
        font-size: 13px;
        padding: 6px 10px;
      }
    }

    @media (max-width: 768px) {
      .header-container {
        padding: 16px;
      }

      .desktop-nav {
        display: none;
      }

      .mobile-menu-toggle {
        display: flex;
      }

      .header-detail {
        padding: 12px 20px;
      }

      .header-logo {
        height: 28px;
      }
    }

    @media (max-width: 480px) {
      .header-container {
        padding: 12px;
      }

      .header-detail {
        padding: 10px 16px;
      }

      .mobile-nav-container {
        max-width: 100%;
      }
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const mobileMenuToggle = document.getElementById('mobileMenuToggle');
      const mobileMenuClose = document.getElementById('mobileMenuClose');
      const mobileNavOverlay = document.getElementById('mobileNavOverlay');
      const body = document.body;

      function openMobileMenu() {
        mobileNavOverlay.classList.add('active');
        mobileMenuToggle.classList.add('active');
        body.style.overflow = 'hidden';
      }

      function closeMobileMenu() {
        mobileNavOverlay.classList.remove('active');
        mobileMenuToggle.classList.remove('active');
        body.style.overflow = '';
      }

      // Toggle mobile menu
      mobileMenuToggle.addEventListener('click', function() {
        if (mobileNavOverlay.classList.contains('active')) {
          closeMobileMenu();
        } else {
          openMobileMenu();
        }
      });

      // Close mobile menu
      mobileMenuClose.addEventListener('click', closeMobileMenu);

      // Close when clicking overlay
      mobileNavOverlay.addEventListener('click', function(e) {
        if (e.target === mobileNavOverlay) {
          closeMobileMenu();
        }
      });

      // Close when clicking menu links
      const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
      mobileMenuLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
      });

      // Close on escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileNavOverlay.classList.contains('active')) {
          closeMobileMenu();
        }
      });
    });
  </script>