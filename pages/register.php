<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>新規会員登録</h1>
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
                            <form id="form5" class="form-validate" method="post"
                                action="<?php echo site_url(); ?>/?page_slug=register_check">
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>お名前</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <label for="username" class="book5-field-right-label">姓</label>
                                                <input type="text" class="form-control" name="surname"
                                                    placeholder="例）山田" required title="必須">
                                            </div>
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <label for="username" class="book5-field-right-label">名</label>
                                                <input type="text" class="form-control" name="given_name"
                                                    placeholder="例）太郎" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>フリガナ </div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <label for="username" class="book5-field-right-label">セイ</label>
                                                <input type="text" class="form-control" name="f_sur_name"
                                                    placeholder="例）ヤマダ" required title="必須">
                                            </div>
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <label for="username" class="book5-field-right-label">メイ</label>
                                                <input type="text" class="form-control" name="f_given_name"
                                                    placeholder="例）タロウ" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>郵便番号 </div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <label for="username" class="book5-field-right-label">〒</label>
                                                <input type="text" class="form-control" name="post_code"
                                                    placeholder="例）1234567　※ハイフンなしで入力" required title="必須">
                                            </div>
                                            <div class="form-group col-md-6 flex-aligin-center">
                                                <!-- <input type="text" class="form-control" name="post_code2"
                                                    placeholder="住所検索" required  title="必須"> -->
                                                <button type="button" class="btn btn-light form-control"
                                                    id="post_code_button" name="post_code_button">click</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>都道府県</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-6" style="padding-left: 50px;">
                                                <select class="form-select" name="prefectures" required title="必須" id="prefectures">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>市区郡町村</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="例）○○県✕✕市△△区" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>番地</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="street_address"
                                                    placeholder="例）1-2-1" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>建物名・号室</div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="room_number"
                                                    placeholder="例）コーポ　101号室">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>電話番号</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="例）09000000000　※ハイフンなしで入力" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>メールアドレス</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="email"
                                                    placeholder="例）example@example.com" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>
                                            <h5>メールアドレス（再入力)</h5>
                                        </div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="c_email"
                                                    placeholder="確認のためもう一度入力してください" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>パスワード</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="password"
                                                    placeholder="半角英数記号8～32文字" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row book5-field-margin">
                                    <div class="col-md-4 col-sm-12 book5-field-left">
                                        <div>パスワード（再入力）</div>
                                        <div><span class="badge bg-danger bage-radius">必須</span></div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 book5-field-right">
                                        <div class="row">
                                            <div class="form-group col-md-12" style="padding-left: 50px;">
                                                <input type="text" class="form-control" name="c_password"
                                                    placeholder="確認のためもう一度入力してください" required title="必須">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-12">

                                    </div>
                                    <div class="col-md-8 col-sm-12 m-0 p-0">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <div class="col-md-6  col-sm-12  mt-2">

                                            </div>
                                            <div class="col-md-6 col-sm-12 mt-2">
                                                <button type="submit" class="base-button w-100">
                                                    確認画面へ
                                                    <i class="fa fa-arrow-alt-circle-right position-absolute mt-50"
                                                        style="transform: translate(0, -100%); right:18px; margin-top:20px"></i>

                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
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

function save() {

}
</script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/city_json.js"></script> -->