<?php

get_header();

?>

<div class="interior-page-banner container">
    <div class="interior-page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/interior-background_cropped_copy.png') ?>);"></div>
    <div class="interior-page-banner__text">
        <h1 class="headline headline--large">Work</h1>
        <h2 class="headline headline--medium__index-page">Keep up with my latest projects below:</h2>
    </div>
</div>

<div class="main-content">

    <!-- Coding Section of Posts -->
    <div class="post-items__header-container">
        <h2 class="headline headline--medium__index-page">Coding</h2>
    </div>
    <div class="post-items__cards-container">
        <?php
        $workPageProjects = new WP_Query(array(
            'post_type' => 'project',
        ));
        while ($workPageProjects->have_posts()) {
            $workPageProjects->the_post(); ?>
            <div class="post-item__card">
                <div class="post-item__card--image"><?php the_post_thumbnail('post-thumbnail-size'); ?></div>
                <h2 class="generic-content__title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>
                <div class="generic-content"><?php the_excerpt() ?></div>
            </div>
        <?php
        }
        ?>
    </div>

    <!-- Animation Section of Posts -->
    <!-- <div class="post-items__header-container">
        <h2 class="headline headline--medium__index-page">Animation</h2>
    </div>
    <div class="post-items__cards-container">
        <?php
        $animationPosts = new WP_Query(array(
            'category_name' => 'animation',
        ));
        while ($animationPosts->have_posts()) {
            $animationPosts->the_post(); ?>
            <div class="post-item__card">
                <div class="post-item__card--image"><?php the_post_thumbnail('post-thumbnail-size'); ?></div>
                <h2 class="generic-content__title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>
                <div class="generic-content"><?php the_excerpt() ?></div>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div> -->

</div>

<?php

get_footer();

?>