<?php get_header(); ?>
<?php include("_masthead.php"); ?>
</div> <!-- end fixed top -->
<div class="body-container" id="blog-body">
	<div class="row">
		<div class="small-12 large-8 columns" role="main">
		
		<?php do_action('foundationPress_before_content'); ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action('foundationPress_post_before_entry_content'); ?>
				
				<div class="entry-content">
					<?php FoundationPress_entry_meta(); ?>
					<?php the_content(); ?>
				</div>

				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action('foundationPress_post_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_post_after_comments'); ?>
			</article>
		<?php endwhile;?>
		
		<?php do_action('foundationPress_after_content'); ?>

		</div>
		<?php get_sidebar(); ?>
	</div>	
</div>
<?php get_footer(); ?>