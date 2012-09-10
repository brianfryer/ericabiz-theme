    <div class="clearboth"></div>

    <footer class="bottom">

        <section class="footer-ads">
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
        </section><!--/.footer-ads-->

        <section class="categories">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("categories") ) : endif; ?>
            <div class="clearboth"></div>
        </section><!--/.categories-->

        <div class="clearboth"></div>

        <nav>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'bottom-nav',
                    'container'      => FALSE,
                    'container_id'   => FALSE,
                    'menu_class'     => 'bottom-nav',
                    'menu_id'        => FALSE,
                )
            );
            ?>
            <ul class="copyright">
                <li>&copy; Copyright 2003-<?php echo date( 'Y' ); ?> Erica Douglass. All Rights Reserved.</li>
            </ul>
        </nav>

        <div class="clearboth"></div>

    </footer><!--/.bottom-->

</div><!--/.content.wrapper-->

</body><?php if ( is_home() ) { ?><!--./front--><?php } ?>

<?php wp_footer(); ?>

</html>
