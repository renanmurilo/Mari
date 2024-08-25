<?php
// Template Name: Pacientes
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <main>
            <?php get_template_part('template-parts/banners', 'banner'); ?>

            <?php get_template_part('template-parts/sobre-pacientes', 'pacientes'); ?>

            <?php get_template_part('template-parts/procedimentos', 'procedimentos'); ?>

            <?php get_template_part('template-parts/chamada-medicos-empresas', 'chamada'); ?>
        </main>
<?php }
} ?>

<?php get_footer(); ?>