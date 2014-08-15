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

	<?php do_action('foundationPress_before_content'); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>"><!--
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header> -->
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<?php the_content(); ?>


		</article>

		<div class="full-width-row light-grey">
		  <div class="row editorial-row">
		    <div class="container-centered">
		      <h3 class="header-with-button"><?php //the_field('bottom_cta'); ?>CTA</h3>
		      <a class="button wide" href="#<?php //the_field('bottom_cta_button_link'); ?>">
		        <?php //the_field('bottom_cta_button_text'); ?>
		        CTA BUTTON TEXT
		      </a>
		    </div> <!-- container centered -->
		  </div> <!-- row editorial row -->
		</div><!-- full width row -->

	<?php do_action('foundationPress_after_content'); ?>

</div>

<?php endwhile;?>

<?php get_footer(); ?>
