<?php
/**
 * Custom post types and taxonomies
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//story custom post type

// Register Custom Post Type story
// Post Type Key: story

function create_story_cpt() {

  $labels = array(
    'name' => __( 'Stories', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Story', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Story', 'textdomain' ),
    'name_admin_bar' => __( 'Story', 'textdomain' ),
    'archives' => __( 'Story Archives', 'textdomain' ),
    'attributes' => __( 'Story Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Story:', 'textdomain' ),
    'all_items' => __( 'All stories', 'textdomain' ),
    'add_new_item' => __( 'Add New Story', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Story', 'textdomain' ),
    'edit_item' => __( 'Edit Story', 'textdomain' ),
    'update_item' => __( 'Update Story', 'textdomain' ),
    'view_item' => __( 'View Story', 'textdomain' ),
    'view_items' => __( 'View stories', 'textdomain' ),
    'search_items' => __( 'Search stories', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into story', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this story', 'textdomain' ),
    'items_list' => __( 'Story list', 'textdomain' ),
    'items_list_navigation' => __( 'Story list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Story list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'story', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'story', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_story_cpt', 0 );


//external custom post type

// Register Custom Post Type external
// Post Type Key: external

function create_external_cpt() {

  $labels = array(
    'name' => __( 'Externals', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'External', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'External', 'textdomain' ),
    'name_admin_bar' => __( 'External', 'textdomain' ),
    'archives' => __( 'External Archives', 'textdomain' ),
    'attributes' => __( 'External Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'External:', 'textdomain' ),
    'all_items' => __( 'All Externals', 'textdomain' ),
    'add_new_item' => __( 'Add New External', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New External', 'textdomain' ),
    'edit_item' => __( 'Edit External', 'textdomain' ),
    'update_item' => __( 'Update External', 'textdomain' ),
    'view_item' => __( 'View External', 'textdomain' ),
    'view_items' => __( 'View Externals', 'textdomain' ),
    'search_items' => __( 'Search Externals', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into external', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this external', 'textdomain' ),
    'items_list' => __( 'External list', 'textdomain' ),
    'items_list_navigation' => __( 'External list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter External list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'external', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'external', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_external_cpt', 0 );



add_action( 'init', 'create_tool_taxonomies', 0 );
function create_tool_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tools', 'taxonomy general name' ),
    'singular_name' => _x( 'tool', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tools' ),
    'popular_items' => __( 'Popular Tools' ),
    'all_items' => __( 'All Tools' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tools' ),
    'update_item' => __( 'Update tool' ),
    'add_new_item' => __( 'Add New tool' ),
    'new_item_name' => __( 'New tool' ),
    'add_or_remove_items' => __( 'Add or remove Tools' ),
    'choose_from_most_used' => __( 'Choose from the most used Tools' ),
    'menu_name' => __( 'tool' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('tools',array('post','external','story'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tool' ),
    'show_in_rest'          => true,
    'rest_base'             => 'tool',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_theme_taxonomies', 0 );
function create_theme_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Themes', 'taxonomy general name' ),
    'singular_name' => _x( 'theme', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Themes' ),
    'popular_items' => __( 'Popular Themes' ),
    'all_items' => __( 'All Themes' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Themes' ),
    'update_item' => __( 'Update theme' ),
    'add_new_item' => __( 'Add New theme' ),
    'new_item_name' => __( 'New theme' ),
    'add_or_remove_items' => __( 'Add or remove Themes' ),
    'choose_from_most_used' => __( 'Choose from the most used Themes' ),
    'menu_name' => __( 'theme' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('Themes',array('post','external','story'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'theme' ),
    'show_in_rest'          => true,
    'rest_base'             => 'theme',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}


add_action( 'init', 'create_position_taxonomies', 0 );
function create_position_taxonomies()
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Positions', 'taxonomy general name' ),
    'singular_name' => _x( 'position', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Positions' ),
    'popular_items' => __( 'Popular Positions' ),
    'all_items' => __( 'All Positions' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Positions' ),
    'update_item' => __( 'Update position' ),
    'add_new_item' => __( 'Add New position' ),
    'new_item_name' => __( 'New position' ),
    'add_or_remove_items' => __( 'Add or remove Positions' ),
    'choose_from_most_used' => __( 'Choose from the most used Positions' ),
    'menu_name' => __( 'position' ),
  );

//registers taxonomy specific post types - default is just post
  register_taxonomy('positions',array('story'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'position' ),
    'show_in_rest'          => true,
    'rest_base'             => 'position',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_nav_menus' => true,    
  ));
}

//save acf json
				add_filter('acf/settings/save_json', 'he_obv_json_save_point');
				 
				function he_obv_json_save_point( $path ) {
				    
				    // update path
				    $path = get_stylesheet_directory(__FILE__) . '/acf-json'; //replace w get_stylesheet_directory() for theme
				    
				    
				    // return
				    return $path;
				    
				}
		
		
				// load acf json
				add_filter('acf/settings/load_json', 'he_obv_json_load_point');
		
				function he_obv_json_load_point( $paths ) {
				    
				    // remove original path (optional)
				    unset($paths[0]);
				    
				    
				    // append path
				    $paths[] = get_stylesheet_directory(__FILE__)  . '/acf-json';//replace w get_stylesheet_directory() for theme
				    
				    
				    // return
				    return $paths;
				    
				}