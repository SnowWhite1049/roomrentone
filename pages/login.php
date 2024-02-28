<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>ログイン / 会員登録</h1>
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
                        </ul>
                    </div>
                    <?php  if(empty(get_current_user_id())){?>
                    <div class="row w-100 justify-content-center" id="login-form">

                        <div class="col-md-12"
                            style="margin-top: 50px; background-color: #F8F6F2; padding: 50px; max-width:700px">
                            <form name="loginform" id="loginform" action="<?=site_url()?>/wp-login.php"
                                method="post">
                                <div class="mb-4" style="font-size: 14px; font-family:'Noto Serif JP'">
                                    <p style="font-size:22px; font-weight:500">会員登録がお済みのお客様</p>
                                    <p class="fs-6">会員の方は、登録時に入力されたE-mailとパスワードでログインしてください。</p>
                                    <input type="text" placeholder="メールアドレス" id="user_login" name="log"
                                        class="bg-white border-1 w-100 rounded ps-3" style="border-color:#CCCCCC" />
                                    <input type="password" placeholder="パスワード" id="user_pass" name="pwd"
                                        class="bg-white border-1 w-100 rounded ps-3 mt-4"
                                        style="border-color:#CCCCCC" />
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme"
                                            value="forever">
                                        <label class="form-check-label">次回から自動的にログインする</label>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex align-items-center w-100 row">
                                    <div class="col-md-6 col-sm-12 mt-2">
                                    
                                        <button  type="submit" name="wp-submit" id="wp-submit"class="base-button w-100" >
                                            ログイン
                                            <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                                style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>

                                        </button>
                                    </div>
                                    <div class="col-md-6  col-sm-12  mt-2">
                                        <a href="#">ログイン情報をお忘れですか？</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <?php }?>
                    <div class="row w-100 justify-content-center" id="register-form">
                        <div class="col-md-12"
                            style="margin-top: 50px; background-color: #F8F6F2; padding: 50px; max-width:700px">
                            <div class="mb-4" style="font-size: 14px; font-family:'Noto Serif JP'">
                                <p style="font-size:22px; font-weight:500">まだ会員登録されていないお客様</p>
                                <p class="fs-6">
                                    会員登録をすると便利なMyページをご利用いただけます。<br />
                                    また、ログインするだけで、毎回お名前や住所などを入力することなくスムーズにお買い物をお楽しみいただけます。
                                </p>
                            </div>
                            <?php  if(empty(get_current_user_id())){?>
                            <div class="mt-1 w-100 row">
                                <div class="col-md-6 mt-2">
                                    <button class="base-button w-100"
                                        onclick="location='<?php echo site_url(); ?>/?page_slug=register'">
                                        会員登録をする
                                        <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                            style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>

                                    </button>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class="mt-1 w-100 row">
                                <div class="col-md-6 mt-2">
                                    <button class="base-button w-100">
                                        登録せず進む
                                        <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                            style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>

                                    </button>
                                </div>
                            </div>
                            <?php }?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</section>