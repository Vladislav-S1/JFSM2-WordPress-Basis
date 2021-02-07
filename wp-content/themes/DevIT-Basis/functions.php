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
    $content = '<section class="form-section-main">
        <div id="form-wrapper">
            <form method="post" id="form" enctype="multipart/form-data">
            <label for="name">ФИО
            <input title="Full name" type="text" name="name" pattern="[A-Za-z]{3,32}\s[A-Za-z]{3,32}\s[A-Za-z]{3,32}" id="name" />
            </label>
            <label for="email">E-mail
            <input title="Email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="mail" />
            </label>
            <label for="phone">Телефон
            <div class="phone-wrapper">
            <div class="phone-input-add">
            <input title="Phone number" type="tel" name="phone_0" id="phone" />
            <input id="add-phone-field" class="btn" type="submit" value="+" name="add_phone_field"/>
            </div>
            </div>
            </label>
            <label for="age">Возраст
            <input title="Age" type="number" min="1" max="100" name="age" id="age" />
            </label>
            <label for="photo">Фотография
            <input title="Photo" type="file" accept="image/*" name="photo" id="photo" />
            <div class="photo-drop">
            <img src="drag-and-drop.png" alt="drag-and-drop-img" />
            </div>
            </label>
            <label for="resume">Резюме
            <textarea title="Resume" name="resume" cols="40" rows="9"></textarea>
            </label>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="submit" value="Save" name="save_form" disabled="disabled" />
            </form>
        </div>
    </section>';
    return $content;
}


function devit2_contact_form_shortcode() {
$args   =   array(
'post_type'      => 'team',
'post_status'    => 'publish',
'posts_per_page' => 10,
);
$postslist = new WP_Query( $args );
$content = '<h1 class="meet_team_head_text">Shortcode here</h1>';
    
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
        $base_url_img = get_template_directory_uri();
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        echo '<div class="textwidget">';
        echo '<div class="contact-widget-string">';
        if ( ! empty( $instance['twitter'] ) ) {
            echo '<p class="Social-link-url"><a href="' . $instance['twitter'] . '"><img src="' . $base_url_img . '/icons/png/tweeter.png" width="40" height="40" border="0" alt="Twitter"></a></p>';
        }
        if ( ! empty( $instance['linkedin'] ) ) {
            echo '<p class="Social-link-url"><a href="' . $instance['linkedin'] . '"><img src="' . $base_url_img . '/icons/png/linkedin.png" width="40" height="40" border="0" alt="linkedin"></a></p>';
        }
        if ( ! empty( $instance['facebook'] ) ) {
            echo '<p class="Social-link-url"><a href="' . $instance['facebook'] . '"><img src="' . $base_url_img . '/icons/png/facebook.png" width="40" height="40" border="0" alt="facebook"></a></p>';
        }
        if ( ! empty( $instance['instagram'] ) ) {
            echo '<p class="Social-link-url"><a href="' . $instance['instagram'] . '"><img src="' . $base_url_img . '/icons/png/instagram.png" width="40" height="40" border="0" alt="instagram"></a></p>';
        }
        echo '</div>';
        echo '</div>';
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'SocialLinks', 'jfsm2' );
        $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
        $linkedin = ! empty( $instance['linkedin'] ) ? $instance['linkedin'] : '';
        $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
        $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : '';?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'jfsm2' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php echo esc_html__( 'twitter Url:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" ><?php echo esc_attr( $twitter ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>"><?php echo esc_html__( 'Linkedin Url:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedin' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedin' ) ); ?>" type="text" ><?php echo esc_attr( $linkedin ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php echo esc_html__( 'Facebook Url:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" ><?php echo esc_attr( $facebook ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php echo esc_html__( 'Linkedin Url:', 'jfsm2' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" ><?php echo esc_attr( $instagram ); ?></textarea>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
    $instance = array();
 
    $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['twitter'] = ( !empty( $new_instance['twitter'] ) ) ? $new_instance['twitter'] : '';
    $instance['linkedin'] = ( !empty( $new_instance['linkedin'] ) ) ? $new_instance['linkedin'] : '';
    $instance['facebook'] = ( !empty( $new_instance['facebook'] ) ) ? $new_instance['facebook'] : '';
    $instance['instagram'] = ( !empty( $new_instance['instagram'] ) ) ? $new_instance['instagram'] : '';
 
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
add_shortcode( 'devit_contact_form', 'devit_contact_form_shortcode' );  
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );    