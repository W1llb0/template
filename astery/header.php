<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));

 use Bitrix\Main\Page\Asset; 
 Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/ASTERY__NEW-main/style.css'); 

$curPage = $APPLICATION->GetCurPage(true);

?><!DOCTYPE html>

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
    <? $APPLICATION->ShowHead(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <? $APPLICATION->ShowPanel(); ?>
<? echo '<div class="body-wrapper">'; ?>
        <header>
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo-wrapper">
                        <a href="#">
                            <div class="ellipse">
                                <div class="logo">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/Group.svg" alt="">
                                </div>
                            </div>
                        </a>
                        <div class="logo-info">
                            <div class="logo-info__content">
                                <h4>Товары из Греции</h4>
                            </div>
                            <div class="logo-info__content">
                                <p>Высочайшего качества</p>
                            </div>    
                        </div>
                    </div>    
                    <div class="header-menu">
                        <div class="header-menu__item">
                            <a href="#">Главная</a> 
                        </div>
                        <div class="header-menu__item">
                            <a href="#">Продукция</a>
                        </div>
                        <div class="header-menu__item">
                            <a href="#">О нас</a>
                        </div>
                        <div class="header-menu__item">
                            <a href="#">Новости</a>
                        </div> 
                        <div class="header-menu__item">
                            <a href="#">Контакты</a>
                        </div> 
                    </div>
                    <div class="header-contacts">
                        <div class="header-contacts__telegram">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/telegram (1) 1.svg" alt="">
                            </a>
                        </div>
                        <div class="header-contacts__whatsapp">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/whatsapp (2) 1.svg" alt="">
                            </a>
                        </div>
                        <div class="header-contacts__tel">
                            <div class="header-contacts__phone">
                                <a href="tel:+74957556983"><b>+7-495-755-69-83</b></a>
                            </div>
                            <div class="header-contacts__call">
                                <a href="#">Заказать звонок</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-buttons">
                        <div class="header-buttons__heart">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/Heart.svg" alt="">
                            </a>
                        </div>
                        <div class="header-buttons__buy">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/Buy.svg" alt="">
                            </a>
                        </div>
                        <div class="header-buttons__user">
                            <a href="#">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/user.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="vine-right">
            <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/vine.png" alt="">
        </div>
        <div class="vine-left">
            <img src="<?= SITE_TEMPLATE_PATH ?>/ASTERY__NEW-main/images/vine2.png" alt="">
        </div>