    <footer class="footer">
        <div class="shell">
            <div class="content__footer">
                <div class="widget__footer">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg" alt="Mari" width="178" height="110" />
                    </div>

                    <div class="footer__contact">
                        <h3 class="footer__content__h3">Contato</h3>

                        <p class="footer__contact__info"><?php the_field('telefone', 'option'); ?></p>
                        <a href="mailto:<?php the_field('email', 'option'); ?>" class="footer__contact__info"><?php the_field('email', 'option'); ?> </a>
                    </div>


                    <div class="sociais">
                        <h3 class="sociais__h3">Redes Sociais</h3>

                        <div class="midias">
                            <a href="<?php the_field('link_do_facebook', 'option'); ?>" class="facebook">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebbok" width="25" height="25" />
                            </a>

                            <a href="<?php the_field('link_do_instagram', 'option'); ?>" class="instagram">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram" width="25" height="25" />
                            </a>

                            <a href="<?php the_field('link_do_linkedin', 'option'); ?>" class="linkedin">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Linkedin" width="25" height="25" />
                            </a>

                            <a href="<?php the_field('link_do_youtube', 'option'); ?>" class="youtube">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/youtube.svg" alt="Youtube" width="36" height="25" />
                            </a>
                        </div>
                    </div>

                    <?php
                    $link = get_field('link_de_politicas_de_privacidade', 'option');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="link"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>

                <div class="widget__footer">
                    <nav class="footer__menu">
                        <?php
                        $args = array(
                            'menu' => 'Menu rodapé',
                            'theme_location' => 'menu-rodape',
                            'container' => false
                        );
                        wp_nav_menu($args);
                        ?>
                    </nav>
                </div>
                <div class="widget__footer">
                    <div class="newsletter">
                        <h3 class="newsletter__h3">Newsletter</h3>

                        <div class="form__class">
                            <?php echo do_shortcode('[contact-form-7 id="5ffc828" title="Newsletter"]'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <p class="responsavel"><?php the_field('texto_responsavel', 'option'); ?></p>
                <p class="direitos"><?php the_field('texto_direitos', 'option'); ?> <a href="https://www.grupoeolica.com.br/" target="_blank" rel="noopener noreferrer">Design by Eólica.</a></p>
                <div class="disclaimer">
                    <?php the_field('disclaimer', 'option'); ?>
                </div>
            </div>
        </div>

        <div class="box-cookies hide">
            <div class="shell">
                <div class="container--cookies">
                    <div class="text">
                        <p class="msg-cookies">Utilizamos cookies para melhorar a sua experiência em nosso site. Ao continuar navegando você concorda com a nossa <a href="<?php echo get_home_url(); ?>/politica-de-privacidade">política de privacidade</a>. </p>
                    </div>
                    <button class="btn btn__primary btn-cookies">CONTINUAR E FECHAR</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Inicio Wordpress Footer -->
    <?php wp_footer(); ?>
    <!-- Final Wordpress Footer -->

    </body>

    </html>