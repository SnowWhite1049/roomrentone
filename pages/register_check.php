<?php
// surname: Keita
// given_name: Nonaka
// f_sur_name: 1231
// f_given_name: 12312
// post_code: 652-0047
// post_code2: 兵庫区下沢通
// prefectures: 北海道
// city: 1231
// street_address: 12321
// room_number: 12312
// phone: 123123
// email: moonrider.crowdworks@gmail.com
// c_email: moonrider.crowdworks@gmail.com
// password: werwer
// c_password: werwerw
// type: 1
// status: 1
?>
<script>
<?php if(!empty($_REQUEST["surname"])){?>localStorage.setItem("surname", "<?=$_REQUEST["surname"]?>");
<?php }?>
<?php if(!empty($_REQUEST["given_name"])){?>localStorage.setItem("given_name", "<?=$_REQUEST["given_name"]?>");
<?php }?>
<?php if(!empty($_REQUEST["f_sur_name"])){?>localStorage.setItem("f_sur_name", "<?=$_REQUEST["f_sur_name"]?>");
<?php }?>
<?php if(!empty($_REQUEST["f_given_name"])){?>localStorage.setItem("f_given_name", "<?=$_REQUEST["f_given_name"]?>");
<?php }?>
<?php if(!empty($_REQUEST["post_code"])){?>localStorage.setItem("post_code", "<?=$_REQUEST["post_code"]?>");
<?php }?>
<?php if(!empty($_REQUEST["prefectures"])){?>localStorage.setItem("prefectures", "<?=$_REQUEST["prefectures"]?>");
<?php }?>
<?php if(!empty($_REQUEST["prefectures"])){?>localStorage.setItem("prefectures", "<?=$_REQUEST["prefectures"]?>");
<?php }?>
<?php if(!empty($_REQUEST["city"])){?>localStorage.setItem("city", "<?=$_REQUEST["city"]?>");
<?php }?>
<?php if(!empty($_REQUEST["street_address"])){?>localStorage.setItem("street_address",
    "<?=$_REQUEST["street_address"]?>");
<?php }?>
<?php if(!empty($_REQUEST["room_number"])){?>localStorage.setItem("room_number", "<?=$_REQUEST["room_number"]?>");
<?php }?>
<?php if(!empty($_REQUEST["phone"])){?>localStorage.setItem("phone", "<?=$_REQUEST["phone"]?>");
<?php }?>

<?php if(!empty($_REQUEST["email"])){?>localStorage.setItem("email", "<?=$_REQUEST["email"]?>");
<?php }?>
<?php if(!empty($_REQUEST["password"])){?>localStorage.setItem("password", "<?=$_REQUEST["password"]?>");
<?php }?>
</script>
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>登録内容確認</h1>
            <!-- <span>Inspiration comes of working every day.</span> -->
        </div>
    </div>
</section>
<section id="page-content" class="p-0">
    <div id="content" class="pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="content col-md-11">
                    <div class="breadcrumb">
                        <ul style="font-size:14px">
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
                            <li class="active"><a href="#" style="font-size: 14px; font-family:'Noto Serif JP'">ログイン /
                                    会員登録</a> </li>

                            <li class="active"><a href="#" style="font-size: 14px; font-family:'Noto Serif JP'">会員登録</a>
                            </li>

                        </ul>
                    </div>
                    <div class="row w-100 justify-content-center" id="login-form">
                        <div class="col-lg-12"
                            style=" padding: 50px; max-width:800px; font-size: 15px;font-family:'Noto Sans JP'">

                            <div class="row book5-field-detail">
                                <div>
                                    <label class="book6-text-left" style="color: white;">お客様情報</label>
                                </div>
                            </div>

                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">お客様</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["surname"])) echo $_REQUEST["surname"];?>
                                            <?php if(!empty($_REQUEST["given_name"])) echo $_REQUEST["given_name"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">フリガナ</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["f_sur_name"])) echo $_REQUEST["f_sur_name"];?>
                                            <?php if(!empty($_REQUEST["f_given_name"])) echo $_REQUEST["f_given_name"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">郵便番号</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["post_code"])) echo $_REQUEST["post_code"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">都道府県</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["prefectures"])) echo $_REQUEST["prefectures"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">市区郡町村</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["city"])) echo $_REQUEST["city"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">番地</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["city"])) echo $_REQUEST["city"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">建物名・号室</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["room_number"])) echo $_REQUEST["room_number"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">電話番号</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["phone"])) echo $_REQUEST["phone"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">メールアドレス</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label
                                            class="book6-text-right"><?php if(!empty($_REQUEST["email"])) echo $_REQUEST["email"];?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row book5-field-margin">
                                <div class="col-md-2 book6-view-left">
                                    <div><label class="book6-left-text">パスワード</label></div>
                                </div>
                                <div class="col-md-10 book6-view-right">
                                    <div>
                                        <label class="book6-text-right">*************</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">

                                </div>
                                <div class="col-md-8 col-sm-12 m-0 p-0">
                                    <div class="d-grid gap-1 d-md-flex justify-content-md-end">
                                        <div class="col-md-3  col-sm-12  mt-2">

                                        </div>
                                        <div class="col-md-3  col-sm-12  mt-2">
                                            <button type="button" class="base-light-button w-100" onclick="back_func()">
                                                戻る
                                            </button>
                                        </div>
                                        <div class="col-md-7 col-sm-12 mt-2">
                                            <button type="button" class="base-button w-100" onclick="register_func()">
                                                上記の内容で会員登録する
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
    </div>
</section>
<script>
function register_func() {
    //
    //<?php echo site_url(); ?>/?page_slug=terms-of-service
  
    $.post("<?php echo site_url(); ?>/?type=api", {
            api: "new_register",  
            surname: localStorage.getItem("surname"),
            given_name: localStorage.getItem("given_name"),
            f_sur_name: localStorage.getItem("f_sur_name"),
            f_given_name: localStorage.getItem("f_given_name"),
            post_code: localStorage.getItem("post_code"),           
            prefectures: localStorage.getItem("prefectures"),
            city: localStorage.getItem("city"),
            street_address: localStorage.getItem("street_address"),
            room_number: localStorage.getItem("room_number"),
            phone: localStorage.getItem("phone"),
            email: localStorage.getItem("email"),
            password: localStorage.getItem("password"),
           
        },
        function(data, status) {
            
            if(data > 0){
               location = "<?php echo site_url(); ?>/?page_slug=login";
            }else{
                if((JSON.parse(data)["errors"]["existing_user_email"][0] != "")){
                    alert("同じメールアドレスが登録されています。");
                }
            }

           
        });

}

function back_func() {
    window.history.back();
}
</script>