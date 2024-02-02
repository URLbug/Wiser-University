<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("search");
?>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                "bitrix:search.page",
                "template1",
                array(
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "N",
                    "DEFAULT_SORT" => "rank",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "FILTER_NAME" => "",
                    "NO_WORD_LOGIC" => "N",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_TITLE" => "Результаты поиска",
                    "PAGE_RESULT_COUNT" => "50",
                    "PATH_TO_USER_PROFILE" => "",
                    "RATING_TYPE" => "",
                    "RESTART" => "N",
                    "SHOW_RATING" => "",
                    "SHOW_WHEN" => "N",
                    "SHOW_WHERE" => "Y",
                    "USE_LANGUAGE_GUESS" => "Y",
                    "USE_SUGGEST" => "N",
                    "USE_TITLE_RANK" => "N",
                    "arrFILTER" => array(
                        0 => "iblock_news",
                    ),
                    "arrFILTER_iblock_news" => array(
                        0 => "14",
                    ),
                    "arrWHERE" => array(
                        0 => "iblock_news",
                    ),
                    "COMPONENT_TEMPLATE" => "template1",
                    "STRUCTURE_FILTER" => "structure",
                    "NAME_TEMPLATE" => "",
                    "SHOW_LOGIN" => "Y",
                    "TAGS_SORT" => "NAME",
                    "TAGS_PAGE_ELEMENTS" => "150",
                    "TAGS_PERIOD" => "",
                    "TAGS_URL_SEARCH" => "",
                    "TAGS_INHERIT" => "Y",
                    "FONT_MAX" => "50",
                    "FONT_MIN" => "10",
                    "COLOR_NEW" => "000000",
                    "COLOR_OLD" => "C8C8C8",
                    "PERIOD_NEW_TAGS" => "",
                    "SHOW_CHAIN" => "Y",
                    "COLOR_TYPE" => "Y",
                    "WIDTH" => "100%"
                ),
                false
            );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>