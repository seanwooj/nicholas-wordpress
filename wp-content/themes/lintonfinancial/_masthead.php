<?php if( has_post_thumbnail() ) { ?>
	<header id="section-head" role="banner" class="table-row dark-bg">
		<div class="table-cell hero middle-align">
			<h1 class="hero-header"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php the_title(); ?></a></h1>
			<!-- <h4 class="subheader"><?php bloginfo('description'); ?></h4> -->
		</div>

		<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url = $thumb_url_array[0];
		?>
		<img class="masthead-bg" src="<?php echo $thumb_url; ?>">

	</header>
<?php } ?>