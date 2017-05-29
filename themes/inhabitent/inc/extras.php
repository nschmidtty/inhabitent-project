<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
		// Adds a class of group-blog to blogs with more than 1 published author.
		if (is_multi_author()) {
				$classes[] = 'group-blog';
		}

		return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function change_login_logo_pic()
{
		echo '<style type="text/css"> 
body.login div#login h1 a {
	background-image: url(' . get_template_directory_uri() . './meida/logos/inhabitent-logo-text-dark.svg);
	background-size: 300px 53px !important;
	width: 300px;
	height: 53px;
} 
#login .button.button-primary{
		background-color: #248A83;
	}
</style>';
}
add_action( 'login_enqueue_scripts', 'change_login_logo_pic' );

function change_login_logo_url()
{
				return home_url();
}

add_action( 'login_headerurl', 'change_login_logo_url' );

function products_home_pagesize($query)
{
		if (is_admin() || ! $query->is_main_query()) {
				return;
		}

		if ((is_post_type_archive( 'products' )) || $query->is_tax('product-type')) {
				$query->set( 'posts_per_page', 16 );
				$query->set( 'order', 'ASC' );
				$query->set( 'orderby', 'title' );
				return;
		}
}
add_action( 'pre_get_posts', 'products_home_pagesize', 1 );

function archive_title_filter($title)
{
		if (is_post_type_archive('products')) {
				$title = 'Shop Stuff';
		} elseif (is_tax()) {
				$title = single_term_title( '', false );
		}
	
		return $title;
}
 
add_filter( 'get_the_archive_title', 'archive_title_filter' );

function about_background()
{
		wp_enqueue_style(
				'custom-style',
				get_template_directory_uri() . 'build/css/style.min.css'
		);
				$background = CFS()->get( 'hero_image' ); //E.g. #FF0000
				$custom_css = "
								.about-header{
												background-image: url({$background});
								}";
				wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'about_background' );