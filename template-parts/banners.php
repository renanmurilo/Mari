<section class="banners">
    <div class="banner__content">
        <img class="banner__desktop" src="<?php the_field('banner_desktop'); ?>" alt="Banner" width="1920" height="531" />
        <img class="banner__mobile" src="<?php the_field('banner_mobile'); ?>" alt="" width="" height="" />

        <div class="shell">
            <div class="banner__description">
                <h1 class="banner__h1"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>