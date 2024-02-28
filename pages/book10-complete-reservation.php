<?php
global $wpdb;

$service_id = 1;
$customer_id = 1;
$date = '2024-02-26';
$start_at = '';
$end_at = '';
$payment = 'card';
$paid_amount = 1300;
$due_amount = 1300;




// $sql = "SELECT * FROM wp_booking_availability WHERE service_id = 1 and date = '" . $currentDate . "'";

if(isset($_POST["service_id"])) {
  var_dump("post data", $_POST["service_id"]);
}


?>


<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>ご予約完了</h1>
            <!-- <span>Inspiration comes of working every day.</span> -->
        </div>
    </div>
</section>
<section id="page-content">
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="content col-md-11">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                                    <path id="Icon_material-home" data-name="Icon material-home"
                                        d="M9.4,18.5V13.559h3.2V18.5h4V11.912H19L11,4.5,3,11.912H5.4V18.5Z"
                                        transform="translate(-3 -4.5)" fill="#1a0a01" />
                                </svg>
                                <a href="<?php echo site_url(); ?>"
                                    style="padding-top:5px; font-family:'Noto Serif JP'">
                                    Home
                                </a>
                            </li>
                            <li><a href="#">お支払い方法</a></li>
                            <li><a href="#">内容確認</a></li>
                            <li class="active"><a href="#">ご予約完了</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding-left: 100px; padding-right: 100px;">
                            <div class="h5 mb-4 text-center " style="margin-top: 50px;">
                                <label class="book7-subtitle">ご予約を受け付けました</label>
                            </div>
                            <p class="h5 mb-4 text-center">この度はご予約いただき誠にありがとうございます。 </br>内容確認のメールをお送りしましたので、ご確認ください。
                                </br></br>なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。</br>
                                完了メールが届かない場合、処理が正常に行われていない可能性があります。 </br>大変お手数ですが、再度お問い合わせの手続きをお願い致します。</p>
                            <div class="text-center">
                                <div class="col-md-8 col-sm-12 m-0 p-0">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <div class="col-md-6  col-sm-12  mt-2">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mt-2">
                                            <button class="base-button w-100"
                                                onclick="location='<?php echo site_url(); ?>/'">
                                                Home
                                                <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                                    style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>