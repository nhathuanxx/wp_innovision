<?php
/*
* Template Name: Home Page
*/
get_header(); ?>
<?php $lang = pll_current_language('slug'); ?>
<?php get_template_part('template-parts/banner-section', 'title'); ?>
<?php get_template_part('template-parts/our-core'); ?>
<?php get_template_part('template-parts/home-we-work'); ?>
<?php get_template_part('template-parts/key-achievements'); ?>
<?php get_template_part('template-parts/client-partner'); ?>


<?php get_footer(); ?>