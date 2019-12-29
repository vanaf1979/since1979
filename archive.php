<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="app">

    <div class="content">

        <?php get_template_part('parts/nav'); ?>

        <nav class="intro grid-full">

            <div class="pure-g grid-center">

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

                    <h1><?php echo is_category() ? 'Category' : 'Tag'; ?>: <?php echo single_cat_title(); ?></h1>

                    <?php echo term_description(); ?>

                </div>

            </div>

        </nav>

        <div class="grid grid-full">

            <div class="pure-g grid-center-pad">

                <?php while (have_posts()) { ?>

                    <?php the_post(); ?>

                    <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 pure-u-xl-1-2">

                        <?php get_template_part('parts/preview'); ?>

                    </div>

                <?php } ?>

            </div>

        </div>

        <?php get_template_part('parts/post-nav'); ?>

        <?php get_template_part('parts/latest-tweets'); ?>

    </div>

    <?php get_template_part('parts/footer'); ?>

</div>

<?php get_template_part('parts/mobile-nav'); ?>

<?php wp_footer(); ?>

</body>

</html>