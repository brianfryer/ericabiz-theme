<?php get_header(); ?>
<?php get_template_part( 'promo' ); ?>

<section class="focus category">
        <?php get_template_part( 'branding' ); ?>
        <header>
            <h1>Posts published in the <strong><em><?php single_cat_title(); ?></em></strong> category:</h1>
        </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="the-snip">
            <header>
                <h1>
                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h1>
                <?php get_template_part( 'post', 'meta' ); ?>
                <div class="clearboth"></div>
            </header>
            <?php the_content() ?>
            <span class="full-post"><a title="<?php the_title(); ?>" href="<?php the_permalink();?>">View full post &raquo;</a></span>
            <div class="clearboth"></div>
        </article><!--/.the-snip-->
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
        <nav class="back-and-forth">
            <ul>
                <li><?php next_posts_link('&laquo; Previous Posts', 0); ?></li>
                <li><?php previous_posts_link('Newer Posts &raquo;', 0); ?></li>
            </ul>
        </nav><!--/.back-and-forth-->
        <div class="clearboth"></div>
    </section><!--/.focus.category-->

    <aside class="shoulder with-promo">
        <?php get_sidebar(); ?>
    </aside><!--/.shoulder.with-promo-->

<?php get_footer(); ?>
