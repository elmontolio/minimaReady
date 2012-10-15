<?php
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}


  add_theme_support( 'post-thumbnails', array( 'post' ) );
  
  
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'La Barra Lateral',
'before_widget' => '<div class="sidebar_single">',
'after_widget' => '</div> ',
'before_title' => '<h3> 	',
'after_title' => '</h3> ',
));
?>
