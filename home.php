<?php

//* Add Featured Image In the Entry Header
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 8 );

//* Move Post Info above entry_title
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action('genesis_entry_header', 'genesis_post_info', 9 );



remove_action( 'genesis_after_endwhile', 'genesis_posts_nav' );


genesis();
