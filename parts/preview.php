<article class="collumn preview <?php echo is_single() ? 'single' : 'archive'; ?>">

    <?php
    echo '<a href="' . get_permalink($post->ID) . '" class="cover">';
    $imgmedium = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'post-thumb-medium' );
    $imgsmall = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'post-thumb-small' );
    ?>
    <img alt="<?php echo get_the_title($post->ID); ?>" class="lazy"
         data-src="<?php echo $imglarge[0]; ?>"
         data-srcset="
            <?php echo $imgmedium[0]; ?> 700w,
            <?php echo $imgsmall[0]; ?> 334w"
         data-sizes="
            (min-width: 569px) 700px,
            (min-width: 1px) 334px,
            100vw
        "
    />
    <?php
    echo '</a>';

    echo is_single() ? '<h5>' : '<h4>';
    echo '<a href="' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a>';
    echo is_single() ? '</h5>' : '</h4>';

    if (!is_single()) {
        the_excerpt();
    }

    echo '<a class="button" href="' . get_permalink($post->ID) . '">Read article</a>';
    ?>

</article>
