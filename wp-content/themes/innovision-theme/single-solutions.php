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
// echo "<script>console.log(" . json_encode($fields) . ");</script>";

?>
<?php get_template_part('template-parts/page-solutions-single', 'title', [
  'subtitle' => $description,
  'bg' => $bg
]); ?>
<?php get_template_part('template-parts/vision-state-side', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/vision-statement', null,  [
  'fields' => $fields
]); ?>
<?php get_template_part('template-parts/software-dev', null,  [
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