<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Education");
?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                                <a href="#" class="boxed-btn3">Get Start</a>
                                <a href="#" class="boxed-btn4">Take a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                                <a href="#" class="boxed-btn3">Get Start</a>
                                <a href="#" class="boxed-btn4">Take a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                                <a href="#" class="boxed-btn3">Get Start</a>
                                <a href="#" class="boxed-btn4">Take a tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start  -->
    <div class="service_area gray_bg">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-school"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
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
                            "NEWS_COUNT" => "3",
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
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="/courses/" class="boxed-btn4">View All course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- latest_coures_area_start  -->
    <div class="latest_coures_area">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Latest Courses</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                    <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
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
    <!-- recent_event_area_end  -->

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


    <!-- recent_news_area_start  -->
    <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/news/1.png" alt="">
                            </a>
                            <span class="badge">Group Study</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/news/2.png" alt="">
                            </a>
                            <span class="badge bandge_2">Hall Life</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span>

                                <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- recent_news_area_end  -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>