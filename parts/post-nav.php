<div class="post-nav grid-full">

    <div class="pure-g grid-center">

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

            <?php
            the_posts_navigation(array(
                'prev_text' => __('Older posts', 'since1979'),
                'next_text' => __('Newer posts', 'since1979'),
                'screen_reader_text' => __('Posts navigation', 'since1979'),
                'aria_label' => __('Posts', 'since1979'),
            ));
            ?>

        </div>

    </div>

</div>