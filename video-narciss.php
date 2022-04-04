<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty('BARBA_ID','contacts');
$APPLICATION->SetPageProperty('BODY_CLASS_ID', 'inner-page');
global $SITE_LANG;
?>

<link href="/upload/video-narciss.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" rel="stylesheet">
<script src="/upload/video-narciss.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<h2 style="text-align: center; font-family: Helvetica; padding-top: 10px; font-size: 16px;">Ниже вы можете ознакомиться с информационными видео.</h2>

<hr class="my-5" />

<div class="row mb-4" style=" padding-left: 20%;">
  <div class="card-deck col-9">

    <div class="card">
      <a data-fancybox href="https://www.youtube.com/embed/6Spo9ITXxzU?feature=oembed">
        <img class="card-img-top img-fluid" src="https://i.ytimg.com/vi_webp/6Spo9ITXxzU/maxresdefault.webp" />
      </a>
      <div class="card-body" style=" background: #FF7404;">
        <p class="card-text" style="text-align: center; font-family: Helvetica;">Когда нужно менять полис</p>
      </div>
    </div>

    <div class="card">
      <a data-fancybox data-width="640" data-height="360" href="https://www.youtube.com/embed/uo4lr0ZG5H8?feature=oembed">
        <img class="card-img-top img-fluid" src="https://i.ytimg.com/vi_webp/uo4lr0ZG5H8/maxresdefault.webp" />
      </a>
      <div class="card-body" style=" background: #FF7404;">
        <p class="card-text" style="text-align: center; font-family: Helvetica;">Возьми с собой полис</p>
      </div>
    </div>

    <div class="card">
      <a data-fancybox data-ratio="2" href="https://www.youtube.com/embed/_wlGhz9eMU8?feature=oembed">
        <img class="card-img-top img-fluid" src="https://i.ytimg.com/vi_webp/_wlGhz9eMU8/maxresdefault.webp" />
      </a>

      <div class="card-body" style=" background: #FF7404;">
        <p class="card-text" style="text-align: center; font-family: Helvetica;">Полис для новорожденного</p>
      </div>
    </div>
  </div>
</div>
<div class="row" style=" padding-left: 20%;">
  <div class="card-deck col-9">
    <div class="card">
      <a data-fancybox data-small-btn="true" href="https://www.youtube.com/embed/ZQFEpDTTHO0?feature=oembed">
        <img class="card-img-top img-fluid" src="https://i.ytimg.com/vi_webp/ZQFEpDTTHO0/maxresdefault.webp" />
      </a>

      <div class="card-body" style=" background: #FF7404;">
        <p class="card-text" style="text-align: center; font-family: Helvetica;">Не пропусти беду</p>
      </div>
    </div>

    <div class="card">
      <a data-fancybox data-width="640" data-height="360" href="https://www.youtube.com/embed/TfUF0UKUTC0?feature=oembed">
        <img class="card-img-top img-fluid" src="https://i.ytimg.com/vi_webp/TfUF0UKUTC0/maxresdefault.webp" />
      </a>

      <div class="card-body" style=" background: #FF7404;">
        <p class="card-text" style="text-align: center; font-family: Helvetica;">Страховые представители</p>
      </div>
    </div>

      <video width="640" height="320" controls id="myVideo" style="display:none;">
        <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.mp4" type="video/mp4">
        <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.webm" type="video/webm">
        <source src="https://www.html5rocks.com/en/tutorials/video/basics/Chrome_ImF.ogv" type="video/ogg">
        Your browser doesn't support HTML5 video tag.
      </video>


    </div>
  </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>






<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Медицинская помощь по программе ОМС");
?>
<br>Медицинский центр "Нарцисс" обеспечивает доступность &nbsp;лечения по обязательному медицинскому страхованию (ОМС).<br>
 <br>
 В МЦ "Нарцисс" по полису ОМС принимают:<br>
<ul>
	<li>терапевт,</li>
	<li>эндокринолог,</li>
	<li>офтальмолог.<br>
 <br>
 </li>
</ul>
<table cellspacing="1" cellpadding="1" align="left" style= "border: 1px solid; margin-bottom: 20px;">
<tbody>
<tr style= "border: 1px solid;">
	<td style= "border: 1px solid;">
		<p>
			 ФИО врача
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Специализация
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Дни приема
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Время приема
		</p>
	</td>
</tr>
<tr style= "border: 1px solid;">
	<td style= "border: 1px solid;">
		<p>
			 Майсеёнок Елена Валентиновна
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Терапевт
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Понедельник, вторник, четверг
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 10:00 - 12:00<br>
		</p>
	</td>
</tr>
<tr style= "border: 1px solid;">
	<td style= "border: 1px solid;">
		<p>
			 Михайлова Екатерина Витальевна
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Эндокринолог
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 Понедельник
		</p>
	</td>
	<td style= "border: 1px solid;">
		<p>
			 15:00 - 18:00
		</p>
	</td>
</tr>
</tbody>
</table>
 <br>
 <br>
 <!-- <a href="https://docs.google.com/gview?url=https://med-narciss.ru/besplatno-po-polisu-oms/Расписание%20врачей.docx&embedded=true" target="_blank"><b>График приема врачей по ОМС</b></a><br> --><br>
 <br>
 <iframe title="Когда нужно менять полис" width="853" height="480" src="https://www.youtube.com/embed/6Spo9ITXxzU?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
</iframe><br>
 <br>
 <br>
 <iframe title="Возьми с собой полис" width="853" height="480" src="https://www.youtube.com/embed/uo4lr0ZG5H8?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
</iframe> <br>
<br>
<br>
 <iframe title="Полис для новорожденного" width="853" height="480" src="https://www.youtube.com/embed/_wlGhz9eMU8?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
</iframe><br>
<br>
 <br>
 <iframe title="Не пропусти беду" width="853" height="480" src="https://www.youtube.com/embed/ZQFEpDTTHO0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
</iframe><br>
<br>
 <br>
 <iframe title="«Томскнефтехим»" width="853" height="480" src="/gallery/lab/VIDEO.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
</iframe> <br>
 <br>
<br>
<h4>Реестр страховых медицинских организаций</h4>
<ul>
</ul>
<p style="text-align: left;">
 <b><span style="color: #7a0026;"><img width="409" alt="АльфаСтрвхование-ОМС.png" src="/upload/medialibrary/daf/АльфаСтрвхование-ОМС.png" height="289" title="АльфаСтрвхование-ОМС.png" align="left">ООО «АльфаСтрахование-ОМС» филиал «Сибирь»</span></b>
</p>
<p style="text-align: left;">
	 Директор: Балашова Светлана Васильевна<br>
	 Адрес: 650060 г. Кемерово, пр-т Ленина, 137/4<br>
	 Телефон: +7 (3842) 51-07-43; +7 (3842) 51-55-54<br>
	 Единый информационный центр: 8 800 555-1001<br>
	 Сайт:&nbsp;<a href="http://www.alfastrahoms.ru/" target="_blank">http://www.alfastrahoms.ru/</a>&nbsp; &nbsp;E-mail:&nbsp;<a href="mailto:kuzbass-oms@alfastrah.ru"><span style="color: #000000;"><u>&nbsp;</u></span>kuzbass-oms@alfastrah.ru</a>
</p>
<p style="text-align: left;">
 <a href="https://kemoms.ru/reestry/reestr-strahovyh-meditsinskih-organizatsiy/190/" style="text-align: right;">Список структурных подразделений</a>
</p>
<p>
 <br>
</p>
<p>
 <br>
</p>
<p>
 <br>
</p>
<p>
 <br>
</p>
<p>
 <br>
</p>
<p>
 <b style="color: #7a0026;"><img width="400" alt="ingos.png" src="/upload/medialibrary/8d7/ingos.png" height="132" title="ingos.png" align="left">Филиал ООО СК «Ингосстрах-М» в г. Кемерово</b>
</p>
 Директор: Фитискина Ольга Александровна<br>
 Адрес: 650000 г. Кемерово, ул. Ноградская, 19А<br>
 Телефон: +7 (3842) 75-42-55; +7 (3842) 75-59-29<br>
 Сайт:<a href="http://www.ingos-m.ru/" target="_blank">http://www.ingos-m.ru/</a>&nbsp; &nbsp; E-mail:&nbsp;<a href="mailto:ingos-m@kemerovo.ingos.ru">ingos-m@kemerovo.ingos.ru</a><br>
 <a href="https://kemoms.ru/reestry/reestr-strahovyh-meditsinskih-organizatsiy/130/"> </a>
<p style="text-align: right;">
 <a href="https://kemoms.ru/reestry/reestr-strahovyh-meditsinskih-organizatsiy/130/" style="text-align: right;">Список структурных подразделений</a>
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

 <div>
<link rel="stylesheet" href="/public/skin/styles/splide.css" />
<script src="/public/skin/js/splide.min.js"></script>
<div id="image-slider" class="splide">
<div class="splide__track">
<ul class="splide__list">
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk1.jpeg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk2.jpg" alt="" /><br />
 </div> </li>tomsk
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk3.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk4.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk5.jpg" alt="" /><br />
 </div> </li> 
 <li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk6.jpeg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk7.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk8.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk9.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk10.jpg" alt="" /><br />
 </div> </li>
 <li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk11.jpeg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk12.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk13.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk14.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk15.jpg" alt="" /><br />
 </div> </li>
 <li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk16.jpeg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk17.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk18.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk19.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk20.jpg" alt="" /><br />
 </div> </li>
 <li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk21.jpeg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk22.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk23.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk24.jpg" alt="" /><br />
 </div> </li>
<li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk25.jpg" alt="" /><br />
 </div> </li>
 <li class="splide__slide">
<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="info-block-1__text"> <img style="width: 760px; height: 510px; margin-left: auto; margin-right: auto;" class="photo-gallery__image" src="/gallery/lab/tomsk26.jpg" alt="" /><br />
 </div> </li>
</ul> </div> </div>
<script type="text/javascript">
    new Splide( '#image-slider' ).mount();
  </script><br />