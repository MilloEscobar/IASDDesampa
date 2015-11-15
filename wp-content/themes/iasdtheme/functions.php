<?php 


function paginate() {
global $wp_query, $wp_rewrite;
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

$pagination = array(
    'base' => @add_query_arg('page','%#%'),
    'format' => '',
    'total' => $wp_query->max_num_pages,
    'current' => $current,
    'show_all' => true,
    'type' => 'plain',
    'next_text' => '&raquo; Siguiente',
    'prev_text' => '&laquo; Anterior'
    );

if( $wp_rewrite->using_permalinks() )
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 'page', get_pagenum_link( 1 ) ) ) . '?page=%#%/', 'paged' );

if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

echo paginate_links( $pagination );
}

	
add_filter( 'show_admin_bar', '__return_false' );

function apk_load_styles() {
	wp_register_style('theme_style', get_stylesheet_uri(),'','1.0','all');
	wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts','apk_load_styles');

function apk_register_sidebars() {
	register_sidebar(array(
		'name' => __('Sidebar principal' , 'apk'),
		'id'   => 'main_sidebar',
		'description' => __('Este es elidebar principal' , 'apk'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<h3 class="category-title">',
		'after_title' => '</h3>'
		));
}
add_action('widgets_init','apk_register_sidebars');
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 470,370,true);
add_image_size('list_articles_thumbs', 215,132,true);
add_image_size('articles_thumbs', 1280,620,true);
add_image_size('home_thumbs', 1600,620,true);




?>
