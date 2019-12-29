<div class="related-posts grid-full">

    <div class="pure-g grid-center-pad">

        <div class="head pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

            <h3>Related posts</h3>

        </div>

        <?php
        if (has_category(366, $post->ID)) {
            $args = array(
                'numberposts' => 3,
                'category' => 366,
                'exclude' => array($post->ID)
            );
            $related_posts = get_posts($args); // Select latest 2 digest posts excluding the current post,
        } else {
            $related_posts = get_field('related_posts'); // Get related posts from Acf field.
        }

        if (!$related_posts) {
            $related_posts = array_slice(get_posts(), 0, 3); // Default to two latest posts.
        }

        global $post;
        foreach ($related_posts as $post) {
            setup_postdata($post);
            ?>

            <div class="pure-u-1 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-1-3 pure-u-xl-1-3">

                <?php get_template_part('parts/preview'); ?>

            </div>

        <?php } ?>

        <?php wp_reset_postdata(); ?>

    </div>

</div>