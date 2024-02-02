<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


            <aside class="single_sidebar_widget post_category_widget">
                <h4 class="widget_title">Category</h4>
                <ul class="list cat-list">
                    <?foreach ($arResult as $arItem):?>
                        <li>
                            <a href="<?=$arItem['LINK']?>" class="d-flex">
                                <p><?=$arItem['TEXT']?></p>
                            </a>
                        </li>
                    <?endforeach;?>
                </ul>
            </aside>
            <aside class="single_sidebar_widget instagram_feeds">
                <h4 class="widget_title">Instagram Feeds</h4>
                <ul class="instagram_row flex-wrap">
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_5.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_6.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_7.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_8.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_9.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img class="img-fluid" src="<?=PATH_WISER?>/img/post/post_10.png" alt="">
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>



    <!--================ Blog Area end =================-->
<?endif?>