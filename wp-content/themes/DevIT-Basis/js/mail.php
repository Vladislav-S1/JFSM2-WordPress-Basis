<?php
global $wpdb;
update_option( 'my_option', 'what12' );
$log = date('Y-m-d H:i:s') . $_POST;
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
if ( isset($_POST['save_form'] ) ) {
update_option( 'my_option', 'what1222' );


    try {
        //upload photo
        $counter = 0;
        $phones = [];
        $phone = '';
        var_dump($phones, '1');
        $result = 'error';
        while ( isset( $_POST['phone_' . $counter] ) ) {
            $phones[] = $_POST['phone_' . $counter];
            $counter++;
        }
        var_dump($phones, '1');
        $phone = serialize( $phones );
        var_dump($phone, '1');
        $age = isset( $_POST['age'] ) ? $_POST['age'] : '';
        $name = isset( $_POST['name'] ) ? $_POST['name'] : '';
        $resume = isset( $_POST['resume'] ) ? $_POST['resume'] : '';
        $email = isset( $_POST['email'] ) ? $_POST['email'] : '';
        if ( empty( $name ) ) {
            throw new Exception( 'Incorrect full name' );
        } else if ( ! empty( $phone ) ) {
            $error_flag = false;
            //foreach ( unserialize( $phone ) as $key => number ) {
                //if ( ! preg_match( '/^[0-9]{10,12}$/', number ) ) {
                 //   $error_flag = true;
                //}
            //}
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
        $post_content = 'sjkfhksjdhkjsdfd';
        $post_data = array(
	        'post_title'    => $name,
	        'post_content'  => $post_content,
            'post_type' => 'devit_contact_form',
	        'post_status'   => 'private',
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