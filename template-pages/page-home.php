<?php
// Template Name: Home
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <main>
            <section class="pageHome__banner">
                <div class="banner__content">
                    <img class="banner__desktop" src="<?php the_field('banner_desktop'); ?>" alt="Banner" width="1920" height="531" />
                    <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="" width="" height="" />

                    <div class="shell">
                        <div class="banner__description">
                            <h1 class="banner__h1"><?php the_field('titulo'); ?></h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pageHome__radiologia">
                <div class="shell">
                    <div class="radiologia__content">
                        <div class="radiologia__image">
                            <img src="<?php the_field('imagem_o_que_e'); ?>" alt="Imagem" width="" height="" />
                        </div>

                        <div class="radiologia__description">
                            <h2 class="radiologia__h2"><?php the_field('titulo_o_que_e'); ?></h2>

                            <div class="radiologia__text">
                                <?php the_field('texto_o_que_e'); ?>
                            </div>

                            <div class="radiologia__buttons">
                                <a href="" class="btn btn__primary">Saiba mais</a>
                                <a href="" class="btn btn__primary">Quem somos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/home/beneficios', 'beneficios'); ?>

            <?php get_template_part('template-parts/home/procedimentos', 'procedimentos'); ?>

            <?php get_template_part('template-parts/chamada-medicos-empresas', 'chamada'); ?>
        </main>
<?php }
} ?>

<?php get_footer(); ?>