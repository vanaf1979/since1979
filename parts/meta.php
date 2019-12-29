<section class="meta">

    <div class="pure-g grid-center">

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 pure-u-xl-1-2">

            <p>&copy; <?= date('Y'); ?> <?= get_bloginfo('name'); ?> / Stephan Nijman All rights reserved</p>

        </div>

        <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 pure-u-xl-1-2">

            <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'menu hor right')); ?>

        </div>

    </div>

</section>
