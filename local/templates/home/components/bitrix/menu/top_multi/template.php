<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <nav class="site-navigation text-right text-md-right" role="navigation">

        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black">
                <span class="icon-menu h3"></span>
            </a>
        </div>

        <ul class="site-menu js-clone-nav d-none d-lg-block">
            <? $previousLevel = 0;
            foreach ($arResult as $arItem): ?>

                <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                    <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                <? endif ?>

                <? if ($arItem["PERMISSION"] > "D"):    // если доступ не запрещен, выводим список ?>

                    <? $classLi = '';
                    if ($arItem["IS_PARENT"]) {
                        $classLi = 'has-children';
                    }

                    if ($arItem["SELECTED"]) {
                        $classLi .= ' active';
                    } ?>

                    <li class="<?= $classLi ?>">
                        <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                        <? if ($arItem["IS_PARENT"]): ?>
                            <ul class="dropdown">
                        <? else: ?>
                            </li>
                        <? endif; ?>
                <? endif; ?>

                <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

            <? endforeach; ?>

            <? if ($previousLevel > 1): //close last item tags ?>
                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
            <? endif ?>
        </ul>
    </nav>
<? endif ?>
