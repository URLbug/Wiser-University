<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
    <?
    $arSubMenu = array();
    $arNOTSubMenu = array();
    ?>
    <nav>
        <ul id="navigation">
            <li><a  href="/">Home</a></li>

            <?foreach ($arResult as $arItem):?>
                <?
                foreach ($arResult as $arChain)
                {
                    if ($arChain['DEPTH_LEVEL'] === 2 && $arChain['CHAIN'][0] === $arItem['TEXT'])
                    {
                        $arSubMenu[] = $arChain;
                        $arNOTSubMenu[] = $arChain;
                    }
                }
                ?>

                <?if(!empty($arSubMenu)):?>
                    <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?> <i class="ti-angle-down"></i></a>
                        <ul class="submenu">
                            <?foreach ($arSubMenu as $arChain):?>
                               <li><a href="<?=$arChain['LINK']?>"><?=$arChain['TEXT']?></a></li>
                            <?endforeach;?>
                        </ul>
                    </li>
                    <?
                        $arSubMenu = array();
                    ?>
                <?elseif(!in_array($arItem, $arNOTSubMenu)):?>
                    <li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
                <?endif;?>
            <?endforeach;?>
        </ul>
    </nav>
<?endif;?>