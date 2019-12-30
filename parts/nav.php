<nav class="nav grid-full">

    <div class="pure-g navigation">

        <div class="logo pure-u-2-3 pure-u-sm-2-3 pure-u-md-1-3 pure-u-lg-1-4 pure-u-xl-1-4">

            <?php
            if (has_custom_logo()) {
                echo '<div class="logo">';
                    echo \wp_get_attachment_image(get_field('header_logo_image' , 'option'), 'thumbnail' );
                    echo '<h3>';
                        echo '<a href="' . get_site_url() . '" class="title" title="' . get_bloginfo('name') . '">' . get_bloginfo('name') . '</a>';
                    echo '</h3>';
                echo '</div>';
            }
            ?>

        </div>

        <div class="pure-u-1-3 pure-u-sm-1-3 pure-u-md-2-3 pure-u-lg-3-4 pure-u-xl-3-4">

            <ul class="header-socials">
            <?php
            $socials = get_field('header_socials' , 'option');
            foreach( $socials as $social ) {
                echo "<li><a href='{$social['header_social_link']}' title='{$social['header_social_title']}' class='{$social['header_social_icon']}' target='_blank'></a></li>";
            }
            ?>
            </ul>

            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'menu hor right')); ?>

            <a href="#menu" class="mobile-nav fas fa-bars">&nbsp;</a>

        </div>

    </div>

</nav>