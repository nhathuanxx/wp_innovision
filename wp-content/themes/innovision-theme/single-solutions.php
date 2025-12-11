<?php get_header(); ?>
<?php
global $post;
$fields = get_fields($post->ID);

?>
<?php get_template_part('template-parts/page-solutions-single', 'title', [
  'subtitle' => 'We build fast, scalable AI solutions, from LLM platforms to Edge and embedded systems, that help teams ship smarter and innovate faster. Our projects span real-world use cases across industries, proving how modern AI and engineering can create immediate, tangible impact.',
]); ?>
<?php get_template_part('template-parts/vision-state-side', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/vision-statement', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/tech-landscape', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/core-tech', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/dev-process', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/edge-ai', null,  [
  'fields' => $fields
]); ?>

<?php get_footer(); ?>