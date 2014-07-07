<?php
/*
Template Name: Hero
*/
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<header id="section-head" role="banner" class="table-row dark-bg">
	<div class="table-cell hero middle-align">
		<h1 class="hero-header"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h4 class="subheader"><?php bloginfo('description'); ?></h4>
	</div>

	<?php
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
		$thumb_url = $thumb_url_array[0];
	?>
	<img class="masthead-bg" src="<?php echo $thumb_url; ?>">

</header>

<div class="dark-grey hero-notification">
  <div class="row">
    <div class="large-12 columns">
      <div class="center expander">
        <p>Learn about what we're doing</p>
      </div>
    </div>
  </div>
</div>


</div> <!-- end fixed-top -->

<div class="body-container">

	<div class="row editorial-row">
	  <div class="large-6 columns">
	    <div class="editorial-cell">
	      <h3>
	        Copy and Paste This!
	      </h3>
	      <p>Synergistically develop principle-centered mindshare after world-class quality vectors. Dynamically integrate progressive applications after corporate schemas. Continually reconceptualize stand-alone markets via revolutionary technology. </p>
	      <a class="" href="#">
	        Finance!
	      </a>
	    </div>
	  </div>

	  <div class="large-6 columns">
	    <div class="editorial-cell">
	      <h3>
	        Copy and Paste This!
	      </h3>
	      <p>Synergistically develop principle-centered mindsha. Continually reconceptualize stand-alone markets via revolutionary technology. Objectively innovate vertical growth strategies whereas cost effective total linkage. If you are worried about the semantics of that, you could attempt to match it to your content.</p>
	      <a class="" href="#">
	        Finance!
	      </a>
	    </div>
	  </div>
	</div>

	<div class="full-width-row blue">
	  <div class="row editorial-row">
	    <div class="large-6 columns">
	      <div class="editorial-cell">
	        <h3>
	          Copy and Paste This!
	        </h3>
	        <p>Synergistically develop principle-centered mindshare after world-class quality vectors. Dynamically integrate progressive applications after corporate schemas. Continually reconceptualize stand-alone markets via revolutionary technology. </p>
	        <a class="" href="#">
	          Finance!
	        </a>
	      </div>
	    </div>

	    <div class="large-6 columns">
	      <div class="editorial-cell">
	        <h3>
	          Copy and Paste This!
	        </h3>
	        <p>Synergistically develop principle-centered mindsha. Continually reconceptualize stand-alone markets via revolutionary technology. Objectively innovate vertical growth strategies whereas cost effective total linkage. If you are worried about the semantics of that, you could attempt to match it to your content.</p>
	        <a class="" href="#">
	          Finance!
	        </a>
	      </div>
	    </div>
	  </div> <!-- row editorial row -->
	</div><!-- full width row -->



	<div class="full-width-row light-grey">
	  <div class="row editorial-row">
	    <div class="container-centered">
	      <h3 class="header-with-button">Money Matters.</h3>
	      <a class="button wide" href="#">
	        Plan your future.
	      </a>
	    </div> <!-- container centered -->
	  </div> <!-- row editorial row -->
	</div><!-- full width row -->

</div>

	<div class="row">
		<div class="small-12 large-8 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action('foundationPress_page_before_comments'); ?>
				<?php do_action('foundationPress_page_after_comments'); ?>
			</article>

		<?php do_action('foundationPress_after_content'); ?>

		</div>

<?php endwhile;?>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
