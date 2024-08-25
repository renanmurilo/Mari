<section class="procedimentos">
    <div class="shell">
        <div class="procedimentos__content <?php echo is_page('Profissionais') ? 'active' : ''; ?>">
            <div class="image">
                <img src="<?php the_field('imagem_procedimentos', 'option'); ?>" alt="Imagem" width="671" height="454" />
            </div>

            <div class="description">
                <h2 class="procedimentos__h2"><?php the_field('titulo_procedimentos', 'option'); ?></h2>

                <div class="procedimentos__text">
                    <?php the_field('texto_procedimentos', 'option'); ?>
                </div>

                <a href="" class="btn btn__primary">Saiba mais</a>
            </div>
        </div>
    </div>
</section>