<section class="pageHome__procedimentos">
    <div class="shell">
        <div class="procedimentos__content">
            <h2 class="procedimentos__h2"><?php the_field('titulo_procedimentos'); ?></h2>

            <div class="procedimentos__inner">
                <?php if (have_rows('procedimentos')) : while (have_rows('procedimentos')) : the_row(); ?>
                        <div class="procedimentos">
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

            <a href="" class="btn btn__primary">Saiba mais</a>
        </div>
    </div>

    <div class="grafism">
        <?php get_template_part('template-parts/grafism', 'grafismo'); ?>
    </div>
</section>