<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="login-wrap p-0">
            <?
            if (!empty($arParams["~AUTH_RESULT"]))
            {
                ShowMessage($arParams["~AUTH_RESULT"]);
            }
            ?>

            <?if($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
                <p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
            <?endif;?>

            <?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
                <p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
            <?endif?>

            <form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data">
                <input type="hidden" name="AUTH_FORM" value="Y" />
                <input type="hidden" name="TYPE" value="REGISTRATION" />

                <div class="form-group">
                    <input type="text" class="form-control" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" autocomplete="off" placeholder="Password" required>
                </div>


                <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="USER_CONFIRM_PASSWORD" autocomplete="off" placeholder="Confirim password" required>
                </div>

                <div class="form-group">
                    <?if($arResult["EMAIL_REGISTRATION"]):?>
                        <input id="password-field" type="email" name="USER_EMAIL" class="form-control" value="<?=$arResult["USER_EMAIL"]?>" placeholder="Email" required>
                    <?endif?>
                </div>
                <?// ********************* User properties ***************************************************?>
                <?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
                    <tr><td colspan="2"><?=trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></td></tr>
                    <?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
                        <tr><td><?if ($arUserField["MANDATORY"]=="Y"):?><span class="starrequired">*</span><?endif;
                                ?><?=$arUserField["EDIT_FORM_LABEL"]?>:</td><td>
                                <?$APPLICATION->IncludeComponent(
                                    "bitrix:system.field.edit",
                                    $arUserField["USER_TYPE"]["USER_TYPE_ID"],
                                    array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
                    <?endforeach;?>
                <?endif;?>

                <?// ******************** /User properties ***************************************************

                /* CAPTCHA */
                if ($arResult["USE_CAPTCHA"] == "Y")
                {
                    ?>
                <div class="form-group">
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />

                    <input type="text" class="form-control" name="captcha_word" maxlength="50" value="" autocomplete="off" placeholder="CAPTCHA" required/>
                </div>
                    <?
                }
                /* CAPTCHA */
                ?>
                <?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "",
                    array(
                        "ID" => COption::getOptionString("main", "new_user_agreement", ""),
                        "IS_CHECKED" => "Y",
                        "AUTO_SAVE" => "N",
                        "IS_LOADED" => "Y",
                        "ORIGINATOR_ID" => $arResult["AGREEMENT_ORIGINATOR_ID"],
                        "ORIGIN_ID" => $arResult["AGREEMENT_ORIGIN_ID"],
                        "INPUT_NAME" => $arResult["AGREEMENT_INPUT_NAME"],
                        "REPLACE" => array(
                            "button_caption" => GetMessage("AUTH_REGISTER"),
                            "fields" => array(
                                rtrim(GetMessage("AUTH_NAME"), ":"),
                                rtrim(GetMessage("AUTH_LAST_NAME"), ":"),
                                rtrim(GetMessage("AUTH_LOGIN_MIN"), ":"),
                                rtrim(GetMessage("AUTH_PASSWORD_REQ"), ":"),
                                rtrim(GetMessage("AUTH_EMAIL"), ":"),
                            )
                        ),
                    )
                );?>
                <div class="form-group">
                    <input type="submit"  class="form-control"  name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" />
                </div>
            </form>

            <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>

            <?if($arResult["AUTH_SERVICES"]):?>
            <!--                    <div class="social d-flex text-center">-->
            <?
            $APPLICATION->IncludeComponent("bitrix:socserv.auth.form", "icons",
            array(
            "AUTH_SERVICES"=>$arResult["AUTH_SERVICES"],
            "SUFFIX"=>"form",
            ),
            $component,
            array("HIDE_ICONS"=>"Y")
            );
            ?>
            <!--                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>-->
            <!--                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>-->
            <!--                    </div>-->
            <?endif;?>
        </div>
        </div>
    </div>
</div>
</section>


