    <nav class="primary">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary-nav',
                'container'      => FALSE,
                'container_id'   => FALSE,
                'menu_class'     => 'primary-nav',
                'menu_id'        => FALSE,
            )
        );
        ?>
    </nav><!--/.primary-->

    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("shoulder") ) : endif ?>

    <section>
        <h3>Popular Posts on erica.biz</h3>
        <ul class="popular-posts">
            <?php get_template_part( 'popular' ); ?>
        </ul><!--/.popular-posts-->
    </section>

    <section>
        <h3>Sponsors</h3>
        <?php if(function_exists('CrankyAdsZone')) { CrankyAdsZone(2324); } ?>
    </section>
