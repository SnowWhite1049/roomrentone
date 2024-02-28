<?php
global $wpdb;
$currentDate = date('2024-02-28');
$sql = "SELECT * FROM wp_booking_availability WHERE service_id = 1 and date = '" . $currentDate . "'";

$data = $wpdb->get_results($wpdb->prepare($sql));

date_default_timezone_set('Asia/Tokyo');
// Start datetime
$startDateTime = new DateTime($data[0]->start_at); // Change this to your start datetime

// End datetime
$endDateTime = new DateTime($data[0]->end_at); // Change this to your end datetime

// Interval duration (in minutes)
$interval = 30;

// Array to store times
$timesArray = array();

// Loop through each interval
$currentDateTime = clone $startDateTime;
while ($currentDateTime < $endDateTime) {
  $timesArray[] = $currentDateTime->format('Y-m-d H:i:s');
  $currentDateTime->add(new DateInterval('PT' . $interval . 'M')); // Add the interval
}
$response = '';
$index = 0;
foreach ($timesArray as $timeArray) {
  $response .= '<div class="col-sm-2">
  <div style="    padding-left: 10px;margin-bottom: 5px;
          padding-top: 17px;
          border-color: #c9c9c9;
          border-width: 2px;
          border-style: solid;
          border-radius: 6px;
          background: #f8f6f2;
          height: 60px;">
    <div class="form-check">
      <input class="form-check-input radioBtnClass" type="radio" name="gridRadios" id="time' . $index . '" value="' . $timeArray . '">
      <label class="form-check-label" for="time' . $index . '">';
  $response .= substr($timeArray, -8, 5);
  $response .= '</label></div></div></div>';
  $index++;
}
?>

<script>
$(document).ready(function() {
    $("input[type='radio']").click(function() {
        var payment = $("input[type='radio']:checked").val();
        console.log("payment_method", payment)
        localStorage.setItem("payment", payment);
        $(".base-button").removeAttr('disabled');
    })
});
</script>

<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>お支払い方法</h1>
            <!-- <span>Inspiration comes of working every day.</span> -->
        </div>
    </div>
</section>
<section id="page-content">

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
                            <a href="<?php echo site_url(); ?>" style="padding-top:5px; font-family:'Noto Serif JP'">
                                Home
                            </a>
                        </li>
                        <!-- <li><a href="#">ご利用人数</a> </li>
                        <li><a href="#">ご利用日</a></li>
                        <li class="active"><a href="#">ご利用時間</a></li> -->
                        <li><a href="#">お支払い方法</a> </li>
                    </ul>
                </div>
                <div class="row w-100 justify-content-center" style="margin-top: 50px">
                    <div class="col-md-12 mb-2" style="background-color: #464343;">
                        <div
                            style="color: white;padding-left: 10px;border-left: solid;align-items: center;margin-top: 10px; margin-left: 20px;">
                            <p style="color: white;">お支払い方法</p>
                        </div>
                    </div>
                    <div class="col-md-12" >
                        <label>
                            <div class="row" style="border: 1px solid darkgrey;">
                                <div class="col-md-3" style="background-color: #e0e0e0;display: flex;">
                                    <input type="radio" name="product" class="card-input-element" value="card" />                                    
                                    <strong style="display: flex; align-items: center; padding-left: 10px">事前カード決済</strong>                                    
                                </div>
                                <div class="col-md-9" style="background-color:#f9f7f3;">
                                    この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="col-md-12" >
                        <label>
                            <div class="row" style="border: 1px solid darkgrey;">
                                <div class="col-md-3" style="background-color: #e0e0e0;display: flex;">
                                    <input type="radio" name="product" class="card-input-element" value="local" />                                    
                                    <strong style="display: flex; align-items: center; padding-left: 10px">現地決済</strong>                                    
                                </div>
                                <div class="col-md-9" style="background-color:#f9f7f3;">
                                    この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="col-md-12" >
                        <label>
                            <div class="row" style="border: 1px solid darkgrey;">
                                <div class="col-md-3" style="background-color: #e0e0e0;display: flex;">
                                    <input type="radio" name="product" class="card-input-element" value="bank" />                                    
                                    <strong style="display: flex; align-items: center; padding-left: 10px">銀行振込</strong>                                    
                                </div>
                                <div class="col-md-9" style="background-color:#f9f7f3;">
                                    この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                                </div>
                            </div>
                        </label>
                    </div>                    
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding: 0px!important;">
                        <div class="col-md-3 col-sm-12 mt-2">
                            <button type="button" class="base-light-button w-100"
                                onclick="location='<?php echo site_url(); ?>/?page_slug=book3-use-time'">
                                戻る
                            </button>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-2">
                            <button class="base-button w-100"
                                onclick="location='<?php echo site_url(); ?>/?page_slug=book9-confirm-content'"
                                disabled>
                                内容確認
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