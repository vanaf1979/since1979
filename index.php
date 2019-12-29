
<?php get_template_part('parts/head'); ?>

<body <?php body_class(); ?>>

<div id="app">

    <div class="content">

        <?php get_template_part('parts/nav'); ?>

        <nav class="intro grid-full">

            <div class="pure-g grid-center">

                <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

                    <?php $home = get_page(959); ?>

                    <h1><?php echo $home->post_title; ?></h1>

                    <?php echo apply_filters('the_content', $home->post_content); ?>

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