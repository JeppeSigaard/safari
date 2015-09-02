<?php 
add_action( 'init', 'smamo_add_interessenter' );

function smamo_add_interessenter() {
	register_post_type( 'interessent', array(
		
        'menu_icon' 		 => 'dashicons-businessman',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'interessent' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Interessenter', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Iteressent', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Interessenter', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Interessenter', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'interessent', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny interessent', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se interessent', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find interessent', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny interessent.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}
