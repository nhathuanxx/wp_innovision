<?php get_header(); ?>
<?php
global $post;
$fields = get_fields($post->ID);
$description = '';
if (has_excerpt($post->ID)) {
    $description = get_the_excerpt($post->ID);
} elseif (!empty($post->post_content)) {
    $description = wp_trim_words($post->post_content, 30, '...');
}
$bg = $fields['custom_post_background_image']['url'];
?>
<?php get_template_part('template-parts/page-portfolio-single', 'title', [
  'subtitle' => $description,
  'bg' => $bg
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