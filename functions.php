<?php
register_nav_menus( array(
'menu' => 'Menu superior',
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'slider_thumbs', 470, 300, true );
add_image_size( 'list_articles_thumbs', 450, 370, true  );

/**
 * Creates a sidebar
 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 */

register_sidebar( array(
	'name'          => 'Sidebar',
	'id'            => 'sidebar-id',
	'before_widget' => '<section id="%1$s" class="widget">',
	'after_widget'  => '</section>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
) );

register_sidebar( array(
	'name'          => 'Footer',
	'id'            => 'footer-id',
	'before_widget' => '<section id="%1$s" class="widget">',
	'after_widget'  => '</section>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
) );

?>