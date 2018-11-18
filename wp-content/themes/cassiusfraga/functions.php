<?php
//Adiciona suporte a Post Thumbnails no Tema
// add_theme_support( ‘post-thumbnails’ );
// add_image_size( 'thumbnail-news', '100', '75', true );

// Define the version so we can easily replace it throughout the theme
define( 'cassius', 1.0 );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support('post-thumbnails', array('post','page')); //Ativa o thumbnails nos Post Types 'post' e 'page'.
add_theme_support('post-thumbnails', array('blog')); //Ativa o thumbnails SOMENTE no Post Type 'produto'.
add_theme_support( 'post-thumbnails'); //Ativa o thumbnails em TODOS os Post Types


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 60 );


/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function cassius() {
    register_sidebar(array(             // Start a series of sidebars to register
        'id' => 'sidebar',                  // Make an ID
        'name' => 'Sidebar',                // Name it
        'description' => 'Take it on the side...', // Dumb description for the admin side
        'before_widget' => '<div>', // What to display before each widget
        'after_widget' => '</div>', // What to display following each widget
        'before_title' => '<h3 class="side-title">',    // What to display before each widget's title
        'after_title' => '</h3>',       // What to display following each widget's title
        'empty_title'=> '',                 // What to display in the case of no title defined for a widget
        // Copy and paste the lines above right here if you want to make another sidebar, 
        // just change the values of id and name to another word/name
    ));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'cassius' );

if ( function_exists('register_sidebars') )
    register_sidebars(1);

add_theme_support( 'title-tag' );

//Função para assets
function asset($path)
{
    return get_template_directory_uri() . '/' . $path;
}
//Adicionandos posts customizados
function add_post_types()
{

    register_post_type('about',
        array(
            'labels' => array(
                'name' => __('About'),
                'singular_name' => __('about')
            ),
            'public' => true,
            'menu_position' => 102,
            'has_archive' => true,
            'rewrite' => array('slug' => 'about'),
        )
    );

    register_post_type('contatos',
        array(
            'labels' => array(
                'name' => __('Contatos'),
                'singular_name' => __('contatos')
            ),
            'public' => true,
            'menu_position' => 105,
            'has_archive' => true,
            'rewrite' => array('slug' => 'contatos'),
        )
    );

}

add_action('init', 'add_post_types');


function post_type_archive_slug( $prefix = '') {
	if ( ! is_post_type_archive() )
		return;
	$post_type = get_query_var( 'post_type' );
	if ( is_array( $post_type ) )
		$post_type = reset( $post_type );

	$post_type_obj = get_post_type_object( $post_type );

	/**
	 * Filters the post type archive title.
	 *
	 * @since 3.1.0
	 *
	 * @param string $post_type_name Post type 'name' label.
	 * @param string $post_type      Post type.
	 */
	$title = apply_filters( 'post_type_archive_title', $post_type_obj->name, $post_type );
	
  return $prefix . $title;
}

