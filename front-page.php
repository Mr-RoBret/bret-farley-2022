<?php

get_header(); ?>

<div class="homepage-banner container">
    <div class="homepage-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/tree_drawing_2.png') ?>);"></div>
    <div class="homepage-banner__text">
        <h1 class="headline headline--large">Hi there.</h1>
        <h2 class="headline headline--medium container">My name's Bret, and I'm a</h2>
        <ul id="traits-list" class="headline--medium container">
            <li class="headline headline--medium__li">Developer</li>
            <li class="headline headline--medium__li">Writer</li>
            <li class="headline headline--medium__li">Animator</li>
            <div class="wrapper">
                <div class="li-first">
                    <li class="headline headline__switch">Coffee Slurper</li>
                </div>
                <div class="li-second">
                    <li class="headline headline__switch hidden">(sorry...)</li>
                </div>
            </div>
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

<?php

get_footer();

?>