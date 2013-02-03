<?php 

	add_action( 'widgets_init', 'monTheme_sidebars' );
	add_action('after_setup_theme', 'monTheme_setup');
	add_action('init', 'create_post_type');
	add_action( 'init', 'add_myjavascript' );
	add_filter('excerpt_more', 'custom_excerpt_more');
	add_action('init','build_taxonomies');
	add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); // Remove query strings from static ressources (GTMetrix)
	add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


	function _remove_script_version( $src ){
	    $parts = explode( '?', $src );
	    return $parts[0];
	}

	function add_myjavascript(){ 
		wp_enqueue_script( 
		'script.js', 
		get_bloginfo('template_directory') 
		. "/scripts/script.js",
		array('jquery'));

		wp_enqueue_script( 
		'modernizr.js', 
		get_bloginfo('template_directory') 
		. "/scripts/modernizr.js",
		array('jquery'));

		wp_enqueue_script( 
		'jquery.simpletip-1.3.1.min.js', 
		get_bloginfo('template_directory') 
		. "/scripts/jquery.heplbox.js",
		array('jquery'));
	}
	
	if(! function_exists('monTheme_sidebars')){
		function monTheme_sidebars(){
			register_sidebar(
				array(
					'id' => 'primary',
					'name' => __('Primary'),
					'description' => __('Description de la sidebar'),
					'before_widget' => '<div id="%1$s"  class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
			register_sidebar(
				array(
					'id' => 'secondary',
					'name' => __('Secondary'),
					'description' => __('Description de la sidebar'),
					'before_widget' => '<div id="%1$s"  class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
				)
			);
		}	
	}
	
	if(! function_exists('monTheme_setup')){
		function monTheme_setup(){
			add_theme_support('post-thumbnails');
			add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
				if(! function_exists('add_image_size')){
					add_image_size('folio-work', 640, 480, false);
				}
			
			register_nav_menu('header_menu', __('Header Menu', ('titi')));
		}	
	}
	
	if(! function_exists('create_post_type')){
		function create_post_type(){
			register_post_type ('works',
				array(
					'labels' => array (
						'name' => __('Travaux'),
						'singular_name' =>__('Travail')
					),
					'supports' => array('title', 'editor', 'thumbnail', 'post-formats'),
					'public' => true,
					'has_archive' => true
					)
				);
				
			register_post_type('capacity',
			   array( 
			   	'labels' => array(
			   		'name'=> __('Compétences'), 
			   		'singular_name' => __('Compétence')),
			     'supports' => array('title', 'custom-fields', 'thumbnail', 'post-formats'),
			     'public'=> true,
			     'has_archive' => true)
			  );
				
			register_post_type ('icones',
			array(
				'labels' => array (
					'name' => __('Icones'),
					'singular_name' =>__('Icone')
				),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
				'public' => true,
				'has_archive' => true
				)
			);
		}
	}

	if(! function_exists('build_taxonomies')){
		function build_taxonomies(){
		register_taxonomy('categories', 'works', array
		    ('label' => 'Catégorie du travail',
		     'hierarchical' => true,
		      'query_var' => true,
		      'rewrite' => array('slug'=>'techniques'),
		      ));
		}
	}

	if(! function_exists('custom_excerpt_more')){
		function custom_excerpt_more($more) {
  		 	global $post;
   			return '… <br><a class="more link" title="' . get_the_title($post->ID) . '" href="' . get_permalink($post->ID) . '">' . 'Lire la suite »' . '</a>';
		}
	}

