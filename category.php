<?php
/**
 * Category Template
 */

remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
//Remove Default Featured Image
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

//Move Post Info to after the featured image
//remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
//add_action( 'genesis_entry_header', 'genesis_post_info', 8);

//Move Post Title
remove_action( 'genesis_entry_header', 'genesis_do_post_title', 10 );
add_action( 'genesis_entry_content', 'genesis_do_post_title', 5 );

add_action( 'genesis_entry_header', 'amd_category_featured_images' );

function amd_category_featured_images() {
	

	//Add New Featured Image
	if ( $image = genesis_get_image( 'format=url&size=category' ) ) {
		printf( '<a href="%s" rel="bookmark"><img class="post-photo" src="%s" alt="%s" /></a>', get_permalink(), $image, the_title_attribute( 'echo=0' ) );
	}
}

genesis();
