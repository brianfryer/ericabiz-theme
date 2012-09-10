<?php get_header(); ?>

    <section class="focus four-oh-four page">
        <?php get_template_part( 'branding' ); ?>
        <article>
            <header>
                <h1><strong>404:</strong> Page Not Found</h1>
            </header>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("four-oh-four") ) : endif ?>
        </article>
        <div class="clearboth"></div>
    </section><!--/.focus.four-oh-four.page-->

    <aside class="shoulder">
        <?php get_sidebar(); ?>
    </aside><!--/.shoulder-->

<?php get_footer(); ?>
