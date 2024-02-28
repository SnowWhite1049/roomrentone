<?php
global $wpdb;
?>

<script>
const site_url = '<?php echo site_url(); ?>';
$(document).ready(function() {
    $("#select_plan a").click(function(event) {
        event.preventDefault();
        localStorage.setItem("service_id", $(this).attr('id'));
        localStorage.setItem("service_txt", $(this).attr('txt'));
        location.href = site_url + "/?page_slug=book2-use-date"
    })
})
</script>

<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>ご利用プラン選択</h1>
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
                        <li class="active"><a href="#">ご利用プラン選択</a></li>
                    </ul>
                </div>
                <div class="row w-100 justify-content-center">
                    <div class="col-md-12" style="padding: 50px; max-width:800px">
                        <?php 
                        $services = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_booking_services"));
                        $categories = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_booking_categories"));

                        foreach ($categories as $category) {
                            ?>
                        <div class="row" style="padding-left: 50px; padding-right: 50px;margin-top:30px">
                            <div class="shadow-sm p-3"
                                style="background-color: #071e3b; border-radius: 59px; text-align: center; font-weight: bold; color: white;">
                                <?=$category->name?></div>
                        </div>
                        <div class="col-lg-12" style="padding-left: 80px; padding-right: 80px; margin-top: 30px;">
                            <?php
                            foreach ($services as $service) {
                                if ($service->category_id == $category->id) {
                                ?>
                                <div style="border-bottom: 1px dashed #e4e6ef; margin-bottom: 16px;padding-bottom: 10px; display: flex; 
                                    align-content: center; align-items: center; justify-content: space-between; ">
                                    <span>
                                        <h5 class="card-title"
                                            style=" border-left: solid; padding-left: 10px; border-color: #071e3b; color: #071e3b;">
                                            <?=$service->name?></h5>
                                        <p class="card-text">
                                            <strong>¥<?=$service->price ?></strong> (tax-in)
                                        </p>
                                    </span>
                                    <span id="select_plan">
                                        <a href="#" id="<?=$service->id?>" style="padding-left: 80px; padding-right: 80px"
                                            class="btn btn-light btn-shadow btn-rounded btn-iconed"
                                            txt = "<?=$category->name?> / <?=$service->name?> (¥<?=$service->price ?>)"
                                            >予約する</a>
                                    </span>
                                </div>                              
                                <?php
                                }
                            }
                                ?>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>