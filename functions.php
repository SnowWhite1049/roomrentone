<?php
/**
 * Plugin Name: Add Custom Fields to User Profile Page
 * Description: How to Add Custom Fields to User Profile Page in WordPress.
 * Plugin URI: https://webkul.com/
 * Version: 1.0.0
 * Author: Webkul
 * Author URI: https://webkul.com/
 * Text Domain: webkul
 */
/**
 * Custom user profile fields.
 *
 * @param $user
 * @author Webkul
 */ 

function wk_custom_user_profile_fields( $user ) {
    echo '<h3 class="heading">Custom Fields</h3>';
    ?>

<table class="form-table">
    <tr>
        <th><label for="contact">フリガナ</label></th>
        <td>
            セイ<input type="text" name="f_given_name" id="f_given_name" style="width:100px"
                value="<?php echo esc_attr( get_the_author_meta( 'f_given_name', $user->ID ) ); ?>" class="regular-text" />
                メイ<input type="text" name="f_sur_name" id="f_sur_name"  style="width:100px"
                value="<?php echo esc_attr( get_the_author_meta( 'f_sur_name', $user->ID ) ); ?>" class="regular-text" />
        </td>
    </tr>   
    <tr>
        <th><label for="contact">郵便番号</label></th>
        <td>
        〒<input type="text" name="post_code" id="post_code" style="margin-left: 15px; width:100px"
                value="<?php echo esc_attr( get_the_author_meta( 'post_code', $user->ID ) ); ?>" class="regular-text" />

         <input type="button" style="margin-left: 28px;" value="住所検索" id="post_code_button"/>

        </td>
    </tr>
    <tr>
        <th><label for="contact">都道府県</label></th>
        <td> 
        <select class="form-select" name="prefectures" id="prefectures" style="margin-left: 28px;"></select>
        </td>
    </tr>
    
    <tr>
        <th><label for="contact">市区郡町村</label></th>
        <td>
            <input type="text" name="city" id="city" style="margin-left: 28px;"
                value="<?php echo esc_attr( get_the_author_meta( 'city', $user->ID ) ); ?>" class="regular-text" />
        </td>
    </tr>
    <tr>
        <th><label for="street_address">番地</label></th>
        <td>
            <input type="text" name="street_address" id="street_address" style="margin-left: 28px;"
                value="<?php echo esc_attr( get_the_author_meta( 'post_code', $user->ID ) ); ?>" class="regular-text" />
        </td>
    </tr>
    <tr>
        <th><label for="room_number">建物名・号室</label></th>
        <td>
            <input type="text" name="room_number" id="room_number" style="margin-left: 28px;"
                value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" />
        </td>
    </tr>

    <tr>
        <th><label for="phone">電話番号</label></th>
        <td>
            <input type="text" name="phone" id="phone" style="margin-left: 28px;"
                value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" />
        </td>
    </tr>

</table>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/json/tbl_prefecture_region.js"></script>
<script>
$(document).ready(async function() {

    console.log(prefecture);
    $.each(prefecture, function(key, value) {
        $('#prefectures')
            .append($("<option></option>")
                .attr("value", value.id)
                .text(value.jp_name));
    });

    let prefectures = [];
    $("#post_code_button").on("click", function() {
       
        var post_code = $("input[name=post_code]").val();
        $.get(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${post_code}`, function(data) {
            console.log(data)
            let result = JSON.parse(data).results[0]
            $("input[name=city]").val(result.address2);
            $("input[name=street_address]").val(result.address3);
            $("#prefectures").val(result.prefcode).change();
        });
    });

})

</script>
<?php
}

add_action( 'show_user_profile', 'wk_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'wk_custom_user_profile_fields' );
 
function my_save_user_profile_fields( $user_id ) {
  if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
    return;
  }
 
  if ( !current_user_can( 'edit_user', $user_id ) ) {
    return;
  }
 
  update_user_meta( $user_id, 'f_given_name', $_POST['f_given_name'] );
  update_user_meta( $user_id, 'f_sur_name', $_POST['f_sur_name'] );
  update_user_meta( $user_id, 'post_code', $_POST['post_code'] );
  update_user_meta( $user_id, 'prefectures', $_POST['prefectures'] );
  update_user_meta( $user_id, 'city', $_POST['city'] );
  update_user_meta( $user_id, 'street_address', $_POST['street_address'] );
  update_user_meta( $user_id, 'room_number', $_POST['room_number'] );
  update_user_meta( $user_id, 'phone', $_POST['phone'] );
}

add_action( 'personal_options_update', 'my_save_user_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_user_profile_fields' );

//login error redirect url

function custom_login_error_message($error) {
    // Check if the login page is being accessed
    if (strpos($_SERVER['REQUEST_URI'], 'wp-login.php') !== false) {
        // Modify the error message
        $error = 'Login failed. Please try again.';
        
        // Redirect to a custom URL after a failed login
        echo "fff";
        //wp_redirect(site_url().'');

        exit;
    }
    return $error;
}
add_filter('login_errors', 'custom_login_error_message');

// Custom login redirect after successful login
function custom_login_redirect($redirect_to, $request, $user) {
    // Check if the user is logging in from the default login page
    // if (isset($user->roles) && is_array($user->roles) && in_array('subscriber', $user->roles)) {
    //     // Redirect subscribers to a custom URL after successful login
    //     wp_redirect(site_url().'');
    // }
    // return $redirect_to;
    //wp_redirect(site_url().'');
    wp_redirect(site_url().'');
}
add_filter('login_redirect', 'custom_login_redirect', 10, 3);

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_safe_redirect( site_url() );
  exit;
}