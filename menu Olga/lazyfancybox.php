<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>
	<link rel="stylesheet" href="/restaurant/qrmenu/slidestyle.css"/>
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
      Меню ресторана Ольга
    </h1>

    <div id="mainCarousel" class="carousel w-10/12 max-w-5xl mx-auto">
      <div
        class="carousel__slide"
        data-src="/build/Меню ресторан.jpg"
        data-fancybox="gallery"
        data-caption="Меню ресторана"
      >
        <img src="/build/Меню ресторан.jpg" />
      </div>
      <div
        class="carousel__slide"
        data-src="/build/Винная карта ресторан.jpg"
        data-fancybox="gallery"
        data-caption="Винная карта ресторана"
      >
        <img src="/build/Винная карта ресторан.jpg" />
      </div>
      <div
        class="carousel__slide"
        data-src="/build/Карта бара ресторан.jpg"
        data-fancybox="gallery"
        data-caption="Карта бара ресторана"
      >
        <img src="/build/Карта бара ресторан.jpg" />
      </div>
    </div>

  <div id="thumbCarousel" class="carousel max-w-xl mx-auto">
    <div class="carousel__slide">
      <img class="panzoom__content" src="/build/Карта%20бара%20лобби-бар.jpg" />
    </div>
    <div class="carousel__slide">
      <img class="panzoom__content" src="/build/Винная карта ресторан.jpg" />
    </div>
    <div class="carousel__slide">
      <img class="panzoom__content" src="/build/Карта бара ресторан.jpg" />
    </div>
  </div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script type="text/javascript" src="/restaurant/qrmenu/lazy.js"></script>
    




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>