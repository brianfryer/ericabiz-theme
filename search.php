<?php get_header(); ?>
<?php get_template_part( 'promo' ); ?>

<section class="focus search">
        <?php get_template_part( 'branding' ); ?>
        <header>
            <h1>Search results for: <strong><?php echo get_search_query(); ?></strong></h1>
        </header>
        <?php
        $blog = new WP_Query( array( 'post_type' => 'post' ) );
        if( $blog->have_posts() ) :
            while( $blog->have_posts() ) : $blog->the_post(); ?>
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
                <?php
            endwhile;
        endif;
        ?>
        <nav class="back-and-forth">
            <ul>
                <li><?php next_posts_link('&laquo; Previous Posts') ?></li>
                <li><?php previous_posts_link('Newer Posts &raquo;') ?></li>
            </ul>
        </nav><!--/.back-and-forth-->
        <div class="clearboth"></div>
    </section><!--/.focus.category-->

    <aside class="shoulder with-promo">
        <?php get_sidebar(); ?>
    </aside><!--/.shoulder.with-promo-->

<?php get_footer(); ?>
