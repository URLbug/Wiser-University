<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("frogot");

$APPLICATION->IncludeComponent("bitrix:system.auth.forgotpasswd", "", array());
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>