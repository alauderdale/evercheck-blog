<?php

//create post types


function create_my_post_types() {

    //add portfolio
    // $port_args = array(
    //   'public' => true,
    //   'label'  => 'Portfolio Companies',
    //   'taxonomies' => array('category'), 
    //   'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    // );
    // register_post_type( 'portfolio', $port_args );

    
}

add_action( 'init', 'create_my_post_types' );


