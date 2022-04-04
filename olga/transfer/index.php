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
                 src="/build/bg-screen-1.e42f2dfb.png"
                 data-src="bg-contacts"
                 data-url="/build/bg-screen-1.e42f2dfb.png">
            <a class="inner-header__go-to-main"></a>
        </div>
    </div> 
	<div class="info-block-1__text" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
		<h3 style="font-size: 75px; color: black; font-family: knickerbockers;">Трансфер</h3>
		Аэропорт Новокузнецк (Спиченково) - ГРК «Ольга»
		ГРК «Ольга» - Аэропорт Новокузнецк (Спиченково)
		Стоимость 8700 рублей в одну сторону.<br>
		Формат «Такси» по Шерегешу (в пределах пгт. Шерегеш и горы Зелёная) - 200 рублей за поездку в одну сторону.
		<img class="photo-gallery__image" src="/build/Авто.jpg">
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>