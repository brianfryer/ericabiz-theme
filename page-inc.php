<?php
/*
Template Name: As seen in Inc. Magazine
*/
?>

<?php get_header(); ?>

<section class="focus page">
    <?php get_template_part( 'branding' ); ?>
    <?php the_post(); ?>
    <article>
        <p style="margin-top: 0;"><strong><em>As seen in <img style="position: relative; top: 1px; margin: 0 2px; padding: 0; border: none; background: none;" width="" height="18px" title="Austin Business Consulting" alt="Inc. Magazine" src="/wp-content/themes/ericabiz-theme/img/austin-business-consulting.gif" /> Magazine.</em></strong></p>
        <header>
            <h1><?php the_title(); ?></h1>
        </header>
        <?php the_content() ?>
        <div class="clearboth"></div>
    </article>
    <div class="clearboth"></div>
</section><!--/.focus-->

<aside class="shoulder">
    <?php get_sidebar(); ?>
</aside><!--/.shoulder-->

<?php get_footer(); ?>
