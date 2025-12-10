<?php get_header(); ?>
<?php
global $post;
$fields = get_fields($post->ID);

?>
<?php get_template_part('template-parts/page-portfolio-single', 'title', [
  'subtitle' => 'We build fast, scalable AI solutions, from LLM platforms to Edge and embedded systems, that help teams ship smarter and innovate faster. Our projects span real-world use cases across industries, proving how modern AI and engineering can create immediate, tangible impact.',
]); ?>
<?php get_template_part('template-parts/problem-solutions', null, [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/input-output', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/project-total', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/project-total-social', null,  [
  'fields' => $fields
]); ?>


<?php get_footer(); ?>