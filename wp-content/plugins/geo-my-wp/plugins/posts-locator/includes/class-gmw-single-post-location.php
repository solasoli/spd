<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}

if ( ! class_exists( 'GMW_Single_Location' ) ) {
	return;
}

/**
 * GMW_Single_Post_Location Class extends GMW_Single_Location class
 * 
 * Display the location of a single post
 * 
 * @version 1.0
 * 
 * @author Eyal Fitoussi
 * 
 * @since 2.6.1
 */
class GMW_Single_Post_Location extends GMW_Single_Location {

	/**
	 * Extends the default shortcode atts
	 * @since 2.6.1
	 * Public $args
	 *
	 */
	protected $args = array(
		'elements'			=> 'title,address,map,distance,location_meta,directions_link',
		'object'			=> 'post',
		'prefix'	 		=> 'pt',
		'location_meta' 	=> 'address,phone,fax,email,website',
		'item_info_window'	=> 'title,address,distance,location_meta',
	);

	/**
	 * @since 2.6.1
	 * 
	 * Public $location_data
	 * 
	 * get the post location information from database
	 */
	public function location_data() {
	
		//check if user entered post id
		if ( empty( $this->args['object_id'] ) ) {
	
			$this->args['object_id'] = get_queried_object_id();
	
			if ( empty( $this->args['object_id'] ) ) {
				return;
			}
		}
		
		// get the post's location data
		$location_data = gmw_get_post_location_data( $this->args['object_id'] );
		
		return $location_data;
	}
		
	/**
	 * Get the post title
	 * 
	 * @return [type] [description]
	 */
	public function title() {
		$title     = ! empty( $this->location_data->post_title ) ? $this->location_data->post_title : get_the_title( $this->args['object_id'] ) ;
		$permalink = get_the_permalink( $this->args['object_id'] );
		
		return apply_filters( 'gmw_sl_title', "<h3 class=\"gmw-sl-title post-title gmw-sl-element\"><a href=\"{$permalink}\" title=\"{$title}\"'>{$title}</a></h3>", $this->location_data, $this->args, $this->user_position );
	}
}

/**
 * GMW Single post location shortcode
 * 
 * @version 2.0
 * 
 * @author Eyal Fitoussi
 */
function gmw_single_post_location_shortcode( $atts = array() ) {
	
	if ( empty( $atts ) ) {
		$atts = array();
	}
	
	$atts['object'] = 'post';

	if ( isset( $atts['post_id'] ) ) {
		$atts['object_id'] = $atts['post_id'];
	}

	$single_post_location = new GMW_Single_Post_Location( $atts );

	return $single_post_location->output();
}
add_shortcode( 'gmw_post_location', 'gmw_single_post_location_shortcode' );