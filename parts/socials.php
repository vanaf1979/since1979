<div class="socials pure-g grid-center">

    <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

        <h3>Socialize</h3>

    </div>

    <div class="pure-u-1 pure-u-sm-1 pure-u-md-1 pure-u-lg-1 pure-u-xl-1">

        <ul>
            <?php
            $socials = get_field('social_links', 959);
            foreach ($socials as $social) {
            ?>
                <li>
                    <a href="<?= $social['social_link'] ?>" title="<?= $social['social_title'] ?>" class="fab <?= $social['social_icon'] ?>" target="_blank"></a>
                </li>
            <?php
            }
            ?>
        </ul>

    </div>

</div>