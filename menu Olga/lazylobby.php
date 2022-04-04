<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>
	<link rel="stylesheet" href="/lobbybar/qrmenu/slidestyle.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="/build/bg-screen-1.e42f2dfb.png"
                 data-src="bg-contacts"
                 data-url="/build/bg-screen-1.e42f2dfb.png">
            <a class="inner-header__go-to-main"></a>
        </div>
    </div>

    <h1 id="desc" class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-knickerbockers" style="text-align: center;">
      Меню лобби-бара
    </h1>

    <div id="mainCarousel" class="carousel w-10/12 max-w-5xl mx-auto">
        <div
            class="carousel__slide"
            data-src="/build/Меню лобби-бар.jpg"
            data-fancybox="gallery"
            data-caption="Меню лобби-бар"
        >
            <img src="/build/Меню лобби-бар.jpg" />
        </div>
        <div
            class="carousel__slide"
            data-src="/build/Карта бара лобби-бар.jpg"
            data-fancybox="gallery"
            data-caption="Карта бара лобби-бар"
        >
            <img src="/build/Карта бара лобби-бар.jpg" />
        </div>
    </div>

  <div id="thumbCarousel" class="carousel max-w-xl mx-auto">
    <div class="carousel__slide">
        <img class="panzoom__content" src="/build/Меню лобби-бар.jpg" />
    </div>
    <div class="carousel__slide">
        <img class="panzoom__content" src="/build/Карта бара лобби-бар.jpg" />
    </div>
  </div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="text/javascript" src="/lobbybar/qrmenu/lazy.js"></script>
    




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>