<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>
<? $APPLICATION->IncludeComponent(
    "bitrix:main.feedback",
    "",
    array(
        "EMAIL_TO" => "admin@test.ru",
        "EVENT_MESSAGE_ID" => array(),
        "OK_TEXT" => "Спасибо, мы приняли Ваше сообщение!",
        "REQUIRED_FIELDS" => array("EMAIL", "MESSAGE"),
        "USE_CAPTCHA" => "Y"
    )
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
