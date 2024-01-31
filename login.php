<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("login");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"template1", 
	array(
		"FORGOT_PASSWORD_URL" => "/frogot.php",
		"PROFILE_URL" => "/index.php",
		"REGISTER_URL" => "",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>