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


<?php get_footer(); ?>

<style>
  .homepage-footer {
    top: auto !important;
  }
</style>