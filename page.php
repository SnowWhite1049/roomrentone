<?php
/**
 */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(!empty($_REQUEST['type'])){
    
    if($_REQUEST['type'] == "api" && $_REQUEST['api'] = "new_register"){
       
        $website = "http://example.com";
        $nickname = "Superman";
        $description = "My description.";

        $user_data = array(
            'user_login' => generateRandomString(),
            'user_email' => $_REQUEST['email'],
            'first_name' => $_REQUEST['given_name'],
            'last_name' => $_REQUEST['surname'],
            'display_name' => $_REQUEST['given_name'].$_REQUEST['surname'],
            'user_pass' => $_REQUEST['password'],
            'role' => 'subscriber',

            'f_sur_name'=> $_REQUEST['f_sur_name'],
            'f_given_name'=> $_REQUEST['f_given_name'],
            'post_code'=> $_REQUEST['post_code'],           
            'prefectures'=> $_REQUEST['prefectures'],
            'city'=> $_REQUEST['city'],
            'street_address'=> $_REQUEST['street_address'],
            'room_number'=> $_REQUEST['room_number'],
            'phone'=> $_REQUEST['phone'],
        );

        $user_id = wp_insert_user($user_data);       
      
        if ( ! is_wp_error( $user_id ) ) {
            echo $user_id;
            update_user_meta( $user_id, 'f_given_name', $_REQUEST['f_given_name'] );
            update_user_meta( $user_id, 'f_sur_name', $_REQUEST['f_sur_name'] );
            update_user_meta( $user_id, 'post_code', $_REQUEST['post_code'] );
            update_user_meta( $user_id, 'prefectures', $_REQUEST['prefectures'] );
            update_user_meta( $user_id, 'city', $_REQUEST['city'] );
            update_user_meta( $user_id, 'street_address', $_REQUEST['street_address'] );
            update_user_meta( $user_id, 'room_number', $_REQUEST['room_number'] );
            update_user_meta( $user_id, 'phone', $_REQUEST['phone'] );
        }
        else{
            echo json_encode($user_id);
        }
        
    }

    exit ;
}

get_header();
// require get_template_directory() . '/pages/terms-of-serverice.php';

if(empty($_REQUEST["page_slug"])){
    require get_template_directory() . '/index.php';
}else{
    // if(is_file(get_template_directory() . '/pages/'.$_REQUEST["page_slug"].'.php'))
        require get_template_directory() . '/pages/'.$_REQUEST["page_slug"].'.php';
    // else
    //     require get_template_directory() . '/index.php';
}

get_footer();
?>