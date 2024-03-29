<?php

function foundationpress_sidebar_widgets() {
  register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'foundationpress'),
      'description' => __('Drag widgets to this sidebar container.', 'foundationpress'),
      'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
  ));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );

?>
