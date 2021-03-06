<?php

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="interior-page-banner container">
        <div class="interior-page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/interior-background_cropped_copy.png') ?>);"></div>
        <div class="interior-page-banner__text">
            <h1 class="headline headline--large"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="main-content container">
        <div class="main-content__text">
            <p><?php
                the_content();
            ?></p>
        </div>
    </div>

<?php }

get_footer();

?>