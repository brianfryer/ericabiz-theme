<?php
/*
Template Name: As seen in Inc. Magazine
*/
?>

<?php get_header(); ?>

    <section class="focus">

        <?php the_post(); ?>
        <article class="page">

            <aside class="inc-magazine">
                <p style="margin-top: 0;"><strong><em>As seen in <img style="position: relative; top: 1px; margin: 0 2px; padding: 0; border: none; background: none;" width="" height="18px" title="Austin Business Consulting" alt="Inc. Magazine" src="<?php echo bloginfo('template_url'); ?>/img/austin-business-consulting.gif" /> Magazine.</em></strong></p>
            </aside><!--/.inc-magazine-->

            <header>
                <h1 class="article-title"><?php the_title(); ?></h1>
            </header>

            <?php the_content() ?>

        </article><!--/.page-->

    </section><!--/.focus-->

    <section class="shoulder">
        <?php get_sidebar(); ?>
    </section><!--/.shoulder-->

<?php get_footer(); ?>
