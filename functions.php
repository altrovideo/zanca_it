<?php
/* Write your awesome functions below */
add_action( 'wp_enqueue_scripts', 'zanca_enqueue_styles' );
function zanca_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/**
* Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	$mysiteurl = get_site_url();

	register_sidebar( array(
		'name'          => 'left box',
		'id'            => 'left_box',
		'before_widget' => '<div class="left-box expander_training"><!a href="' .$mysiteurl. '/training"><a href="#">',
		'after_widget'  => '</a></div>',
		'before_title'  => '<h2 class="boxi-rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(array(
		'name'          => 'right box',
		'id'            => 'right_box',
		'before_widget' => '<div class="right-box expander_support"><!a href="' .$mysiteurl. '/support"><a href="#">',
		'after_widget'  => '</a></div>',
		'before_title'  => '<h2 class="boxi-rounded">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => 'center box',
		'id'            => 'center_box',
		'before_widget' => '<div class="center-box expander_ecommerce"><!a href="' .$mysiteurl. '/ecommerce"><a href="#">',
		'after_widget'  => '</a></div>',
		'before_title'  => '<h2 class="boxi-rounded">',
		'after_title'   => '</h2>',
	));

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Filter the excerpt length to 50 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function zanca_excerpt_length($length) {
	return 50;
}
add_filter( 'excerpt_length', 'zanca_excerpt_length');




