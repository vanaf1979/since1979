<aside class="social-share">
    <a class="twitter-share" data-tweet="<?php echo get_the_title($post->ID); ?>! By @vanaf1979" title="Share this article on Twitter">
        <i class="fab fa-twitter"></i>
    </a>
    <a class="reddit-share" data-post="<?php echo get_the_title($post->ID); ?>" title="Share this article on Reddit">
        <i class="fab fa-reddit"></i>
    </a>
    <a class="facebook-share" title="Share this article on Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="mailto:?subject=<?php echo get_the_title($post->ID); ?>&body=Check out this article: <?php echo get_the_title($post->ID); ?> - <?php echo get_permalink($post->ID); ?>" title="Share this article via email">
        <i class="fas fa-at"></i>
    </a>
    <a href="https://www.buymeacoffee.com" target="_blank" title="Buy me a Coffee">
        <i class="fas fa-mug-hot"></i>
    </a>
</aside>