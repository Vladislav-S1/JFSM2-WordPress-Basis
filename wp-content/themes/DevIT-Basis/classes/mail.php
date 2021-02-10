<?php
global $wpdb;
if ( isset($_POST['save_form'] ) ) {
    try {
        $upload_file = __DIR__ . '/uploads/' . basename( $_FILES['photo']['name'] );
        chmod( __DIR__ . '/uploads/', '0777' );
        if ( stristr( mime_content_type( $_FILES['photo']['tmp_name'] ), 'image' ) === false ) {
            throw new Exception( 'Invalid file extension' );
        }
        if ( ! move_uploaded_file( $_FILES['photo']['tmp_name'], $upload_file ) ) {
            throw new Exception( 'Please attach the file' );
        } 
        $counter = 0;
        $phones = [];
        $result = 'error';
        while ( isset( $_POST['phone_' . $counter] ) ) {
            $phones[] = $_POST['phone_' . $counter];
            $counter++;
        }
        $phone = serialize( $phones );
        $age = isset( $_POST['age'] ) ? $_POST['age'] : '';
        $name = isset( $_POST['name'] ) ? $_POST['name'] : '';
        $resume = isset( $_POST['resume'] ) ? $_POST['resume'] : '';
        $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
        if ( empty( $name ) ) {
            throw new Exception( 'Incorrect full name' );
        } else if ( ! empty( $phone ) ) {
            $error_flag = false;
            foreach ( unserialize( $phone ) as $key => number ) {
                if ( ! preg_match( '/^[0-9]{10,12}$/', number ) ) {
                    $error_flag = true;
                }
            }
            if ( $error_flag ) {
                throw new Exception( 'Incorrect phone number' );
            }
        } else if ( empty( $resume ) ) {
            throw new Exception( 'Incorrect resume' );
        } else if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) || empty( $email ) ) {
            throw new Exception( 'Email is not valid' );
        } else if ( empty( $age ) ) {
            throw new Exception( 'Incorrect age' );
        }

        $post_data = array(
	        'post_title'    => sanitize_text_field( $_POST['post_title'] ),
	        'post_content'  => $_POST['post_content'],
            'post_type' => 'devit_contact_form',
	        'post_status'   => 'privat',
	        'post_author'   => 1,
	        'post_category' => array( 8,39 )
        );
        wp_insert_post( $post_data );
        unset( $_POST );
    
    } catch ( Exception $th ) {
        echo $th->getMessage();
    }
    echo $result;
} ?>