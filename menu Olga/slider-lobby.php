<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>
    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="/build/bg-screen-1.e42f2dfb.png"
                 data-src="bg-contacts"
                 data-url="/build/bg-screen-1.e42f2dfb.png">
            <a class="inner-header__go-to-main"></a>
        </div>
    </div>
	<link rel="stylesheet" href="/lobbybar/qrmenu/splide.css">
	<script src="/lobbybar/qrmenu/splide.min.js"></script>
    <div id="image-slider" class="splide">
        <div class="splide__track">
		    <ul class="splide__list">
			    <li class="splide__slide">
                    <div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		                <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Карта бара</h3> 
		                <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Карта бара лобби-бар.jpg"><br>
	                </div>
			    </li>
                <li class="splide__slide">
                    <div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Меню Лобби-бара</h3>
		                <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Меню лобби-бар.jpg">
	                </div>
			    </li>
		    </ul>
        </div>
    </div>

 <script type="text/javascript">
    new Splide( '#image-slider' ).mount();
  </script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
