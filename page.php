<?php get_header(); ?>

    <section class="focus">

        <?php the_post(); ?>
        <article class="page">

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
