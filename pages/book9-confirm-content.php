<?php
global $wpdb;
date_default_timezone_set('Asia/Tokyo');
$service_id = 1;
$customer_id = 1;
$date = date('2024-02-26');
$start_at = '2024-02-26 05:00:00';
$end_at = '2024-02-26 05:30:00';
$payment_gateway = 'card';
$paid_amount = 1300;
$due_amount = 1300;


// $sql = "SELECT * FROM wp_booking_availability WHERE service_id = 1 and date = '" . $currentDate . "'";

$table = $wpdb->prefix . 'booking_appointment';

$data = array(
  'customer_id' => $customer_id,
  'service_id' => $service_id,
  'payment_gateway' => $payment_gateway,
  'date' => $date,
  'start_at' => $start_at,
  'end_at' => $end_at,
  'paid_amount' => $paid_amount,
  'due_amount' => $due_amount,
);

$format = array( '%d', '%d', '%s', '%s', '%s', '%s', '%f', '%s');

$wpdb->insert($table,$data,$format);


?>
<script>
$(document).ready(function() {
    var service_id = localStorage.getItem('service_id');
    var start_date = localStorage.getItem('start_date');
    var start_at = localStorage.getItem('start_at');
    var start_end = localStorage.getItem('start_end');
    var payment = localStorage.getItem('payment');
    var pay = "事前カード決済";
    if(payment == "local"){
      pay = "現地決済"
    }
    if(payment == ""){
      pay = "bank"
    }

    data = {
        service_id: service_id,
        data: start_date,
        start_time: start_at,
        payment: payment
    }

    //20XX年XX月XX日　00：00　～　20XX年XX月XX日　00：00

    var sel_date_txt = "";
    sel_dt = start_date.split("-");
    sel_date_txt = sel_dt[0] + "年" + sel_dt[1] + "月" + sel_dt[0] + "日";

    sel_date_txt += " " + start_at.slice(11, 13) + ":" + start_at.slice(14, 16) + " ～ " + sel_date_txt + " " +
        start_end.slice(11, 13) + ":" + start_end.slice(14, 16)


    $("#sel_date").html(sel_date_txt);
    $("#card").html(pay);



    // $.post("<?php echo site_url(); ?>/?page_slug=book10-complete-reservation", data ,function() {
    //     alert("success");
    //   })
    //   .done(function() {
    //     alert("second success");
    //   })
    //   .fail(function() {
    //     alert("error");
    //   })
    //   .always(function() {
    //     alert("finished");
    //   });
});
</script>

<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>内容確認</h1>

            <!-- <span>Inspiration comes of working every day.</span> -->
        </div>
    </div>
</section>
<section id="page-content">

    <div class="container">
        <div class="row justify-content-center">
            <div class="breadcrumb">
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <path id="Icon_material-home" data-name="Icon material-home"
                                d="M9.4,18.5V13.559h3.2V18.5h4V11.912H19L11,4.5,3,11.912H5.4V18.5Z"
                                transform="translate(-3 -4.5)" fill="#1a0a01" />
                        </svg>
                        <a href="<?php echo site_url(); ?>" style="padding-top:5px; font-family:'Noto Serif JP'">
                            Home
                        </a>
                    </li>
                    <!-- <li><a href="#">ご利用人数</a> </li>
                        <li><a href="#">ご利用日</a></li>
                        <li class="active"><a href="#">ご利用時間</a></li> -->
                    <li><a href="#">お支払い方法</a> </li>
                    <li><a href="#">内容確認</a> </li>
                </ul>
            </div>
            <div class="row justify-content-center">

                <div class="row w-100 justify-content-center" style="margin-top: 50px; max-width:800px; ">
                    <div class="col-md-12" style="background-color: #464343;">
                        <div
                            style="color: white;padding-left: 10px;border-left: solid;align-items: center;margin-top: 12px; margin-left: 20px;">
                            <p class="confirm-font" style="color: white;">ご利用日時</p>
                        </div>
                    </div>
                    <div class="col-md-12" style="background-color:  #f9f7f3; margin-top: 10px;">
                        <div style="padding-left: 10px;margin-top: 12px; margin-left: 20px;">
                            <p class="confirm-font" style="color: #333333;" id="sel_date">
                                20XX年XX月XX日　00：00　～　20XX年XX月XX日　00：00
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12" style="background-color: #464343; margin-top: 50px;">
                        <div
                            style="color: white;padding-left: 10px;border-left: solid;align-items: center;margin-top: 12px; margin-left: 20px;">
                            <p class="confirm-font" style="color: white;">お客様情報</p>
                        </div>
                    </div>
                    <?php 
                      $user = get_current_user_id();
                      //$user_meta = get_user_meta( get_current_user_id() );
                    ?>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">お客様情報</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'first_name', true )?>
                                    <?=get_user_meta($user, 'last_name', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">フリガナ</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'f_given_name', true )?>
                                    <?=get_user_meta($user, 'f_sur_name', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">都道府県</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'prefectures', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">市区郡町村</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'city', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">番地</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'street_address', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">建物名・号室</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'room_number', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">電話番号</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_user_meta($user, 'phone', true )?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style=" margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-3 confirm-panel-left">
                                <p class="confirm-font">メールアドレス</p>
                            </div>
                            <div class="col-md-9 confirm-panel-right">
                                <p class="confirm-font"><?=get_currentuserinfo()->user_email?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="background-color: #464343; margin-top: 30px;">
                        <div
                            style="color: white;padding-left: 10px;border-left: solid;align-items: center;margin-top: 12px; margin-left: 20px;">
                            <p class="confirm-font" style="color: white;">お支払い方法</p>
                        </div>
                    </div>
                    <div class="col-md-12" style="background-color:  #f9f7f3; margin-top: 10px;">
                        <div style="padding-left: 10px;margin-top: 12px; margin-left: 20px;">
                            <p class="confirm-font" style="color: #333333;" id="card"> </p>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-0">
                        <div class="col-md-3 col-sm-12 mt-2">
                            <button class="base-outline-button w-100 p-12"
                                onclick="location='<?php echo site_url(); ?>/?page_slug=book8-payment'">
                                戻る
                            </button>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <button class="base-button w-100"
                                onclick="location='<?php echo site_url(); ?>/?page_slug=book10-complete-reservation'">
                                予約を確定する
                                <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                    style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>