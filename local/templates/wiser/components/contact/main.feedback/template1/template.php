<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="col-lg-8">
    <?if(!empty($arResult["ERROR_MESSAGE"]))
    {
        foreach($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if($arResult["OK_MESSAGE"] <> '')
    {
        ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
    }
    ?>


    <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=bitrix_sessid_post()?>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="MESSAGE" id="message" cols="30" rows="9"  placeholder="Messege"><?=$arResult["MESSAGE"]?></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control valid" id="name" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>"  placeholder="Enter your name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control valid" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" id="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="SUBJECT"  value="<?=$arResult["AUTHOR_SUBJECT"]?>" type="text" placeholder="Enter Subject">
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <input class="button button-contactForm boxed-btn" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
        </div>
    </form>
</div>

<!--<form action="--><?php //=POST_FORM_ACTION_URI?><!--" method="POST">-->
<?php //=bitrix_sessid_post()?>
<!--	<div class="mf-name">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_NAME")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_name" value="--><?php //=$arResult["AUTHOR_NAME"]?><!--">-->
<!--	</div>-->
<!--	<div class="mf-email">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_EMAIL")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<input type="text" name="user_email" value="--><?php //=$arResult["AUTHOR_EMAIL"]?><!--">-->
<!--	</div>-->
<!---->
<!--	<div class="mf-message">-->
<!--		<div class="mf-text">-->
<!--			--><?php //=GetMessage("MFT_MESSAGE")?><!----><?//if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><!--<span class="mf-req">*</span>--><?//endif?>
<!--		</div>-->
<!--		<textarea name="MESSAGE" rows="5" cols="40">--><?php //=$arResult["MESSAGE"]?><!--</textarea>-->
<!--	</div>-->
<!---->
<!--	--><?//if($arParams["USE_CAPTCHA"] == "Y"):?>
<!--	<div class="mf-captcha">-->
<!--		<div class="mf-text">--><?php //=GetMessage("MFT_CAPTCHA")?><!--</div>-->
<!--		<input type="hidden" name="captcha_sid" value="--><?php //=$arResult["capCode"]?><!--">-->
<!--		<img src="/bitrix/tools/captcha.php?captcha_sid=--><?php //=$arResult["capCode"]?><!--" width="180" height="40" alt="CAPTCHA">-->
<!--		<div class="mf-text">--><?php //=GetMessage("MFT_CAPTCHA_CODE")?><!--<span class="mf-req">*</span></div>-->
<!--		<input type="text" name="captcha_word" size="30" maxlength="50" value="">-->
<!--	</div>-->
<!--	--><?//endif;?>
<!--	<input type="hidden" name="PARAMS_HASH" value="--><?php //=$arResult["PARAMS_HASH"]?><!--">-->
<!--	<input type="submit" name="submit" value="--><?php //=GetMessage("MFT_SUBMIT")?><!--">-->
<!--</form>-->
<!--</div>-->