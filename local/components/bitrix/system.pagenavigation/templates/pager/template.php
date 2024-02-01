<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="<?=0 < $arResult['NavPageNomer']-1 ? $arResult['sUrlPath'] . '?PAGEN_'.$arResult['NavNum'].'=' . $arResult['NavPageNomer']-1 : $arResult['sUrlPath'] . '?PAGEN_'.$arResult['NavNum'].'=' . $arResult['NavPageNomer']?>" class="page-link" aria-label="Previous">
                <i class="ti-angle-left"></i>
            </a>
        </li>

        <?for($i=1; $i < $arResult['NavPageCount']+1; $i++):?>
            <?
            $lastPageUrl = $arResult['sUrlPath'];
            if (!empty($arResult['NavQueryString'])) {
                $url = $lastPageUrl.'?'.$arResult['NavQueryString'].'&PAGEN_'.$arResult['NavNum'].'='.$i;
            } else {
                $url = $lastPageUrl.'?PAGEN_'.$arResult['NavNum'].'='.$i;
            }
            ?>

            <li class="page-item">
                <a href="<?=$url?>" class="page-link"><?=$i?></a>
            </li>
        <?endfor;?>

        <li class="page-item">
            <a href="<?=$arResult['NavPageCount']+1 > $arResult['NavPageNomer']+1 ? $arResult['sUrlPath'] . '?PAGEN_'.$arResult['NavNum'].'=' . $arResult['NavPageNomer']+1 : $arResult['sUrlPath'] . '?PAGEN_'.$arResult['NavNum'].'=' . $arResult['NavPageNomer']?>" class="page-link" aria-label="Next">
                <i class="ti-angle-right"></i>
            </a>
        </li>
    </ul>
</nav>