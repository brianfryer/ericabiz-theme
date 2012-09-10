<?php get_header(); ?>

    <section class="focus page">
        <?php get_template_part( 'branding' ); ?>
        <?php the_post(); ?>
        <article>
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
