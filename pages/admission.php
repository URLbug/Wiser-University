<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Admission");
?>

<!-- latest_coures_area_start  -->
<div data-scroll-index='1' class="admission_area">
    <div class="admission_inner">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <?$APPLICATION->IncludeComponent(
                        "wiser:main.feedback",
                        "template1",
                        array(
                            "EMAIL_TO" => "gemslove2@gmail.com",
                            "EVENT_MESSAGE_ID" => array(
                            ),
                            "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                            "REQUIRED_FIELDS" => array(
                            ),
                            "USE_CAPTCHA" => "N",
                            "COMPONENT_TEMPLATE" => "template1"
                        ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ latest_coures_area_end -->

<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Recent Event</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news",
            "template1",
            Array(
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
                "COMPONENT_TEMPLATE" => "flat",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_DISPLAY_TOP_PAGER" => "N",
                "DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
                "DETAIL_PAGER_SHOW_ALL" => "Y",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PROPERTY_CODE" => array(0=>"TIME_EVENT",1=>"PLACE_EVENT",2=>"DATE_EVENT",3=>"",),
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "13",
                "IBLOCK_TYPE" => "event",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => array(0=>"",1=>"",),
                "LIST_PROPERTY_CODE" => array(0=>"TIME_EVENT",1=>"PLACE_EVENT",2=>"DATE_EVENT",3=>"",),
                "LIST_USE_SHARE" => "",
                "MEDIA_PROPERTY" => "",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "NEWS_COUNT" => "3",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PREVIEW_TRUNCATE_LEN" => "",
                "SEF_FOLDER" => "/pages/",
                "SEF_MODE" => "Y",
                "SEF_URL_TEMPLATES" => array("news"=>"event/","section"=>"event/","detail"=>"#ELEMENT_ID#/",),
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
                "USE_SHARE" => "N"
            )
        );?>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>