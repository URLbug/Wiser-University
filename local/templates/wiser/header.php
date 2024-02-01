<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Page\Asset;

global $USER;

$asset = Asset::getInstance();

$APPLICATION->ShowHead();

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <?
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/font-awesome.min.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/themify-icons.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/nice-select.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/flaticon.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/gijgo.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/slicknav.css");
    $asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    ?>
    <!-- <link rel="stylesheet" href="css/responsive.css") -->
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div id="panel">
    <?=$APPLICATION->ShowPanel()?>
</div>

<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p><span>+880166 253 232</span> <span>info@domain.com</span></p>
                            </div>
                            <div class="text_wrap">
                                <?if(!$USER->IsAuthorized()):?>
                                    <p><a href="/login.php"> <i class="ti-user"></i>  Login</a> <a href="/registration.php">Register</a></p>
                                <?else:?>
                                    <p><a><i class="ti-user"></i>  <?=$USER->GetLogin()?></a> <a href="/login.php"> Exit</a></p>
                                <?endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_wrap d-flex justify-content-between align-items-center">
                            <div class="header_left">
                                <div class="logo">
                                    <a href="/">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="header_right d-flex align-items-center">
                                <div class="main-menu  d-none d-lg-block">
                                    <?$APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "wiser_horizontal",
                                    array(
                                        "ALLOW_MULTI_SELECT" => "N",
                                        "CHILD_MENU_TYPE" => "submenu",
                                        "DELAY" => "N",
                                        "MAX_LEVEL" => "2",
                                        "MENU_CACHE_GET_VARS" => array(
                                        ),
                                        "MENU_CACHE_TIME" => "3600",
                                        "MENU_CACHE_TYPE" => "A",
                                        "MENU_CACHE_USE_GROUPS" => "Y",
                                        "ROOT_MENU_TYPE" => "top",
                                        "USE_EXT" => "N",
                                        "COMPONENT_TEMPLATE" => "wiser_horizontal"
                                    ),
                                    false
                                );?>
                                </div>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
