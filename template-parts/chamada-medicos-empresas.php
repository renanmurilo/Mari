<section class="medicosEmpresas">
    <div class="shell">
        <div class="medicosEmpresas__content">
            <div class="vetor">
                <?php get_template_part('template-parts/vetor-green', 'vetor'); ?>
            </div>

            <div class="medicosEmpresas__description">
                <h2 class="medicosEmpresas__h2"><?php the_field('titulo_de_medicos_e_empresas', 'option'); ?></h2>

                <div class="medicosEmpresas__text">
                    <?php the_field('texto_de_medicos_e_empresas', 'option'); ?>
                </div>

                <div class="medicosEmpresas__buttons">
                    <a href="" class="btn btn__primary">Saiba mais</a>
                    <?php if (is_page('Home') or is_page('Procedimentos')) { ?>
                        <a href="" class="btn btn__primary">Faça parte</a>
                    <?php } ?>
                </div>
            </div>

            <div class="medicosEmpresas__image">
                <img src="<?php the_field('imagem_de_medicos_e_empresas', 'option'); ?>" alt="Médicos e Empresas" width="673" height="454" />
            </div>
        </div>
    </div>
</section>