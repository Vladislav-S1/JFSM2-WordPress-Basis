<?php
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
    }?>