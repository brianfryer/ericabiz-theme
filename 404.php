<?php get_header(); ?>

    <div class="main-column">
        <?php get_template_part( 'promo' ); ?>
        <section class="focus four-oh-four">

            <article class="page">

                <header>
                    <h1 class="article-title"><strong>404:</strong> Page Not Found</h1>
                </header>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("four-oh-four") ) : endif ?>

            </article><!--/.page-->

        </section><!--/.focus.four-oh-four-->
    </div><!--/.main-column-->

    <section class="shoulder">
        <?php get_sidebar(); ?>
    </section><!--/.shoulder-->

<?php get_footer(); ?>
