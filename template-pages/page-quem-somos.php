<?php
// Template Name: Quem Somos
get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <main>
            <?php get_template_part('template-parts/banners', 'banner'); ?>

            <section class="pageQuemSomos">
                <div class="shell">
                    <div class="quemSomos__content">
                        <div class="quemSomos__text__initial">
                            <?php the_field('texto_introdutorio'); ?>
                        </div>

                        <div class="quemSomos__row">
                            <div class="quemSomos__description">
                                <h2 class="quemSomos__h2"><?php the_field('titulo_quem_somos'); ?></h2>

                                <div class="quemSomos__text">
                                    <?php the_field('texto_quem_somos'); ?>
                                </div>
                            </div>

                            <div class="quemSomos__image">
                                <img src="<?php the_field('imagem_quem_somos'); ?>" alt="Imagem Quem Somos" width="614" height="501" />
                            </div>
                        </div>

                        <a href="" class="btn btn__primary">Saiba mais sobre a Radiologia intervencionista</a>
                    </div>
                </div>
            </section>

            <section class="quemSomos__responsavel">
                <div class="shell">
                    <div class="responsavel__content">
                        <div class="image">
                            <img src="<?php the_field('foto'); ?>" alt="Foto Responsável" width="474" height="529" />
                        </div>

                        <div class="description">
                            <h2 class="title__h2"><?php the_field('nome'); ?></h2>

                            <h3 class="title__h3"><?php the_field('crm'); ?></h3>

                            <div class="text">
                                <?php the_field('biografia'); ?>
                            </div>

                            <h4 class="title__h4">Agende sua consulta</h4>

                            <a href="mailto:<?php the_field('email'); ?>" class="info"><?php the_field('email'); ?></a>

                            <?php
                            $link = get_field('whastapp');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="info"><?php echo esc_html($link_title); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/whatsap.svg" alt="Whatsapp" width="24" height="24" /></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php }
} ?>

<?php get_footer(); ?>