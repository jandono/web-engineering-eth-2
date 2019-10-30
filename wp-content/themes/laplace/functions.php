<?php

add_theme_support('post-thumbnails');

function laplace_scripts() {
	wp_enqueue_style( 'laplace', get_template_directory_uri() . '/css/stylesheet.css' );
    
    wp_enqueue_style( 'kreon', "https://fonts.googleapis.com/css?family=Kreon");
    
    wp_enqueue_style( 'roboto', "https://fonts.googleapis.com/css?family=Roboto:100,700");
    
	wp_enqueue_script( 'jquery-viewport', get_template_directory_uri() . '/js/jquery.viewport.js', array('jquery'), '3.2.0', false);
    
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '3.2.0', false);
}

add_action( 'wp_enqueue_scripts', 'laplace_scripts' );

function my_enqueue() {
    wp_enqueue_script( 'my_custom_script',  get_template_directory_uri() . '/js/date_picker.js' );
}

add_action('admin_enqueue_scripts', 'my_enqueue');

function create_menu_item() {
	register_post_type( 'menu-item',
			array(
			'labels' => array(
					'name' => __( 'Menu Item' ),
					'singular_name' => __( 'Menu Item' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
                    'thumbnail',
				    'custom-fields'
			),
            'register_meta_box_cb' => 'add_menu_metaboxes'
	));
}
add_action( 'init', 'create_menu_item' );

function add_menu_metaboxes() {
    add_meta_box('wpt_menu_type', 'Menu Type', 'wpt_menu_type', 'menu-item', 'side', 'default');
}

function wpt_menu_type() {
    global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="menumeta_noncename" id="menumeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
    $menu_type = get_post_meta($post->ID, '_menu', true);
	
	// Echo out the field
	echo '<input type="text" name="_menu" value="' . $menu_type  . '" class="widefat" />';
}

// Save the Metabox Data

function wpt_save_menu_meta($post_id, $post) {
	
	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
        if ( !wp_verify_nonce( $_POST['menumeta_noncename'], plugin_basename(__FILE__) )) {
        return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	
	$menu_meta['_menu'] = $_POST['_menu'];
	
	// Add values of $events_meta as custom fields
	
	foreach ($menu_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}
}

add_action('save_post', 'wpt_save_menu_meta', 1, 2); // save the custom fields


function create_event_item() {
	register_post_type( 'event-item',
			array(
			'labels' => array(
					'name' => __( 'Event Item' ),
					'singular_name' => __( 'Event Item' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
                    'thumbnail',
				    'custom-fields'
			),
            'register_meta_box_cb' => 'add_event_metaboxes',
	));
}
add_action( 'init', 'create_event_item' );


function add_event_metaboxes() {
    add_meta_box('wpt_event_from', 'Date From', 'wpt_event_from', 'event-item', 'side', 'default');
    add_meta_box('wpt_event_to', 'Date To', 'wpt_event_to', 'event-item', 'side', 'default');
}

function wpt_event_from() {
    global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventfrommeta_noncename" id="eventfrommeta_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
    $event_from = get_post_meta($post->ID, '_event_from', true);
	
	// Echo out the field
	echo '<input type="text" name="_event_from" value="' . $event_from  . '" class="widefat" />';
}

function wpt_event_to() {
    global $post;
	
	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventtometa_noncename" id="eventtometa_noncename" value="' . 
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	
	// Get the location data if its already been entered
    $event_to = get_post_meta($post->ID, '_event_to', true);
	
	// Echo out the field
	echo '<input type="text" name="_event_to" value="' . $event_to  . '" class="widefat" />';
}

// Save the Metabox Data

function wpt_save_event_meta($post_id, $post) {
	
//	// verify this came from the our screen and with proper authorization,
//	// because save_post can be triggered at other times
//        if ( !wp_verify_nonce( $_POST['eventfrommeta_noncename'], plugin_basename(__FILE__) )) {
//        return $post->ID;
//	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.
	
	$event_meta['_event_from'] = $_POST['_event_from'];
    $event_meta['_event_to'] = $_POST['_event_to'];
	
	// Add values of $events_meta as custom fields
	
	foreach ($event_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}
}

add_action('save_post', 'wpt_save_event_meta', 1, 2); // save the custom fields


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//function wpdocs_excerpt_more( $more ) {
//    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
//        get_permalink( get_the_ID() ),
//        __( 'Read More', 'textdomain' )
//    );
//}
//add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function wpdocs_excerpt_more( $more ) {
    return '<span id="' . get_the_ID() . '" class="read-more"> [Read More]</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


//AJAX
add_action( 'wp_ajax_nopriv_get_events_after_date', 'get_events_after_date' );
add_action( 'wp_ajax_get_events_after_date', 'get_events_after_date' );

function get_events_after_date(){
    $date_from = $_POST['date_from'];
    date_default_timezone_set('Europe/Skopje');
    
    $args = array(
        'post_type' => 'event-item',
        'posts_per_page' => 4,
        'order' => 'desc',
        'meta_key' => 'date_from',
        'orderby' => 'meta_value',
        'meta_query' => array(
            array(
                'key' => 'date_from',
                'value' => $date_from,
                'compare' => '<'
            )
        )
    );

    $the_query = new WP_Query( $args );
    
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'content-past', get_post_type() );
        }
        /* Restore original Post Data */
        wp_reset_postdata(); 
    } else {
    // no posts found
    }   
    
    //echo $_POST['date_from'];
    wp_die();
}

add_action( 'wp_ajax_nopriv_get_event_info', 'get_event_info' );
add_action( 'wp_ajax_get_event_info', 'get_event_info' );

function get_event_info(){
    $post_id = $_POST['id'];
    
    $args = array(
        'post_type' => 'event-item',
        'posts_per_page' => 1,
        'p' => $post_id
    );

    $the_query = new WP_Query( $args );
    
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part( 'content-single', get_post_type() );
        }
        /* Restore original Post Data */
        wp_reset_postdata(); 
    } else {
    // no posts found
    } 
    
    wp_die();
}