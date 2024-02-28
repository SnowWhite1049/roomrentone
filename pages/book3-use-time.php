<?php
global $wpdb;
$selectDate = date('2024-02-28');
$sql = "SELECT * FROM wp_booking_availability WHERE service_id = 1 and date = '" . $selectDate . "'";

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

$service_id = 1;

$apointsql = "SELECT * FROM wp_booking_appointment WHERE service_id = " . $service_id;
$apointdata = $wpdb->get_results($wpdb->prepare($apointsql));
// var_dump($apointdata,$apointsql);
$arrary = [];
//var_dump($timesArray[0]);
foreach ($apointdata as $data) {
  $temp_start = new DateTime($data->start_at);
  $temp_end = new DateTime($data->end_at);
  while($temp_start <= $temp_end) {
    if (($key = array_search($temp_start->format('Y-m-d H:i:s'), $timesArray)) !== false) {
      unset($timesArray[$key]);
    }
    $temp_start->add(new DateInterval('PT' . $interval . 'M'));
  }
}

$response = '';
$index = 0;
foreach ($timesArray as $timeArray) {

  $temp_start = new DateTime($timeArray);
  $endtime = $temp_start->add(new DateInterval('PT' . $interval . 'M'));
  
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
      <input class="form-check-input radioBtnClass" type="radio" name="gridRadios" id="time' . $index . '" value="' . $timeArray . '" endtime="'. $endtime->format('Y-m-d H:i:s').'">
      <label class="form-check-label" for="time' . $index . '">';

  $response .= substr($timeArray, -8, 5);
  $response .= '</label></div></div></div>';
  $index++;
}
?>

<script>
$(document).ready(function() {
    $("#service_txt").html("<p>¥" + localStorage.getItem("service_txt") + "  " + localStorage.getItem(
        "start_date") + "</p>");

    $("input[type='radio']").click(function() {

        var time_val = $("input[type='radio'].radioBtnClass:checked").val();

        var end = $("input[type='radio'].radioBtnClass:checked").attr('endtime');
        console.log("start_at", time_val);


        localStorage.setItem("start_at", time_val);
        localStorage.setItem("start_end", end);


        $("#btn").removeAttr('disabled');



    })
});
</script>

<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>ご利用時間</h1>
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
                        <li><a href="#">ご利用人数</a> </li>
                        <li><a href="#">ご利用日</a></li>
                        <li class="active"><a href="#">ご利用時間</a></li>
                    </ul>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="col-md-12" style="margin-top: 50px; max-width:800px">
                        <div class="row">
                            <div class="text-center" id="service_txt">
                                <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="row">

                                <?php echo $response; ?>

                            </div>
                            <div class="text-center">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <div class="col-md-4 col-sm-12 mt-5">
                                        <button type="button" class="base-light-button w-100"
                                            onclick="location='<?php echo site_url(); ?>/?page_slug=book2-use-date'">
                                            戻る
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mt-5">

                                        <?php if(empty(get_current_user_id())){?>
                                        <button type="button" class="base-button w-100" id="btn"
                                            onclick="location='<?php echo site_url(); ?>/?page_slug=login'" disabled>
                                            カートに入れる
                                            <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                                style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>
                                        </button>
                                        <?php }else{?>
                                        <button type="button" class="base-button w-100" id="btn"
                                            onclick="location='<?php echo site_url(); ?>/?page_slug=book8-payment'"
                                            disabled>
                                            カートに入れる
                                            <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                                style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>
                                        </button>
                                        <?php }?>
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