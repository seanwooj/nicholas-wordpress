<?php

// this gets called in line 821 of siteorigin-panels. this is the custom filter I added.
// removes the panel class from the widget div.
function remove_panel_class($class_array) {
  $index = array_search( 'panel', $class_array );
  if( $index !== FALSE ){
      unset($class_array[$index]);
  }
  return $class_array;
}
add_filter('siteorigin_panels_widget_classes', 'remove_panel_class');

function before_row_html($html, $grid, $grid_attributes) {
  // TODO!!!! ADD CONTAINER CENTERED IF THERE IS ONLY ONE COLUMN
  // TODO!!!!
  // TODO!!!!
  if(!empty($grid['style'])) {
    $custom_class = $grid['style']['class'];
  }

  return "<div class='full-width-row " . $custom_class . "'><div class='editorial-row row'>";
}

function after_row_html($html, $grid, $grid_attributes) {
  return "</div><!-- end editorial-row --></div><!-- end full-width-row -->";
}

add_filter('siteorigin_panels_before_row', 'before_row_html', 10, 3);
add_filter('siteorigin_panels_after_row', 'after_row_html', 10, 3);

function custom_theme_styles($styles) {
  return array(
    'blue' => 'blue color',
    'light-grey' => 'light grey'
  );
}

add_filter('siteorigin_panels_row_styles', 'custom_theme_styles');

?>
