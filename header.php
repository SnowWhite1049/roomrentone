<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>studio R | レンタルスペース</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" data-fullwidth="true">

            <div class="header-inner bg-white">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <!-- <a href="<?php echo site_url(); ?>/?page_slug=terms-of-service"> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            onclick="location='<?php echo site_url(); ?>'">
                        <!-- </a> -->
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                                class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <!-- <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul> -->
                </div>
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href="<?php echo site_url(); ?>/?page_slug=terms-of-service">利用規約</a></li>
                                <li class="dropdown"><a href="#">特定商取引法に基づく表記</a></li>
                                <li class="dropdown"><a href="#">プライバシーポリシー</a></li>
                                <?php
                                if(!empty(get_current_user_id())){
                                ?>
                                <li class="dropdown"><a href="<?php echo site_url(); ?>/wp-login.php?action=logout"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="15" viewBox="0 0 18 18">
                                            <path id="Icon_open-account-login" data-name="Icon open-account-login"
                                                d="M6.75,0V2.571h9V15.429h-9V18H18V0ZM9,5.143V7.714H0v2.571H9v2.571L13.5,9Z"
                                                fill="#fe6300" />
                                        </svg>

                                        ログアウト</a></li>
                                <?php }else{?>
                                <li class="dropdown"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="18" viewBox="0 0 18 18">
                                            <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt"
                                                d="M9,10.125A5.063,5.063,0,1,0,3.938,5.063,5.064,5.064,0,0,0,9,10.125Zm4.5,1.125H11.563a6.12,6.12,0,0,1-5.126,0H4.5A4.5,4.5,0,0,0,0,15.75v.563A1.688,1.688,0,0,0,1.688,18H16.313A1.688,1.688,0,0,0,18,16.313V15.75A4.5,4.5,0,0,0,13.5,11.25Z"
                                                fill="#fe6300" />
                                        </svg>
                                        新規ユーザー登録</a></li>
                               
                                <li class="dropdown"><a href="<?php echo site_url(); ?>/?page_slug=login"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="15" viewBox="0 0 18 18">
                                            <path id="Icon_open-account-login" data-name="Icon open-account-login"
                                                d="M6.75,0V2.571h9V15.429h-9V18H18V0ZM9,5.143V7.714H0v2.571H9v2.571L13.5,9Z"
                                                fill="#fe6300" />
                                        </svg>

                                        ログイン</a></li>
                                <?php }?>
                                <li class="dropdown">
                                    <div
                                        style="width: 150px; border: 1px #C9C9C9 solid; border-radius: 50px; height: 33px; margin-top: 25px; display:flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.601" height="14"
                                            viewBox="0 0 19.601 14" style="margin-top: 10px; margin-left: 10px;">
                                            <path id="Icon_zocial-cart" data-name="Icon zocial-cart"
                                                d="M-2.07,5.485a.783.783,0,0,1,.228-.578.781.781,0,0,1,.578-.228H2.848a.8.8,0,0,1,.5.166.778.778,0,0,1,.289.446l.42,1.715H15.85l.123-.368a.724.724,0,0,1,.753-.56.539.539,0,0,1,.228.035.754.754,0,0,1,.42.28.764.764,0,0,1,.158.473A.978.978,0,0,1,17.5,7.1l-2.065,6.878a.753.753,0,0,1-.28.42.769.769,0,0,1-.473.158H4.9a.778.778,0,0,1-.5-.174.817.817,0,0,1-.289-.438L2.218,6.273H-1.265a.792.792,0,0,1-.569-.228A.747.747,0,0,1-2.07,5.485ZM4.44,8.6l1.085,4.34h8.558l.034-.157L15.378,8.6H4.44Zm.735,8.47a1.536,1.536,0,0,1,.481-1.138A1.581,1.581,0,0,1,6.8,15.46a1.61,1.61,0,0,1,0,3.22,1.58,1.58,0,0,1-1.146-.472A1.538,1.538,0,0,1,5.175,17.07ZM6.313,9.965H9.218v1.609H6.662Zm4.288,1.61.017-1.61h2.835l-.42,1.61Zm.648,5.5a1.536,1.536,0,0,1,.482-1.138,1.579,1.579,0,0,1,1.146-.473,1.61,1.61,0,0,1,0,3.22,1.579,1.579,0,0,1-1.146-.472A1.536,1.536,0,0,1,11.248,17.07Z"
                                                transform="translate(2.07 -4.68)" fill="#fe6300" />
                                        </svg>

                                        <p
                                            style="width: 100%;  margin-top: 5px;  text-align: right;  margin-right: 10px;">
                                            ¥0</p>
                                    </div>
                                </li>
                                <li style="letter-spacing: -3px; font-size: 15px; font-family: 'Noto Sans JP'; background-color: #1A0A01; padding: 0px 10px 0px 10px; color: #FFFFFF;">
                                    <div>サービスサイトへ</div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
    </div>
    </header>