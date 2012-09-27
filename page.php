<?php get_header(); ?>

    <div class="main-column">
        <section class="focus">

            <?php the_post(); ?>
            <article class="page">

                <header>
                    <h1 class="article-title"><?php the_title(); ?></h1>
                </header>
                <hr />
                <?php the_content() ?>

            </article><!--/.page-->

        </section><!--/.focus-->
    </div><!--/.main-column-->

    <section class="shoulder">
        <?php get_sidebar(); ?>
    </section><!--/.shoulder-->

<?php get_footer(); ?>
