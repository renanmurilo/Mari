<?php
// Template Name: Radiologia Intervencionista
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <main>
            <?php get_template_part('template-parts/banners', 'banner'); ?>
        </main>
<?php }
} ?>

<?php get_footer(); ?>