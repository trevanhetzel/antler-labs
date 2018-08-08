<?php

add_action( 'init', 'create_post_types' );

function create_post_types() {
	register_post_type( 'studs',
		array(
			'labels' => array(
				'name' => __( ' Studs ' ),
				'singular_name' => __( 'Stud' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);

	register_post_type( 'females',
		array(
			'labels' => array(
				'name' => __( ' Females ' ),
				'singular_name' => __( 'Female' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}

?>
