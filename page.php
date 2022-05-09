<?php get_header(); ?>

<div class="homepage-banner container">
    <div class="homepage-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/tree_drawing_2.png') ?>);"></div>
    <div class="homepage-banner__text">
        <h1 class="headline headline--large"><?php the_title() ?></h1>
        <h2 class="headline headline--medium container">My name's Bret, and I'm a</h2>
        <ul class="headline--medium container">
            <li class="headline headline--medium__li">Developer</li>
            <li class="headline headline--medium__li">Writer</li>
            <li class="headline headline--medium__li">Animator</li>
            <li class="headline headline--medium__li">Coffee Slurper</li>
        </ul>
    </div>
</div>

<div class="main-content container">
    <div class="main-content__text">
        <p>I approach creative challenges from a multidisciplinary perspective, stemming from a background in computer graphics, all types of 2D and 3D animation, and writing.</p>

        <p>Want to see more? Check out my latest work on <a href="https://github.com/Mr-RoBret">GitHub</a>, or watch some of my <a href="https://vimeo.com/bretfarley">animation work</a>.</p>

        <p>Or you can get in touch below.</p>
    </div>
</div>

<?php get_footer(); ?>