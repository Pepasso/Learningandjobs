<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                 data-src="bg-<?=$APPLICATION->GetPageProperty('BARBA_ID');?>"
                 data-url="/build/<?=$APPLICATION->GetPageProperty('SELECTED_PAGE')['PARAMS']['IMG'];?>">
            <a class="inner-header__go-to-main"></a>
        </div>
        <div class="container mt-3" style="font-family: Averta Demo">
            <h2>Example</h2>
            <p><strong>Note:</strong> Test text.</p>
            <div id="accordion" class="w-100 h-auto">
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
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
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
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
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
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
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
                            Collapsible Group Item #4
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
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
            </div>
        </div>
    </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>