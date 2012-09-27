<?php get_header(); ?>

    <div class="main-column">
        <?php get_template_part( 'promo' ); ?>
        <section class="focus search loop">

            <header>
                <h1 class="section-title">Search results for: <strong><?php echo get_search_query(); ?></strong></h1>
            </header>

            <?php $blog = new WP_Query( array( 'post_type' => 'post' ) ); if( $blog->have_posts() ) : while( $blog->have_posts() ) : $blog->the_post(); ?>
                <article class="post snippet">

                    <header>
                        <h1 class="article-title">
                            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <?php get_template_part( 'post', 'meta' ); ?>
                    </header>
                    <hr />
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
                    <li><?php next_posts_link('&laquo; Previous Posts') ?></li>
                    <li><?php previous_posts_link('Newer Posts &raquo;') ?></li>
                </ul>
            </nav><!--/.back-and-forth-->

        </section><!--/.focus.search.loop-->
    </div><!--/.main-column-->

    <section class="shoulder">
        <?php get_sidebar(); ?>
    </section><!--/.shoulder.-->

<?php get_footer(); ?>
