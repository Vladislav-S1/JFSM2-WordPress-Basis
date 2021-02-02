<?php
function jfsm2_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'jfsm2' ),
        'mobile' => __( 'Mobile Menu', 'jfsm2' ),
    	'second' => __( 'Second Menu', 'jfsm2' ),
    ) );
    add_theme_support( 'html5', array(
        'comment-form', 'comment-list', 'gallery', 'caption'
    ) );
      add_theme_support( 'post-formats', array(
      'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    load_theme_textdomain('jfsm2', get_template_directory() . '/languages');
	add_theme_support( 'custom-background', apply_filters( 'jfsm2_custom_background_args', 
		array(
			'default-color'      => '#fff',
			'default-attachment' => 'fixed',
		)
	) );
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-footer-logo', $defaults );
	$args = array(
        'default-image'      => false,
        'default-text-color' => 'fff',
        'width'              => 1200,
        'height'             => 900,
        'flex-width'         => false,
        'flex-height'        => false,
    );
    add_theme_support( 'custom-header', $args );
}


function jfsm2_post_type_init() {
    $labels = array(
        'name'                  => _x( 'Team', 'Post type general name', 'jfsm2' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'jfsm2' ),
        'menu_name'             => _x( 'Team', 'Admin Menu text', 'jfsm2' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'jfsm2' ),
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
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'team', $args );

    $labels = array(
        'name'                  => _x( 'Transactions', 'Post type general name', 'jfsm2' ),
        'singular_name'         => _x( 'Transactions', 'Post type singular name', 'jfsm2' ),
        'menu_name'             => _x( 'Transactions', 'Admin Menu text', 'jfsm2' ),
        'name_admin_bar'        => _x( 'Transactions', 'Add New on Toolbar', 'jfsm2' ),
        'add_new'               => __( 'Add New', 'jfsm2' ),
        'add_new_item'          => __( 'Add New', 'jfsm2' ),
        'new_item'              => __( 'New', 'jfsm2' ),
        'edit_item'             => __( 'Edit', 'jfsm2' ),
        'view_item'             => __( 'View', 'jfsm2' ),
        'all_items'             => __( 'All', 'jfsm2' ),
        'search_items'          => __( 'Search', 'jfsm2' ),
        'parent_item_colon'     => __( 'Parent transactions:', 'jfsm2' ),
        'not_found'             => __( 'Not found.', 'jfsm2' ),
        'not_found_in_trash'    => __( 'Not found in Trash.', 'jfsm2' ),
        'featured_image'        => _x( 'Transactions Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'set_featured_image'    => _x( 'Set transactions image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'remove_featured_image' => _x( 'Remove transactions image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'use_featured_image'    => _x( 'Use as transactions image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'jfsm2' ),
        'archives'              => _x( 'Transactions archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'jfsm2' ),
        'insert_into_item'      => _x( 'Insert into transactions', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'jfsm2' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this transactions', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'jfsm2' ),
        'filter_items_list'     => _x( 'Filter transactions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'jfsm2' ),
        'items_list_navigation' => _x( 'Transactions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'jfsm2' ),
        'items_list'            => _x( 'Transactions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'jfsm2' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'transactions' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'transactions', $args );
    $labels = array(
        'name'              => _x( 'Transactions Types', 'taxonomy general name', 'jfsm2' ),
        'singular_name'     => _x( 'Transactions Type', 'taxonomy singular name', 'jfsm2' ),
        'search_items'      => __( 'Search Transactions Type', 'jfsm2' ),
        'all_items'         => __( 'All Transactions Type', 'jfsm2' ),
        'parent_item'       => __( 'Parent Transactions Type', 'jfsm2' ),
        'parent_item_colon' => __( 'Parent Transactions Type:', 'jfsm2' ),
        'edit_item'         => __( 'Edit Transactions Type', 'jfsm2' ),
        'update_item'       => __( 'Update Transactions Type', 'jfsm2' ),
        'add_new_item'      => __( 'Add New Transactions Type', 'jfsm2' ),
        'new_item_name'     => __( 'New Transactions Type Name', 'jfsm2' ),
        'menu_name'         => __( 'Transactions Type', 'jfsm2' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => false,
        'rewrite'           => array( 'slug' => 'transactions_types' ),
    );
    register_taxonomy( 'transactions_types', 'transactions', $args );
}


function jfsm2_add_meta_box() {
    add_meta_box(
        'team_meta_box_1',       // $id
        'Contacts',                  // $title
        'jfsm2_show_team_meta_box',  // $callback
        'team',                 // $page
        'normal',                  // $context
        'high'                     // $priority
    );
    add_meta_box(
        'pages_meta_box_1',       // $id
        'Header Block',                  // $title
        'jfsm2_show_pages_meta_box',  // $callback
        'page',                 // $page
        'normal',                  // $context
        'high'                     // $priority
    );
}


function jfsm2_show_team_meta_box() {
    global $post;

    $contact_info = get_post_meta(  $post->ID, 'jfsm2_contact_info', true );

    // Use nonce for verification to secure data sending
    wp_nonce_field( basename( __FILE__ ), 'jfsm2_our_nonce' );

    ?>

    <!-- my custom value input -->
    <p>
        <label for="email"><?php echo esc_html__( 'Email', 'jfsm2' ); ?>:</label>
        <input class="widefat" id="email" name="jfsm2_email" type="text" value="<?php echo isset( $contact_info['email'] ) ? esc_attr( $contact_info['email'] ) : ''; ?>">
    </p>
    <p>
       <label for="phone"><?php echo esc_html__( 'Phone:', 'jfsm2' ); ?></label>
        <input class="widefit" id="phone" name="jfsm2_phone" type="text" value="<?php echo isset( $contact_info['phone'] ) ? esc_attr( $contact_info['phone'] ) : ''; ?>">
    </p>

    <?php
}

function jfsm2_show_pages_meta_box() {
    global $post;

    $header_block = get_post_meta(  $post->ID, 'jfsm2_header_block', true );

    // Use nonce for verification to secure data sending
    wp_nonce_field( basename( __FILE__ ), 'jfsm2_our_nonce' );

    ?>

    <!-- my custom value input -->
    <p>
        <label for="header-block"><?php echo esc_html__( 'Content', 'jfsm2' ); ?>:</label>
        <textarea class="form-control" id="header-block" name="jfsm2_header_block" rows="3"><?php echo isset( $header_block ) ? esc_attr( $header_block ) : ''; ?></textarea>
    </p>

    <?php
}

function jfsm2_save_meta_fields( $post_id ) {

    // verify nonce
    if (!isset($_POST['jfsm2_our_nonce']) || !wp_verify_nonce($_POST['jfsm2_our_nonce'], basename(__FILE__))){
        return 'nonce not verified';
    }

    // check autosave
    if ( wp_is_post_autosave( $post_id ) ){
        return 'autosave';
    }

    //check post revision
    if ( wp_is_post_revision( $post_id ) ){
        return 'revision';  
    }
    $header_block = '';
    if( ! empty( $_POST['jfsm2_header_block'] ) ){
        $header_block = esc_html( trim( $_POST['jfsm2_header_block'] ) );
        update_post_meta( $post_id, 'jfsm2_header_block', $header_block );
    }

    $contact_info = array( 'email' => '', 'phone' => '' );
    if( ! empty( $_POST['jfsm2_email'] ) || ! empty( $_POST['jfsm2_phone'] ) ){
        if( ! empty( $_POST['jfsm2_email'] ) ) {
            $contact_info['email'] = esc_html( trim( $_POST['jfsm2_email'] ) );
        }
        if( ! empty( $_POST['jfsm2_phone'] ) ){
            $contact_info['phone'] = esc_html( trim( $_POST['jfsm2_phone'] ) );
        }
        update_post_meta( $post_id, 'jfsm2_contact_info', $contact_info );
    }  

    if( ! empty( $_POST['jfsm2_email'] ) || ! empty( $_POST['jfsm2_phone'] ) ){
        if( ! empty( $_POST['jfsm2_email'] ) ) {
            $contact_info['email'] = esc_html( trim( $_POST['jfsm2_email'] ) );
        }
        if( ! empty( $_POST['jfsm2_phone'] ) ){
            $contact_info['phone'] = esc_html( trim( $_POST['jfsm2_phone'] ) );
        }
        update_post_meta( $post_id, 'jfsm2_contact_info', $contact_info );
    }  
}

function jfsm2_register_widgets() {
	register_sidebar( array(
		'name'          => __( 'Header Sidebar', 'jfsm2' ),
		'id'            => 'header-sidebar',
		'description'   => __( 'Widgets for front-page header.', 'jfsm2' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar', 'jfsm2' ),
		'id'            => 'footer-sidebar',
		'description'   => __( 'Widgets for all pages on footer', 'jfsm2' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
	register_widget( 'jfsm2_Contact_Widget' );

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
}
function jfsm2_enqueue_style() {
    wp_enqueue_style( 'jfsm2_bootstrap_style',  get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
    wp_enqueue_style( 'fancybox_style',  get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), '0.1.0', 'all');
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'bootbox_script', get_template_directory_uri() . '/js/bootbox/bootbox.js', array( 'jquery' ) , '1.0', true );wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/jquery-3.5.1.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'jfsm2_script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_script( 'fancybox_script', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array( 'jquery' ) , '1.0', true );
    wp_enqueue_style( 'jfsm2_style', get_stylesheet_uri() );
}




function jfsm2_team_shortcode() {
    $args   =   array(
        'post_type'      => 'team',
        'post_status'    => 'publish',
        'posts_per_page' => 10,
    );
    $postslist = new WP_Query( $args );
    
    if ( $postslist->have_posts() ) :
        $content   .= '<div class="team-lists">
        <h1 class="meet_team_head_text">Meet Our Team</h1>
        <div class="row team_row">';    
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
            $contact_info = get_post_meta(  get_the_ID(), 'jfsm2_contact_info', true );
            $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );        
            $content    .= '<div class="team_part col-12 col-md-6 col-lg-3 text-center"><div class="items">';
            $content    .= '<a href="#inline_'.get_the_ID().'" class="various fancybox"><div class="team_img" style="background-image:url(' . $url . ')">';
            $content    .= '</div></a>';
            $content    .= '<div><p class="person">' . get_the_title() . '</p>';
            $content    .= '<p class="person_position">' . get_the_excerpt() . '</p></div>';
         


            $content    .= '<div class="hidden pop_up_window" id="inline_'.get_the_ID().'">
            <div class="row team_row_popup"><div class="col-md-5 col-12 photo_block"><img class="team-foto-img" src ="' . $url . '"></div>
	        <div class="col-md-7 col-12 about_team_member"> 
	        <h2>' . get_the_title() . '</h2>
	        <p class="member_position">' . get_the_excerpt() . '</p>
	        <p class="member_mail"><a href="mailto:' . $contact_info['email'] . ' "> ' . $contact_info['email'] . '</a></p>
	        <p class="member_phone"> ' . $contact_info['phone'] . ' </p>
	        <hr>
	        <div class="member_story">' . get_the_content() . '</div></div></div></div>';
            $content    .= '</div></div>';
        endwhile;
        wp_reset_postdata();
    endif;
    return $content;
}

function jfsm2_team_frontpage_shortcode() {
    $args   =   array(
        'post_type'      => 'team',
        'post_status'    => 'publish',
        'posts_per_page' => 10,
    );
    $postslist = new WP_Query( $args );
    
    if ( $postslist->have_posts() ) :
        $content   .= '<div class="team-lists">
        <div class="team-lists-head row"><h2 class="team_frontpage_heading col-6">Team</h2><p class="button-learn-more-2 col-12 col-sm-6"><a href="' . site_url() . '/teams/">Learn More</a></p></div>
        <p>Partnering with companies to create long term value for business owners, CEOs and investors</p>
        <div class="row">';    
        while ( $postslist->have_posts() ) : $postslist->the_post(); 
            $contact_info = get_post_meta(  get_the_ID(), 'jfsm2_contact_info', true );
            $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );        
            $content    .= '<div class="team_part col-12 col-sm-6 col-lg-3 text-center"><div class="items_frontpage">';
            $content    .= '<a href="#inline_'.get_the_ID().'" class="various fancybox"><div class="team_img_front" style="background-image:url(' . $url . ')"></div></a>';
            $content    .= '<div><p class="frontpage_person">' . get_the_title() . '</p>';
            $content    .= '<p class="frontpage_person_position">' . get_the_excerpt() . '</p></div>';
            $content    .= '<div class="hidden pop_up_window" id="inline_'.get_the_ID().'">
            <div class="row team_row_popup"><div class="col-md-5 col-12 photo_block"><img class="team-foto-img" src ="' . $url . '"></div>
            <div class="col-md-7 col-12 about_team_member"> 
            <h2>' . get_the_title() . '</h2>
            <p class="member_position">' . get_the_excerpt() . '</p>
            <p class="member_mail"><a href="mailto:' . $contact_info['email'] . ' "> ' . $contact_info['email'] . '</a></p>
            <p class="member_phone"> ' . $contact_info['phone'] . ' </p>
            <hr>
            <div class="member_story">' . get_the_content() . '</div></div></div></div>';
            $content    .= '</div></div>';
        endwhile;
        wp_reset_postdata();
        $content  .= '</div><script>(function($){$(document).ready(function(){$(".fancybox").fancybox();});})(jQuery)</script>';
    endif;
    return $content;
}

function jfsm2_transactions_shortcode() {
    $args   =   array(
        'post_type'             => 'transactions',
        'post_status'           => 'publish',
        'posts_per_page'        => 4,
        'ignore_sticky_posts'   => true,
        'orderby'               => 'date'
    );
    $custom_query = new WP_Query( $args );

        if ( $custom_query->have_posts() ) :
            $content         = '<div class="row transactions_frontpage_row">'; 
            while( $custom_query->have_posts() ) : $custom_query->the_post();

                $transaction_category = wp_get_post_terms( get_the_ID(), 'transactions_types', array( 'fields' => 'all' ) );
                $transaction_category_name = $transaction_category[0]->name;
                $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );

                $content    .=  '<div class="transactions_block col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">';
                $content    .=      '<article class="' . join( ' ', get_post_class( '', $post->ID ) ) . '">';
                $content    .=          '<div class="transaction_wrapper">';
                $content    .=              '<h5 class="transaction_category">' . $transaction_category_name . '</h5>';
                $content    .=              '<div class="post-featured-img transaction_img_wrapper">';
                $content    .=                  '<img src="' . $url  . ' ">';  
                $content    .=              '</div>';
                $content    .=              '<div class="transaction_content">' . get_the_content() . '</div>';
                $content    .=          '</div>';
                $content    .=      '</article>';      
                $content    .=  '</div>';            
                                        
            endwhile;
            wp_reset_postdata();
            $content        .= '</div>';
        endif;
    return $content;
}

class jfsm2_Contact_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'jfsm2_contact_widget',  // Base ID
            'Contact_widget'   // Name
        );
    }
 
    public $args = array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="textwidget">';
        echo '<span class="contact-widget-string">';
        echo esc_html__( $instance['address'], 'jfsm2' );
        echo '</span>';
 		echo '<span class="contact-widget-string">';
        echo esc_html__( $instance['phone'], 'jfsm2' );
        echo '</span>';
        echo '<span class="contact-widget-string">';
        echo esc_html__( $instance['email'], 'jfsm2' );
        echo '</span>';
        
        echo '</div>';
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Contacts', 'jfsm2' );
        $address = ! empty( $instance['address'] ) ? $instance['address'] : '';
        $phone = ! empty( $instance['phone'] ) ? $instance['phone'] : '';
        $email = ! empty( $instance['email'] ) ? $instance['email'] : '';
        
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'jfsm2' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
                <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Address' ) ); ?>"><?php echo esc_html__( 'Address:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $address ); ?></textarea>
        </p>
                <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>"><?php echo esc_html__( 'Phone:', 'jfsm2' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone' ) ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>">
        </p>
                <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php echo esc_html__( 'Email:', 'jfsm2' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>">
        </p>
        
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['address'] = ( !empty( $new_instance['address'] ) ) ? $new_instance['address'] : '';
        $instance['phone'] = ( !empty( $new_instance['phone'] ) ) ? $new_instance['phone'] : '';
        $instance['email'] = ( !empty( $new_instance['email'] ) ) ? $new_instance['email'] : '';
        
 
        return $instance;
    }
 
}
$title = '';
class jfsm2_SocialLinks_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'jfsm2_SocialLinks_widget',  // Base ID
            'SocialLinks widget'   // Name
        );
    }
 
    public $args = array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="textwidget">';
 		echo '<div class="contact-widget-string">';
        echo esc_html__( $instance['linkedin'], 'jfsm2' );
        echo '</div>';

        echo '</div>';
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'SocialLinks', 'jfsm2' );
        $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'jfsm2' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
                <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php echo esc_html__( 'Linkedin Url:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" ><?php echo esc_attr( $linkedin ); ?></textarea>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['linkedin'] = ( !empty( $new_instance['linkedin'] ) ) ? $new_instance['linkedin'] : '';
 
        return $instance;
    }
 
}
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}


add_action( 'after_setup_theme', 'jfsm2_setup' );
add_action( 'init', 'jfsm2_post_type_init' );
add_action('add_meta_boxes', 'jfsm2_add_meta_box');
add_action( 'save_post', 'jfsm2_save_meta_fields' );
add_action( 'widgets_init', 'jfsm2_register_widgets' );
add_action( 'wp_enqueue_scripts', 'jfsm2_enqueue_style' );
add_shortcode( 'jfsm2_team', 'jfsm2_team_shortcode' ); 
add_shortcode( 'jfsm2_team_frontpage', 'jfsm2_team_frontpage_shortcode' ); 
add_shortcode( 'jfsm2_transactions', 'jfsm2_transactions_shortcode' ); 
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );    