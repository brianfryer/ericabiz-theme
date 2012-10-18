<?php get_header(); ?>

<div class="main-column">
    <?php get_template_part( 'promo' ); ?>

    <section class="focus date loop">

        <?php if ( have_posts() ) : ?>

        <header>
            <h1 class="section-title">Posts published in <strong><em><?php the_time( 'Y' ); ?></em></strong>:</h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>
        <article class="post snippet">

            <header>
                <h1 class="article-title">
                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h1>
                <?php get_template_part( 'post', 'meta' ); ?>
            </header>

            <?php the_content() ?>

            <span class="full-post">
                    <a class="btn" title="<?php the_title(); ?>" href="<?php the_permalink();?>">View full post &raquo;</a>
            </span>

        </article><!--/.post.snippet-->
        <?php endwhile; else: ?>
        <article class="post snippet">

            <h2><?php _e('Sorry, there are no posts in this category.'); ?></h2>

        </article><!--/.post.snippet-->
        <?php endif; ?>

        <nav class="back-and-forth">
            <ul>
                <li><?php next_posts_link('&laquo; Previous Posts'); ?></li>
                <li><?php previous_posts_link('Newer Posts &raquo;'); ?></li>
            </ul>
        </nav><!--/.back-and-forth-->

    </section><!--/.focus.category.loop-->
</div><!--/.main-column-->

<section class="shoulder">
    <?php get_sidebar(); ?>
</section><!--/.shoulder-->

<?php get_footer(); ?>
