<?php
function jfsm2_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'jfsm2' ),
        'mobile' => __( 'Mobile Menu', 'jfsm2' ),
        'footer' => __( 'Footer Menu', 'jfsm2' ),
    ) );
    add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
    add_theme_support( 'post-formats', array(
        'aside', 
        'image', 
        'video', 
        'quote', 
        'link', 
        'gallery', 
        'status', 
        'audio', 
        'chat'
    ) );
    load_theme_textdomain('jfsm2', get_template_directory() . '/languages');
    add_theme_support( 'custom-background', apply_filters( 'jfsm2_custom_background_args', 
        array(
            'default-color'      => '#fff',
            'default-attachment' => 'fixed',
        )
    ) );
    $logo_width  = 300;
	$logo_height = 100;
	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-header', $defaults );
}


function jfsm2_post_type_init() {
    $labels = array(
        'name'                  => _x( 'devit_contact_form', 'Post type general name', 'jfsm2' ),
        'singular_name'         => _x( 'devit_contact_form', 'Post type singular name', 'jfsm2' ),
        'menu_name'             => _x( 'devit_contact_form', 'Admin Menu text', 'jfsm2' ),
        'name_admin_bar'        => _x( 'devit_contact_form', 'Add New on Toolbar', 'jfsm2' ),
        'add_new'               => __( 'Add New', 'jfsm2' ),
        'add_new_item'          => __( 'Add New', 'jfsm2' ),
        'new_item'              => __( 'New', 'jfsm2' ),
        'edit_item'             => __( 'Edit', 'jfsm2' ),
        'view_item'             => __( 'View', 'jfsm2' ),
        'all_items'             => __( 'All', 'jfsm2' ),
        'search_items'          => __( 'Search', 'jfsm2' ),
        'parent_item_colon'     => __( 'Parent Teams:', 'jfsm2' ),
        'not_found'             => __( 'Not found.', 'jfsm2' ),
        'not_found_in_trash'    => __( 'Not found in Trash.', 'jfsm2' ),
        'featured_image'        => _x( 'Team Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'set_featured_image'    => _x( 'Set team image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'remove_featured_image' => _x( 'Remove team image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'use_featured_image'    => _x( 'Use as team image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'archives'              => _x( 'Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'jfsm2' ),
        'insert_into_item'      => _x( 'Insert into team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'jfsm2' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'jfsm2' ),
        'filter_items_list'     => _x( 'Filter teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'jfsm2' ),
        'items_list_navigation' => _x( 'Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'jfsm2' ),
        'items_list'            => _x( 'Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'jfsm2' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => array( 'slug' => 'devit_contact_form' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
    );
 
    register_post_type( 'devit_contact_form', $args );
}
 
function load_jfsm2_textdomain(){
	load_theme_textdomain( 'jfsm2', get_template_directory() . '/languages' );
}

function jfsm2_register_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'jfsm2' ),
        'id'            => 'footer-sidebar',
        'description'   => __( 'Widgets for all pages on footer', 'jfsm2' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar2', 'jfsm2' ),
        'id'            => 'footer-sidebar2',
        'description'   => __( 'Widgets for all pages on footer', 'jfsm2' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_widget( 'jfsm2_SocialLinks_Widget' );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar3', 'jfsm2' ),
        'id'            => 'footer-sidebar3',
        'description'   => __( 'Widgets for all pages on footer', 'jfsm2' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
function jfsm2_enqueue_style() {
    wp_enqueue_style( 'jfsm2_bootstrap_style',  get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'bootbox_script', get_template_directory_uri() . '/js/bootbox/bootbox.js', array( 'jquery' ) , '1.0', true );wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/jquery-3.5.1.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'jfsm2_script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'fancybox_script', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_style( 'jfsm2_style', get_template_directory_uri() . '/style.css', array(), '0.1.0', 'all' );
}

function devit_contact_form_shortcode() {
    require_once( dirname(__FILE__) .  '/classes/contact_form.php');
    $content = get_contact_form_shortcode();
    return $content;
}

class jfsm2_SocialLinks_Widget extends WP_Widget {
    require_once( dirname(__FILE__) .  '/classes/SocialLinks_Widget.php');
}
function jfsm2_add_admin_menu() {
	add_menu_page( 'Contact Form', 'Contact Form', 'edit_others_posts', 'contact_form_slug', 'jfsm2_admin_page_function', get_template_directory_uri(  ) . '/icons/png/buddicons-buddypress-logo.svg', 6 );
}
function jfsm2_admin_page_function(){
    require_once __DIR__ . '/classes/class-Contacts_List_Table.php';?>
    <div class="wrap">
	    <h1 class="wp-heading-inline"> <?php _e( 'Contact Form', 'wp-appointments-doctor' ); ?> </h1>
	    <form action="" method="POST"><?php
		    $doc_list = new Example_List_Table();
		    $doc_list->prepare_items();
		    $doc_list->display(); ?>
	    </form>
    </div><?php
    echo '4324234';
}


add_action( 'after_setup_theme', 'jfsm2_setup' );
add_action( 'init', 'jfsm2_post_type_init' );
add_action('after_setup_theme', 'load_jfsm2_textdomain');
add_action( 'widgets_init', 'jfsm2_register_widgets' );
add_action( 'wp_enqueue_scripts', 'jfsm2_enqueue_style' );
add_shortcode( 'devit_contact_form', 'devit_contact_form_shortcode' );  
add_action( 'admin_menu', 'jfsm2_add_admin_menu', 50 );  