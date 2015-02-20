<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    // Filters to customize admin menu entry 
	$admin_menu_entry_name = apply_filters( 'wpvegas_admin_menu_entry_name', __( 'WP Vegas', 'wpvegas' ) );
	$admin_menu_icon = apply_filters( 'wpvegas_admin_menu_icon', 'dashicons-format-gallery' );
	register_post_type( 'vegas',
	array(
	'menu_icon' => $admin_menu_icon,
	'labels' => array(
	'name' => __( 'Vegas Slideshows', 'wpvegas' ),
	'singular_name' => __( 'Slideshow', 'wpvegas' ),
	'menu_name' => $admin_menu_entry_name,
	'all_items' => __( 'View Slideshows', 'wpvegas' ),
	'add_new' => _x('Add Slideshow', 'Slideshow', 'wpvegas'),
	'add_new_item' => __('New Slideshow', 'wpvegas'),
	'edit_item' => __('Edit Slideshow', 'wpvegas'),
	'new_item' => __('New Slideshow', 'wpvegas'),
	'view_item' => __('View Slideshow', 'wpvegas'),
	'search_items' => __('Search Your Slideshows', 'wpvegas'),
	'not_found' =>  __('Nothing found', 'wpvegas'),
	'not_found_in_trash' => __('Nothing found in Trash', 'wpvegas'),
	),
	'public' => false,
	'has_archive' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => _x('vegas_slideshows', 'URL Slug', 'wpvegas') ),
	'capability_type' => 'post',
	'supports' => array('title'),
	'taxonomies' => array( 'slideshow')));