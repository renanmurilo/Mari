<section class="pageHome__beneficios">
    <div class="shell">
        <div class="beneficios__content">
            <h2 class="beneficios__h2"><?php the_field('titulo_de_beneficios'); ?></h2>

            <div class="beneficios__inner">
                <?php if (have_rows('beneficios')) : while (have_rows('beneficios')) : the_row(); ?>
                        <div class="beneficios">
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