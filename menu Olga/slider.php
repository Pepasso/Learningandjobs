<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <div class="inner-first-screen inner-first-screen_100" data-screen>
        <div class="inner-first-screen__top inner-header">
            <img class="inner-header__bg"
                 src="/build/bg-screen-1.e42f2dfb.png"
                 data-src="bg-contacts"
                 data-url="/build/bg-screen-1.e42f2dfb.png">
            <a class="inner-header__go-to-main"></a>
        </div>
    </div>
    <!-- <link rel="stylesheet" type="text/css" href="/rent/slick.css"/> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script type="text/javascript" src="/rent/slick.min.js"></script> -->
	<div class="single-item">
        <div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		    <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Меню ресторан</h3><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Меню ресторан.jpg"><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Qr Меню ресторан.jpg">
	    </div>
        <div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		    <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Винная карта ресторана</h3><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Винная карта ресторан.jpg"><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Qr Винная карта ресторан.jpg">
	    </div>
	    <div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		    <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Карта бара ресторана</h3><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Карта бара ресторан.jpg"><br>
		    <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Qr Карта бара ресторан.jpg">
	    </div>
	</div>

 <script type="text/javascript">
    $(document).ready(function(){
		$('.single-item').slick({
			infinite: true,
            slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			centerMode: false,
			variableWidth: false,
		});
    });
  </script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

<!-- старый вариант слайдера лобби -->

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
                        <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Меню кухни</h3>
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


<!-- старый вариант слайдера ресторан -->
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
	<link rel="stylesheet" href="/restaurant/qrmenu/splide.css">
	<script src="/restaurant/qrmenu/splide.min.js"></script>
    <div id="image-slider" class="splide">
      <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
            	<div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		          <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Меню ресторан</h3><br>
		          <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Меню ресторан.jpg"><br>
	          	</div>
			</li>
			<li class="splide__slide">
            	<div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		          <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Винная карта ресторана</h3><br>
		          <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Винная карта ресторан.jpg"><br>
	          	</div>
			</li>         
			<li class="splide__slide">
            	<div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		          <h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Карта бара ресторана</h3><br>
		          <img class="photo-gallery__image" style="width: 90%; height: 90%; margin-left: auto; margin-right: auto;" src="/build/Карта бара ресторан.jpg"><br>
	          	</div>
			</li>
		</ul>
      </div>
    </div>

 <script type="text/javascript">
    new Splide( '#image-slider' ).mount();
  </script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
