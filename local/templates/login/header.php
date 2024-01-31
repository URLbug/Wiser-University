<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

$APPLICATION->ShowHead();

?>

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <? $asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css"); ?>

</head>
<body class="img js-fullheight" style="background-image: url(/local/templates/login/images/bg.jpg);">

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section"><a href="/">Wiser University</a></h2>
            </div>
        </div>
