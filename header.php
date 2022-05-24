<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <h1 class="title-logo"><a href="<?php echo site_url() ?>">bretfarley.com</a></h1>
            <div class="site-header__menu">
                <nav class="main-nav">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation'
                        ));
                    ?>
                    <!-- <ul>
                        <li><a href="<?php echo site_url('/resume') ?>">Resum&#233;</a></li>
                        <li><a href="<?php echo site_url('/projects') ?>">Work</a></li>
                        <li><a href="<?php echo site_url('/about') ?>">About</a></li>
                    </ul> -->
                </nav>
            </div>
        </div>
    </header>