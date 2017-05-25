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


function my_login_logo_pic()
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
add_action( 'login_enqueue_scripts', 'my_login_logo_pic' );

function my_login_logo_url()
{
        return home_url();
}

add_action( 'login_headerurl', 'my_login_logo_url' );

function hwl_home_pagesize($query)
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
add_action( 'pre_get_posts', 'hwl_home_pagesize', 1 );