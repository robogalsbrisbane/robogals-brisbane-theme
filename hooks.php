<?php

/**
 * Contains the custom hooks
 */

/**
 * Create post type for sponsors
 */
function create_sponser_posttype() {
	register_post_type('sponsors',
		array(
			'labels' => array(
				'name' => __('Sponsors'),
				'singular_name' => __('Sponsor')
			),
			'public' => true,
			'show_in_rest' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'sponsors' ),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			)
		)
	);
}
add_action('init', 'create_sponser_posttype');

/**
 * Create the post type for exec members
 */
function create_exec_posttype() {
	register_post_type('executives',
		array(
			'labels' => array(
				'name' => __('Executives'),
				'singular_name' => __('Executive')
			),
			'public' => true,
			'show_in_rest' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'executives'),
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		)
	);
}
add_action('init', 'create_exec_posttype');
