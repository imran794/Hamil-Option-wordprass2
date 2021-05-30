<?php



require_once(get_template_directory().'/inc/enqueue.php');


function theme_setpu()
{
	load_theme_textdomain('imran',get_template_directory_uri(),'/language');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails' ,array('slider','team','testimonial'));



	register_nav_menus(array(
		'primary_menu'				=> __('Primary Menu','imran'),
		'footer_menu'				=> __('Footer Menu','imran')
	));
}
add_action('after_setup_theme','theme_setpu');


// custom post

function imran_custom_posts()
{
	register_post_type('slider',array(
		'labels'			=> array(
			'name'				=> __('Slider','imran'),
		   'singular_name'	    => __('Slider','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author', 'thumbnail')
	));

	register_post_type('Services',array(
		'labels'			=> array(
			'name'				=> __('Services','imran'),
		   'singular_name'	    => __('Services','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author')
	));
	register_post_type('team',array(
		'labels'			=> array(
			'name'				=> __('Teams','imran'),
		   'singular_name'	    => __('Team','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author','thumbnail')
	));

	register_post_type('testimonial ',array(
		'labels'			=> array(
			'name'				=> __('Testimonials','imran'),
		   'singular_name'	    => __('Testimonial','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author','thumbnail')
	));
}
add_action('init','imran_custom_posts');



?>