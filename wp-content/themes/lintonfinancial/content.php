<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a class="item-thumb" href=<?php the_permalink(); ?>>
    	<?php the_post_thumbnail(); ?>
    </a>

    <div class="loop-post-content">
        <header class="item-header">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php FoundationPress_entry_meta(); ?>
        </header>

        <div class="item-content excerpt-text">
           <?php the_excerpt(__('Continue reading...', 'FoundationPress')); ?>
        </div>

        <a href="<?php the_permalink() ?>" class="blog-button">Read More</a>
    </div>
</div>