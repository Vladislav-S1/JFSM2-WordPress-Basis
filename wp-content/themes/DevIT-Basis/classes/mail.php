<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
global $wpdb;
$array = $_POST;
 
$log = date('Y-m-d H:i:s') . ' ' . print_r($array, true);
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

if ( isset($_POST['save_form'] ) ) {
$array = (array)$_POST;
 
$log = date('Y-m-d H:i:s') . ' ' . print_r($array, true);
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
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
            foreach ( unserialize( $phone ) as $key => $number ) {
                if ( ! preg_match( '/^[0-9]{10,10}$/', $number ) ) {
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
        $phones = '';
       foreach ( unserialize( $phone ) as $key => $number ) {
                $phones .= '
                Phone ' . $key . ': ' . $number; 
            }
        $post_content = 'Name: ' . $name . '
                        Age: ' . $age . '
                        ' . $phones . '
                        Email: ' . $email . '
                        Resume: ' . $resume ;
        $post_data = array(
	        'post_title'    => $name,
	        'post_content'  => $post_content,
            'post_type' => 'devit_contact_form',
	        'post_status'   => 'private',
	        'post_author'   => 1,
	        'post_category' => array( 8,39 )
        );
        $added_post = wp_insert_post( $post_data );
        $filename = '/path/to/uploads/2013/03/filname.jpg';
        $filetype = wp_check_filetype( basename( $filename ), null );
        $wp_upload_dir = wp_upload_dir();
        $attachment = array(
	        'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
	        'post_mime_type' => $filetype['type'],
	        'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
	        'post_content'   => '',
	        'post_status'    => 'private'
        );
        wp_insert_attachment( $attachment, $filename, $added_post );
        unset( $_POST );
    
    } catch ( Exception $th ) {
        echo $th->getMessage();
    }
    require 'vendor/autoload.php';
    use Mailgun\Mailgun;
    $mgClient = new Mailgun('6ca86671a225cd51183c2b161a9c6549-77751bfc-0e82f13a');
    $domain = "https://app.mailgun.com/app/sending/domains/sandbox0aa8e8b42fed40d28d31d25741a0cca9.mailgun.org";
    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
	    'from'	=> 'Excited User <mailgun@sadchikovvladislav@gmail.com>',
	    'to'	=> 'Baz <YOU@sadchikovvladislav@gmail.com>',
	    'subject' => 'Hello',
	    'text'	=> 'Testing some Mailgun awesomness!'
    ));
    echo $result;
} ?>