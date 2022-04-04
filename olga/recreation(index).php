<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','spa');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
?>
    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                 data-src="bg-screen-<?=$APPLICATION->GetPageProperty('BARBA_ID');?>" data-url="/build/bg-screen-4.562fdf1c.png">
            <a href="/" class="button button--more inner-header__go-to-main"  data-screen-index="0">
                <div class="button__more-arrow">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.97 21.01">
                        <path d="M297.47,410.89l3.49,3.2-.87.8-3.49-3.2.87-.8Zm0,0,.87.8-3.49,3.2-.87-.8,3.49-3.2Zm.5,1v20h-1v-20Z"
                              transform="translate(-293.98 -410.89)"/>
                    </svg>
                </div>
                <span class="button__more-text">подробнее</span>
            </a>
        </div>
        <div class="inner-first-screen__bottom">
            <div class="inner-first-screen__title">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/spa_title.php'
                    ),
                    false
                ); ?>
            </div>
            <div class="inner-first-screen__text inner-first-screen__text_inner">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/spa_desc.php'
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
	<img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;"  src="/build/spa.jpg">
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
