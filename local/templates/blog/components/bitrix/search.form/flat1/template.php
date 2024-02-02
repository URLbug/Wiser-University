<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);?>

<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="<?=$arResult["FORM_ACTION"]?>">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" name="q" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btn" type="submit" name="s"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit" name="s">Search</button>
            </form>
        </aside>

<!--<form action="--><?php //=$arResult["FORM_ACTION"]?><!--">-->
<!--	--><?//if($arParams["USE_SUGGEST"] === "Y"):?><!----><?//$APPLICATION->IncludeComponent(
//				"bitrix:search.suggest.input",
//				"",
//				array(
//					"NAME" => "q",
//					"VALUE" => "",
//					"INPUT_SIZE" => 15,
//					"DROPDOWN_SIZE" => 10,
//				),
//				$component, array("HIDE_ICONS" => "Y")
//	);?><!----><?//else:?><!--<input type="text" name="q" value="" size="15" maxlength="50" />--><?//endif;?><!--&nbsp;<input name="s" type="submit" value="--><?php //=GetMessage("BSF_T_SEARCH_BUTTON");?><!--" />-->
<!--</form>-->