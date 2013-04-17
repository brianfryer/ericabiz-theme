<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("shoulder") ) : endif ?>

<article class="widget">
    <h3>Popular Posts on erica.biz</h3>
    <ul class="popular-posts">
        <?php get_template_part( 'popular' ); ?>
    </ul><!--/.popular-posts-->
</article>

<article class="widget">
    <h3>Sponsors</h3>
    <?php if(function_exists('CrankyAdsZone')) { CrankyAdsZone(2384); } ?>
</article>