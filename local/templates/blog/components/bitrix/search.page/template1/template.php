<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        <?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):
            ?>
            <div class="search-language-guess">
                <?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
            </div><br /><?
        endif;?>

        <?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
        <?elseif($arResult["ERROR_CODE"]!=0):?>
            <p><?=GetMessage("SEARCH_ERROR")?></p>
            <?ShowError($arResult["ERROR_TEXT"]);?>
            <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
            <br /><br />
            <p><?=GetMessage("SEARCH_SINTAX")?><br /><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
            <table border="0" cellpadding="5">
                <tr>
                    <td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td><td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
                    <td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
                </tr>
                <tr>
                    <td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td><td valign="top">and, &amp;, +</td>
                    <td><?=GetMessage("SEARCH_AND_ALT")?></td>
                </tr>
                <tr>
                    <td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td><td valign="top">or, |</td>
                    <td><?=GetMessage("SEARCH_OR_ALT")?></td>
                </tr>
                <tr>
                    <td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td><td valign="top">not, ~</td>
                    <td><?=GetMessage("SEARCH_NOT_ALT")?></td>
                </tr>
                <tr>
                    <td align="center" valign="top">( )</td>
                    <td valign="top">&nbsp;</td>
                    <td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
                </tr>
            </table>
        <?elseif(count($arResult["SEARCH"])>0):?>
            <br /><hr />
            <?foreach($arResult["SEARCH"] as $arItem):?>
                <a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a>
                <p><?echo $arItem["BODY_FORMATED"]?></p>
                <?if (
                    $arParams["SHOW_RATING"] == "Y"
                    && $arItem["RATING_TYPE_ID"] <> ''
                    && $arItem["RATING_ENTITY_ID"] > 0
                ):?>
                <?endif;?>
                <small><?=GetMessage("SEARCH_MODIFIED")?> <?=$arItem["DATE_CHANGE"]?></small><br /><?
                if($arItem["CHAIN_PATH"]):?>
                    <small><?=GetMessage("SEARCH_PATH")?>&nbsp;<?=$arItem["CHAIN_PATH"]?></small><?
                endif;
                ?><hr />
            <?endforeach;?>
            <br />
            <p>
        <?endif;?>