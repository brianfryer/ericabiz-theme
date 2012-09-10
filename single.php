<?php get_header(); ?>
<?php get_template_part( 'promo' ); ?>

    <section class="focus single">
        <?php get_template_part( 'branding' ); ?>
        <?php the_post(); ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
                <?php get_template_part( 'post', 'meta' ); ?>
                <div class="clearboth"></div>
            </header>
            <?php the_content() ?>
            <div class="clearboth"></div>
            <aside class="subscribe">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("subscribe") ) : endif ?>
                <div class="clearboth"></div>
            </aside><!--/.subscribe-->
            <div class="clearboth"></div>
            <div class="da-google-adz">
                <span>
                    <script type="text/javascript"><!--
                    document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%3C%21%2D%2D%0A%67%6F%6F%67%6C%65%5F%61%64%5F%63%6C%69%65%6E%74%20%3D%20%22%70%75%62%2D%31%34%30%33%38%35%36%37%35%39%30%34%37%37%34%34%22%3B%0A%67%6F%6F%67%6C%65%5F%61%64%5F%73%6C%6F%74%20%3D%20%22%39%31%31%32%39%32%30%35%30%38%22%3B%0A%67%6F%6F%67%6C%65%5F%61%64%5F%77%69%64%74%68%20%3D%20%34%36%38%3B%0A%67%6F%6F%67%6C%65%5F%61%64%5F%68%65%69%67%68%74%20%3D%20%36%30%3B%0A%2F%2F%2D%2D%3E%0A%3C%2F%73%63%72%69%70%74%3E'));
                    //-->
                    </script>
                    <script type="text/javascript">
                        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%0A%73%72%63%3D%22%68%74%74%70%3A%2F%2F%70%61%67%65%61%64%32%2E%67%6F%6F%67%6C%65%73%79%6E%64%69%63%61%74%69%6F%6E%2E%63%6F%6D%2F%70%61%67%65%61%64%2F%73%68%6F%77%5F%61%64%73%2E%6A%73%22%3E%0A%3C%2F%73%63%72%69%70%74%3E'));
                    </script>
                </span>
            </div><!--/.da-google-adz-->
            <div class="clearboth"></div>
            <aside class="speak" id="comments">
                <?php comments_template(); ?>
            </aside><!--/.speak-->
        </article>
        <nav class="back-and-forth">
            <ul>
                <li><?php previous_post_link('&laquo; %link'); ?></li>
                <li><?php next_post_link('%link &raquo;');  ?></li>
            </ul>
        </nav><!--/.back-and-forth-->
        <div class="clearboth"></div>
    </section><!--/.focus-->

    <aside class="shoulder with-promo">
        <?php get_sidebar(); ?>
    </aside><!--/.shoulder.with-promo-->

<?php get_footer(); ?>
