<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	$column_shortcode = array( 'shortcode' => __('Shortcode', 'wpvegas') );
	$column_author = array( 'author' => __('Author', 'wpvegas') );
	$columns = array_slice( $columns, 0, 2, true ) + $column_shortcode + array_slice( $columns, 2, NULL, true );
	$columns = array_slice( $columns, 0, 3, true ) + $column_author + array_slice( $columns, 3, NULL, true );