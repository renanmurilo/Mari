<?php
// Template Name: Procedimentos
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <main>
            <?php get_template_part('template-parts/banners', 'banner'); ?>

            <section class="pageProcedimentos">
                <div class="shell">
                    <div class="pageProcedimentos__content">
                        <h2 class="pageProcedimentos__h2"><?php the_field('titulo_procedimento'); ?></h2>
                        <h3 class="pageProcedimentos__h3"><?php the_field('sub_titulo_procedimentos'); ?></h3>

                        <div class="procedimentos__inner">
                            <?php if (have_rows('procedimentos')) : while (have_rows('procedimentos')) : the_row(); ?>
                                    <div class="procedimento">
                                        <h2 class="procedimento__h2"><?php the_sub_field('titulo'); ?></h2>

                                        <div class="procedimento__text">
                                            <?php the_sub_field('texto'); ?>
                                        </div>
                                    </div>
                            <?php endwhile;
                            else : endif; ?>
                        </div>

                        <a href="" class="btn btn__primary">Saiba mais</a>
                    </div>
                </div>
            </section>

            <section class="pageProcedimentos__metodo">
                <div class="shell">
                    <div class="metodo__content">
                        <h2 class="metodo__h2"><?php the_field('titulo_metodos'); ?></h2>

                        <div class="metodos">
                            <?php if (have_rows('metodos')) : while (have_rows('metodos')) : the_row(); ?>
                                    <div class="metodo">
                                        <div class="image">
                                            <img src="<?php the_sub_field('icone'); ?>" alt="Icone" width="" height="" />
                                        </div>

                                        <div class="description">
                                            <h2 class="title"><?php the_sub_field('titulo'); ?></h2>
                                            <div class="text">
                                                <?php the_sub_field('texto'); ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pageProcedimentos__tratamentos">
                <div class="shell">
                    <div class="tratamentos__content">
                        <h2 class="tratamentos__h2"><?php the_field('titulo_tratamentos'); ?></h2>

                        <div class="tratamentos">
                            <?php if (have_rows('tratamentos')) : while (have_rows('tratamentos')) : the_row(); ?>
                                    <div class="tratamento">
                                        <div class="image">
                                            <img src="<?php the_sub_field('icone'); ?>" alt="Icone" width="" height="" />
                                        </div>

                                        <div class="description">
                                            <h2 class="title"><?php the_sub_field('titulo'); ?></h2>
                                            <div class="text">
                                                <?php the_sub_field('texto'); ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php endwhile;
                            else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/chamada-medicos-empresas', 'chamada'); ?>
        </main>
<?php }
} ?>

<?php get_footer(); ?>