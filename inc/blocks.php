<?php

function antler_blocks() {
	wp_register_script(
		'antler-labs-blocks',
		esc_url( get_template_directory_uri() ) . '/blocks.js',
		array( 'wp-blocks', 'wp-element', 'underscore' )
	);

	register_block_type( 'antler-labs/block', array(
		'editor_script' => 'antler-labs-blocks'
	) );
}

add_action( 'init', 'antler_blocks' );

// Hide all but custom blocks
function antler_allowed_block_types( $allowed_block_types, $post ) {
	return array(
		'antler-labs/hero',
		'antler-labs/welcome',
		'antler-labs/puppies-available',
		'antler-labs/puppies-unavailable',
		'core/gallery'
		);
}

// add_filter( 'allowed_block_types', 'antler_allowed_block_types', 10, 2 );
