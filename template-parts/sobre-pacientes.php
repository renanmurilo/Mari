<section class="pagePacientes">
    <div class="shell">
        <div class="pagePacientes__content">
            <?php if (have_rows('sobre')) : while (have_rows('sobre')) : the_row(); ?>
                    <div class="row__wrapper">
                        <div class="image">
                            <img src="<?php the_sub_field('imagem'); ?>" alt="Imagem" width="614" height="401" />
                        </div>

                        <div class="description">
                            <h2 class="title__h2"><?php the_sub_field('titulo'); ?></h2>

                            <div class="text">
                                <?php the_sub_field('texto'); ?>
                            </div>

                            <?php if (get_sub_field('ativar_botao')) : ?>
                                <?php
                                $link = get_sub_field('link_de_direcionamento_do_botao');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn btn__primary"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</section>