<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CJSCore::Init(array("fx"));
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
    <!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1.0, width=device-width">
        <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />

        <?
        $APPLICATION->SetAdditionalCSS("/local/templates/redvent/html/plugins/bootstrap/css/bootstrap.min.css");
        $APPLICATION->SetAdditionalCSS("/local/templates/redvent/html/plugins/bootstrap/css/bootstrap-theme.min.css");
        $APPLICATION->SetAdditionalCSS("/local/templates/redvent/html/plugins/owl.carousel/assets/owl.carousel.css");
        $APPLICATION->SetAdditionalCSS("/local/templates/redvent/html/plugins/lightbox/ekko-lightbox.min.css");
        $APPLICATION->SetAdditionalCSS("/local/templates/redvent/html/css/style.css");
        ?>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
    </head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <a href="/">
                            <img class="img-responsive centered" src="/local/templates/redvent/html/img/logo-top.png" alt="Redvent.ru">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
                        <p>Изготовление и продажа жалюзийных решеток с доставкой по всей России</p>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-4 col-xs-6">
                        <div class="header-top-contacts">
                            <div class="header-top-contacts__top">
                            <span class="header-top-contacts__phone">
                                8(495)795-23-04
                            </span>
                                <a class="header-top-contacts__link" id="need_feedback" href="#" rel="popover" data-toggle="popover" data-placement="bottom">
                                    Обратный звонок
                                </a>
                                <div id="need_feedback_content" style="display: none;">
                                    <?$APPLICATION->IncludeComponent(
                                        "redvent:main.callback",
                                        "top",
                                        Array(
                                            "COMPONENT_TEMPLATE" => "main",
                                            "EMAIL_TO" => "pruashnikov@gmail.com",
                                            "EVENT_MESSAGE_ID" => array("38"),
                                            "OK_TEXT" => "Мы свяжемся с Вами в ближайшее время.",
                                            "REQUIRED_FIELDS" => array(),
                                            "USE_CAPTCHA" => "Y"
                                        )
                                    );?>
                                </div>
                            </div>
                            <div class="header-top-contacts__bottom">
                                Пн-Пт с 9.00 до 18.00<br>(прием заявок круглосуточно)
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-8 col-xs-6 col-xs-offset-0">
                        <div class="header-top-personal" data-feedback-content='popover'>
                            <?if(!$USER->IsAuthorized()) {?>
<!--                                --><?//$APPLICATION->IncludeComponent(
//                                    "redvent:auth",
//                                    "top.auth",
//                                    Array(
//                                        "FORGOT_PASSWORD_URL" => "/forgot/",
//                                        "PROFILE_URL" => "",
//                                        "REGISTER_URL" => "",
//                                        "SHOW_ERRORS" => "Y"
//                                    )
//                                );?>
                                <div class="header-top-personal-auth">
                                    <a class="header-top-personal-auth__link" href="#auth_register" data-toggle="modal" data-target="#auth_register">Вход и регистрация</a>
                                </div>
                                <div class="modal fade"  role="dialog" tabindex="-1" aria-hidden="true"  id="auth_register" style="display: none;">
                                    <div class="modal-dialog header-top-personal-auth__form">
                                        <div class="modal-content">
                                            <div class="modal-body tab-content header-top-personal-modal">
                                                <div class="tab-pane header-top-personal-popup active" id="auth_form">
                                                    <?$APPLICATION->IncludeComponent(
                                                        "bitrix:system.auth.form",
                                                        "redvent_auth",
                                                        Array(
                                                            "COMPONENT_TEMPLATE" => "redvent_auth",
                                                            "FORGOT_PASSWORD_URL" => "/forgot/",
                                                            "PROFILE_URL" => "",
                                                            "REGISTER_URL" => "",
                                                            "SET_TITLE" => "N",
                                                            "SHOW_ERRORS" => "Y"
                                                        )
                                                    );?>
                                                </div>
                                                <div class="tab-pane header-top-personal-popup" id="register_form">
                                                    <?$APPLICATION->IncludeComponent(
                                                        "bitrix:main.register",
                                                        "redvent_register",
                                                        Array(
                                                            "AUTH" => "Y",
                                                            "COMPONENT_TEMPLATE" => ".default",
                                                            "REQUIRED_FIELDS" => array("EMAIL","PERSONAL_MOBILE"),
                                                            "SET_TITLE" => "N",
                                                            "SHOW_FIELDS" => array("EMAIL","PERSONAL_MOBILE"),
                                                            "SUCCESS_PAGE" => "",
                                                            "USER_PROPERTY" => array(),
                                                            "USER_PROPERTY_NAME" => "",
                                                            "USE_BACKURL" => "Y",
                                                            "USE_CAPTCHA" => "N"
                                                        )
                                                    );?>
<!--                                                    <h3 class="header-top-personal-popup__title">Регистрация</h3>-->
<!--                                                    <form class="form" action="/">-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <label class="header-top-personal-popup__name">-->
<!--                                                                Как вас зовут?-->
<!--                                                            </label>-->
<!--                                                            <input class="header-top-personal-popup__text" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <label class="header-top-personal-popup__name">-->
<!--                                                                Moбильный телефон-->
<!--                                                            </label>-->
<!--                                                            <input class="header-top-personal-popup__text" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <label class="header-top-personal-popup__name">-->
<!--                                                                Электронная почта-->
<!--                                                            </label>-->
<!--                                                            <input class="header-top-personal-popup__text" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <label class="header-top-personal-popup__name">-->
<!--                                                                Пароль-->
<!--                                                            </label>-->
<!--                                                            <input class="header-top-personal-popup__text" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <label class="header-top-personal-popup__name">-->
<!--                                                                Пароль еще раз-->
<!--                                                            </label>-->
<!--                                                            <input class="header-top-personal-popup__text" type="text">-->
<!--                                                        </div>-->
<!--                                                        <div class="header-top-personal-popup__field">-->
<!--                                                            <input class="button button-first" type="submit" value="Зарегистрироваться">-->
<!--                                                            <a class="header-top-personal-popup__button" href="#auth_form" data-toggle="tab">Войти</a>-->
<!--                                                        </div>-->
<!--                                                    </form>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?} else {?>
                                <div class="header-top-personal-auth">
                                    <a class="" href="/personal/"><?=$USER->GetLogin()?></a>
                                    /
                                    <a class="" href="<?=$APPLICATION->GetCurPage()?>?logout=yes">Выйти</a>
                                </div>
                            <?}?>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:sale.basket.basket.line",
                                "redvent",
                                Array(
                                    "COMPONENT_TEMPLATE" => "redvent",
                                    "PATH_TO_BASKET" => SITE_DIR."personal/card/",
                                    "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                                    "PATH_TO_PROFILE" => SITE_DIR."personal/",
                                    "PATH_TO_REGISTER" => SITE_DIR."login/",
                                    "POSITION_FIXED" => "N",
                                    "SHOW_AUTHOR" => "N",
                                    "SHOW_EMPTY_VALUES" => "Y",
                                    "SHOW_NUM_PRODUCTS" => "Y",
                                    "SHOW_PERSONAL_LINK" => "N",
                                    "SHOW_PRODUCTS" => "N",
                                    "SHOW_TOTAL_PRICE" => "N"
                                )
                            );?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "redvent_left_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "left",
                "USE_EXT" => "Y"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "slider_mini",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "slider_mini",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "7",
                "IBLOCK_TYPE" => "other",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("LINK", ""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
        <div class="left-reviews">
            <div class="left-reviews-title">
                Отзывы<br>
                клиентов
            </div>
            <div class="left-reviews-block">
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 left-reviews-block-item">
                    <a class="left-reviews-block-item__link" href="img/reviev.png" data-toggle="lightbox" data-gallery="reviews-gallery" data-title="Александр Спиридонов">
                        <img class="img-responsive left-reviews-block-item__img" src="/local/templates/redvent/html/img/reviev.png" alt="">
                        <span class="left-reviews-block-item__name">Александр Спиридонов</span>
                    </a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6 left-reviews-block-item">
                    <a class="left-reviews-block-item__link" href="img/reviev.png" data-toggle="lightbox" data-gallery="reviews-gallery" data-title="Александр Спиридонов">
                        <img class="img-responsive left-reviews-block-item__img" src="/local/templates/redvent/html/img/reviev.png" alt="">
                        <span class="left-reviews-block-item__name">Александр Спиридонов</span>
                    </a>
                </div>
                <div style="clear:both;"></div>
                <div class="left-reviews-bottom">
                    <a class="left-reviews-bottom__link" href="/">Все отзывы</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "redvent_top_menu",
    Array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(""),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N"
    )
);?>
<?if (!CSite::InDir('/index.php')) {
    $APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "redvent",
        Array(
            "PATH" => "",
            "SITE_ID" => "s1",
            "START_FROM" => "0"
        )
    );
}?>
    <div style="clear:both;"></div>
    <div class="pages">
<?
if (!CSite::InDir('/index.php') && $APPLICATION->GetProperty('NO_TITLE') !== 'Y') {?>
	<?if($APPLICATION->GetProperty('TITLE_SECOND') === 'Y') {?>
		<h3 class="pages-title__second">
			<?$APPLICATION->ShowTitle()?>
		</h3>
	<?} else {?>
		<div class="pages-title">
			<div class="pages-title-first">
				<div class="pages-title-first__left"></div>
				<div class="pages-title-first__text">
					<?$APPLICATION->ShowTitle()?>
				</div>
				<div class="pages-title-first__right"></div>
			</div>
			<?if(!empty($APPLICATION->GetProperty('PAGE_DESCRIPTION'))) {?>
			    <div class="pages-title__descr">
					<?=$APPLICATION->GetProperty('PAGE_DESCRIPTION')?>
				</div>
			<?}?>
		</div>
	<?}?>
<?}?>