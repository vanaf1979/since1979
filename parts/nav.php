<nav class="nav grid-full">

    <div class="pure-g navigation">

        <div class="logo pure-u-2-3 pure-u-sm-2-3 pure-u-md-2-3 pure-u-lg-1-4 pure-u-xl-1-4">

            <?php
            if (has_custom_logo()) {
                echo '<div class="logo">';
                echo '<img src="https://pbs.twimg.com/profile_images/1085116439823085568/rzUn-2Rt_400x400.jpg" alt="' . get_bloginfo('name') . '"/>';
                echo '<h3>';
                echo '<a href="' . get_site_url() . '" class="title" title="' . get_bloginfo('name') . '">' . get_bloginfo('name') . '</a>';
                echo '</h3>';
                echo '</div>';
            }
            ?>

        </div>

        <div class="pure-u-1-3 pure-u-sm-1-3 pure-u-md-1-3 pure-u-lg-3-4 pure-u-xl-3-4">

            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'menu hor right')); ?>

            <a href="#menu" class="mobile-nav fas fa-bars">&nbsp;</a>

        </div>

    </div>

</nav>