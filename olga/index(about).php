<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID', 'about');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
?>
    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                 data-src="bg-screen-<?=$APPLICATION->GetPageProperty('BARBA_ID');?>" data-url="/build/<?=$APPLICATION->GetPageProperty('SELECTED_PAGE')['PARAMS']['IMG']?>">
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
                        'PATH' => '/include/' . $SITE_LANG . '/about_title.php'
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
                        'PATH' => '/include/' . $SITE_LANG . '/about_desc.php'
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
    <div class="info-block-2">
        <div class="info-block-2__title">
            <? $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                array(
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'AREA_FILE_RECURSIVE' => 'Y',
                    'EDIT_TEMPLATE' => 'standard.php',
                    'COMPONENT_TEMPLATE' => '.default',
                    'PATH' => '/include/' . $SITE_LANG . '/about_mountain_title.php'
                ),
                false
            ); ?>
        </div>
        <div class="info-block-2__text">
            <? $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                array(
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'AREA_FILE_RECURSIVE' => 'Y',
                    'EDIT_TEMPLATE' => 'standard.php',
                    'COMPONENT_TEMPLATE' => '.default',
                    'PATH' => '/include/' . $SITE_LANG . '/about_mountain_decs.php'
                ),
                false
            ); ?>
        </div>
		<img class="info-block-2__bg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="bottom: -205px;" data-src="info-block-2__bg" data-url="/build/about.jpg">
    </div>

    <div class="info-block-3 info-block-3_bottom">
        <div class="info-block-3__wrapper">
            <div class="info-block-3__title">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/about_atmosphere_title.php'
                    ),
                    false
                ); ?>
            </div>
            <div class="info-block-3__text">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/about_atmosphere_text.php'
                    ),
                    false
                ); ?>
            </div>
            <div class="info-block-3__subtext">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/about_atmosphere_subtext.php'
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>

    <div class="two-columns">
        <div class="two-columns__column">
            <div class="info-block-1 info-block-1__left info-block-1_column">
                <div class="info-block-1__wrapper">
                    <img class="info-block-1__bg info-block-1__bg_left" src="/build/1356.jpg" data-src="about-1"
                         data-url="/build/1356.jpg">
                    <div class="info-block-1__content info-block-1__content_anim-left-alt">
                        <div class="info-block-1__title">
                            <? $APPLICATION->IncludeComponent(
                                'bitrix:main.include',
                                '.default',
                                array(
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => '/include/' . $SITE_LANG . '/about_relax_title.php'
                                ),
                                false
                            ); ?>
                        </div>
                        <div class="info-block-1__text">
                            <? $APPLICATION->IncludeComponent(
                                'bitrix:main.include',
                                '.default',
                                array(
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => '/include/' . $SITE_LANG . '/about_relax_desc.php'
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="two-columns__column">
            <div class="info-block-1 info-block-1_column">
                <div class="info-block-1__wrapper">
                    <img class="info-block-1__bg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="about-2" data-url="/build/3.9ddca3f4.jpg">
                    <div class="info-block-1__content info-block-1__content_anim-left">
                        <div class="info-block-1__title">
                            <? $APPLICATION->IncludeComponent(
                                'bitrix:main.include',
                                '.default',
                                array(
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => '/include/' . $SITE_LANG . '/about_summer_title.php'
                                ),
                                false
                            ); ?>
                        </div>
                        <div class="info-block-1__text">
                            <? $APPLICATION->IncludeComponent(
                                'bitrix:main.include',
                                '.default',
                                array(
                                    'AREA_FILE_SHOW' => 'file',
                                    'AREA_FILE_SUFFIX' => 'inc',
                                    'AREA_FILE_RECURSIVE' => 'Y',
                                    'EDIT_TEMPLATE' => 'standard.php',
                                    'COMPONENT_TEMPLATE' => '.default',
                                    'PATH' => '/include/' . $SITE_LANG . '/about_summer_desc.php'
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-block-3 info-block-3_left">
        <div class="info-block-3__wrapper">
            <div class="info-block-3__title">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/about_structure_title.php'
                    ),
                    false
                ); ?>
            </div>
            <div class="info-block-3__text">
                <? $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    array(
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'AREA_FILE_RECURSIVE' => 'Y',
                        'EDIT_TEMPLATE' => 'standard.php',
                        'COMPONENT_TEMPLATE' => '.default',
                        'PATH' => '/include/' . $SITE_LANG . '/about_structure_desc.php'
                    ),
                    false
                ); ?>
            </div>
            <ol class="info-block-3__list">
                <li class="info-block-3__item">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        array(
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'AREA_FILE_RECURSIVE' => 'Y',
                            'EDIT_TEMPLATE' => 'standard.php',
                            'COMPONENT_TEMPLATE' => '.default',
                            'PATH' => '/include/' . $SITE_LANG . '/about_structure_fun_title.php'
                        ),
                        false
                    ); ?>
                    <div class="info-block-3__text info-block-3__text_list">
                        <? $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '.default',
                            array(
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'AREA_FILE_RECURSIVE' => 'Y',
                                'EDIT_TEMPLATE' => 'standard.php',
                                'COMPONENT_TEMPLATE' => '.default',
                                'PATH' => '/include/' . $SITE_LANG . '/about_structure_fun_desc.php'
                            ),
                            false
                        ); ?>
                        <a href="/entertainment/" class="info-block-3__link" data-link-type="top-menu">Подробнее о развлечениях</a>
                    </div>
                </li>
                <!-- <li class="info-block-3__item"> -->
                    <? //$APPLICATION->IncludeComponent(
                        //'bitrix:main.include',
                        //'.default',
                        //array(
                            //'AREA_FILE_SHOW' => 'file',
                            //'AREA_FILE_SUFFIX' => 'inc',
                            //'AREA_FILE_RECURSIVE' => 'Y',
                            //'EDIT_TEMPLATE' => 'standard.php',
                            //'COMPONENT_TEMPLATE' => '.default',
                            //'PATH' => '/include/' . $SITE_LANG . 'about_structure_relax_title.php'
                        //),
                        //false
                    //); ?>
                    <!-- <div class="info-block-3__text info-block-3__text_list"> -->
                        <? //$APPLICATION->IncludeComponent(
                            //'bitrix:main.include',
                            //'.default',
                            //array(
                                //'AREA_FILE_SHOW' => 'file',
                                //'AREA_FILE_SUFFIX' => 'inc',
                                //'AREA_FILE_RECURSIVE' => 'Y',
                                //'EDIT_TEMPLATE' => 'standard.php',
                                //'COMPONENT_TEMPLATE' => '.default',
                                //'PATH' => '/include/' . $SITE_LANG . 'about_structure_relax_desc.php'
                            //),
                            //false
                       // ); ?>
                        <!-- <a href="/recreation/" class="info-block-3__link" data-link-type="top-menu">Подробнее о красоте и здоровье</a> -->
                    <!-- </div> -->
                <!-- </li> -->
                <li class="info-block-3__item">
                    <? $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        array(
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'AREA_FILE_RECURSIVE' => 'Y',
                            'EDIT_TEMPLATE' => 'standard.php',
                            'COMPONENT_TEMPLATE' => '.default',
                            'PATH' => '/include/' . $SITE_LANG . '/about_structure_rest_title.php'
                        ),
                        false
                    ); ?>
                    <div class="info-block-3__text info-block-3__text_list">
                        <? $APPLICATION->IncludeComponent(
                            'bitrix:main.include',
                            '.default',
                            array(
                                'AREA_FILE_SHOW' => 'file',
                                'AREA_FILE_SUFFIX' => 'inc',
                                'AREA_FILE_RECURSIVE' => 'Y',
                                'EDIT_TEMPLATE' => 'standard.php',
                                'COMPONENT_TEMPLATE' => '.default',
                                'PATH' => '/include/' . $SITE_LANG . '/about_structure_rest_desc.php'
                            ),
                            false
                        ); ?>
                        <a href="/restaurants-and-cafes/" class="info-block-3__link" data-link-type="top-menu">Подробнее о ресторанах и кафе</a>
                    </div>
                </li>
            </ol>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
