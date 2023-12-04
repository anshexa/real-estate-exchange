<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?
$aMenuLinks = array(
    array(
        "Главная",
        SITE_DIR . "/",
        array(),
        array(),
        ""
    ),
    array(
        "Объявления",
        SITE_DIR . "obyavleniya/",
        array(),
        array(),
        ""
    ),
    array(
        "О сервисе",
        SITE_DIR . "o-servise/",
        array(),
        array(),
        ""
    ),
    array(
        "Личный кабинет продавца",
        SITE_DIR . "lichnyy-kabinet-prodavtsa/",
        array(),
        array(),
        "CSite::InGroup(array(1,7))"    // видимость для групп
    ),
    array(
        "Личный кабинет покупателя",
        SITE_DIR . "lichnyy-kabinet-pokupatelya/",
        array(),
        array(),
        "CSite::InGroup(array(1,6))"    // видимость для групп
    )
);
?>
