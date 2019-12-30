
<?php get_template_part('parts/head'); ?>

<body <?php body_class(); ?>>

<div id="app">

    <div class="content">

        <?php get_template_part('parts/nav'); ?>

        <header class="header page grid-full">

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
                    $imglarge = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumb-large' );
                    $imgmedium = wp_get_attachment_image_src( get_post_thumbnail_id() , 'post-thumb-medium' );
                    $imgsmall = wp_get_attachment_image_src( get_post_thumbnail_id() , 'post-thumb-small' );
                    ?>

                    <img alt="<?php echo get_the_title($post->ID); ?>" class="lazy"
                         data-src="<?php echo $imglarge[0]; ?>"
                         data-srcset="
                                <?php echo $imglarge[0]; ?> 1000w,
                                <?php echo $imgmedium[0]; ?> 700w,
                                <?php echo $imgsmall[0]; ?> 334w"
                         data-sizes="
                                (min-width: 769px) 1000px,
                                (min-width: 569px) 700px,
                                (min-width: 1px) 334px,
                                100vw
                            "
                    />

                </div>

            </div>

        </div>

        <div class="post page grid-full">

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