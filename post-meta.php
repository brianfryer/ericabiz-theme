<ul class="meta">
<?php if ( is_single() ) { ?>
    <li>
        <a title="<?php the_permalink(); ?>" href="<?php the_permalink(); ?>">Permalink</a>
    </li>
<?php } ?>
    <li>
        <span title="This post was was published on <?php the_date( 'D, M j, Y' ); ?>"><?php echo get_the_date( 'D, M j, Y' ); ?></span>
    </li>
    <li>
        <span><?php the_category(' &bull; '); ?></span>
    </li>
    <li class="comments">
        <a title="Jump to the comments &raquo;" href="<?php comments_link(); ?>"><?php comments_number( '', 'One comment', '% comments' ); ?></a>
    </li>
</ul><!--/.meta-->
