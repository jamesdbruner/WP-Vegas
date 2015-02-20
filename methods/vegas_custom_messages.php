<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	global $post, $post_ID;
	$messages['vegas'] = array(
	0 => '', // Unused. Messages start at index 1.
	1 => sprintf( __('Slideshow updated.', 'wpvegas') ),
	2 => __('Custom Field updated.', 'wpvegas'),
	3 => __('Custom Field deleted.', 'wpvegas'),
	4 => __('Slideshow updated.', 'wpvegas'),
	/* translators: %s: date and time of the revision */
	5 => isset($_GET['revision']) ? sprintf( __('Slideshow restored to revision from %s', 'wpvegas'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	6 => sprintf( __('Slideshow published.', 'wpvegas') ),
	7 => __('Slideshow saved.', 'wpvegas'),
	8 => sprintf( __('Slideshow submitted.', 'wpvegas') ),
	9 => sprintf( __('Slideshow scheduled for: <strong>%1$s</strong>.', 'wpvegas'),
 	 // translators: Publish box date format, see http://php.net/date
  	date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
	10 => sprintf( __('Slideshow draft updated.', 'wpvegas') )
	);