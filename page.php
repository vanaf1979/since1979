<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="app">

    <div class="content">

        <?php get_template_part('parts/nav'); ?>

        <header class="header grid-full">

            <div class="pure-g grid-center">

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

                    <?php
                    the_post();

                    echo '<h1>';
                    echo get_the_title($post->ID);
                    echo '</h1>';
                    ?>

                </div>

            </div>

        </header>

        <div class="artwork grid-full">

            <div class="pure-g grid-center">

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

                    <?php
                    the_post_thumbnail('full');
                    ?>

                </div>

            </div>

        </div>

        <div class="post grid-full">

            <div class="pure-g grid-content">

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

                    <?php the_content(); ?>

                </div>

            </div>

        </div>

    </div>

    <?php get_template_part('parts/footer'); ?>

</div>

<?php get_template_part('parts/mobile-nav'); ?>

<?php wp_footer(); ?>

</body>

</html>