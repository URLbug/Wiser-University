<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Courses");
?>

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Our Courses</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

    <?$APPLICATION->IncludeComponent(
        "bitrix:news",
        "flat1",
        array(
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
            "DETAIL_DISPLAY_TOP_PAGER" => "N",
            "DETAIL_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "DETAIL_PAGER_SHOW_ALL" => "Y",
            "DETAIL_PAGER_TEMPLATE" => "",
            "DETAIL_PAGER_TITLE" => "Страница",
            "DETAIL_PROPERTY_CODE" => array(
                0 => "FACULTET",
                1 => "",
            ),
            "DETAIL_SET_CANONICAL_URL" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "12",
            "IBLOCK_TYPE" => "program",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
            "LIST_FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "LIST_PROPERTY_CODE" => array(
                0 => "FACULTET",
                1 => "",
            ),
            "LIST_USE_SHARE" => "",
            "MEDIA_PROPERTY" => "",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "NEWS_COUNT" => "6",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PREVIEW_TRUNCATE_LEN" => "",
            "SEF_FOLDER" => "/courses/",
            "SEF_MODE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_STATUS_404" => "Y",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SLIDER_PROPERTY" => "",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "TEMPLATE_THEME" => "blue",
            "USE_CATEGORIES" => "N",
            "USE_FILTER" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_RATING" => "N",
            "USE_RSS" => "N",
            "USE_SEARCH" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "flat1",
            "TAGS_CLOUD_ELEMENTS" => "150",
            "PERIOD_NEW_TAGS" => "",
            "DISPLAY_AS_RATING" => "rating",
            "FONT_MAX" => "50",
            "FONT_MIN" => "10",
            "COLOR_NEW" => "3E74E6",
            "COLOR_OLD" => "C0C0C0",
            "TAGS_CLOUD_WIDTH" => "100%",
            "SEF_URL_TEMPLATES" => array(
                "news" => "",
                "section" => "",
                "detail" => "#ELEMENT_ID#/",
            )
        ),
        false
    );?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>