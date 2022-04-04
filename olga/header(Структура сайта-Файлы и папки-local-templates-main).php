<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $SITE_LANG, $APPLICATION, $USER;
if ($USER->IsAuthorized()) {
    $arUser = \Bitrix\Main\UserTable::getByPrimary($USER->GetID())->fetch();
    $accountLinkText = $arUser['NAME'];
} else {
    $accountLinkText = "Вход/Регистрация";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type='image/png' sizes='48x48' href="/favicon.png">
    <? \Only\Site\Helper::showHead($SITE_LANG); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? \Only\Site\Helper::loadCssFolder('/css/'); ?>
</head>
<body class="<?$APPLICATION->ShowViewContent('BODY_CLASS')?>">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(14932369, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/14932369" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div class="preloader"></div>
<? $APPLICATION->ShowPanel() ?>

<? if ($APPLICATION->GetCurDir() == '/'): ?>
	<script type="text/javascript">
		setTimeout("document.getElementById('intro-skip__button').click()", 1000); 
	</script>
    <div class="intro">
		<img style="visibility: hidden;" class="intro__image" data-src="intro-poster" alt=""
             src="/media/intro-poster.fbcc7e72.jpg">
        <div style="visibility: hidden;" class="intro__video-wrapper">
			<video class="intro__video" src="/upload/intro.mp4" type="video/mp4" muted preload="metadata" data-object-fit="cover"></video>
        </div>
        <div style="visibility: hidden;" class="intro__box intro__box--top">
            <div class="intro-content">
                <h2 class="intro-content__title">Незабываемый отдых в Шерегеше</h2>
            </div>
        </div>
        <div class="intro__box intro__box--bottom">
            <div class="intro-content--bottom">
                <div class="weather weather_mobile">
                    <? $APPLICATION->IncludeComponent(
                        'only:weather',
                        '',
                        [
                            'CITY' => 'sheregesh'
                        ],
                        false,
                        []
                    ); ?>
                </div>
                <div style="visibility: hidden;" class="intro-skip" data-intro-skip>
                    <svg style="visibility: hidden;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 160 160" class="intro-skip__progress progress"
                         data-intro-progress>
                        <circle class="intro-skip__progress-bg progress__bg" r="78" cx="80" cy="80" fill="none"
                                stroke-width="3"/>
                        <circle class="intro-skip__progress-value progress__value" data-progress-value r="78" cx="80"
                                cy="80" fill="none"
                                stroke-width="3" stroke-dasharray="490" stroke-dashoffset="490"/>
                    </svg>
                    <span id="intro-skip__button" class="intro-skip__button" data-intro-skip-button>Пропустить<br>видео</span>
                    <a href="/upload/intro-sound.mp4" target="_blank" class="intro-skip__show-button">Смотреть<br>видео</a>
                </div>
                <div class="intro__line"></div>
                <div class="intro__go-to-site" data-intro-skip-button>
                    Перейти на сайт
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
<header class="header _with-header-nav">
    <div class="header-top">
        <!-- @todo убрать в основные стили + адаптив -->
        <nav class="header-nav" style="width: 500px;">
            <!-- <a href="/about/gallery/" class="header-nav__item" data-text="Галерея" data-destination="gallery" data-link-type="top-menu">-->
                <!-- <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!-- <g fill="none" stroke-miterlimit="10" stroke-width="2">-->
                        <!-- <rect height="14" rx="2" width="14" x="1" y="1"/>-->
                        <!-- <circle cx="7.99" cy="8" r="2.5"/>-->
                    <!-- </g>-->
                <!-- </svg>-->
                <!-- <span class="header-nav__item-label">Галерея</span>-->
            <!-- </a>-->
            <!-- <a href="/about/stock/" class="header-nav__item" data-text="Акции" data-destination="stocks" data-link-type="top-menu">-->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.48 16.48">-->
                    <!-- <g fill="none" stroke-miterlimit="10" stroke-width="2">-->
                        <!-- <path d="M1801.17,597.33l6.37,0.72,0.71,6.36h0a1.07,1.07,0,0,1-.29.83l-6.27,6.27a1.4,1.4,0,0,1-1.94-.24l-5.44-5.44a1.4,1.4,0,0,1-.24-1.94l6.27-6.27a1,1,0,0,1,.61-0.29h0.28" transform="translate(-1792.78 -596.33)"/>-->
                        <!-- <circle class="cls-2" cx="10.1" cy="6.38" r="1.65"/>-->
                    <!-- </g>-->
                <!-- </svg>-->
                <!-- <span class="header-nav__item-label">Акции</span>-->
            <!-- </a>-->
            <a href="https://instagram.com/olga_sheregesh_hotel" target="_blank" class="header-nav__item" data-text="Instagram" data-destination="web-camera">
				<svg height="100%" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke: none;" version="1.1" viewBox="0 0 24 24" width="100%" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
    				<rect height="24" id="Artboard10" style="fill:none;" width="24" x="0" y="0"/>
    				<path d="M22,7c0,-2.761 -2.239,-5 -5,-5c-3.054,0 -6.946,0 -10,0c-2.761,0 -5,2.239 -5,5c0,3.054 0,6.946 0,10c0,2.761 2.239,5 5,5c3.054,0 6.946,0 10,0c2.761,0 5,-2.239 5,-5c0,-3.054 0,-6.946 0,-10Z" style="fill:url(#_Radial1);"/>
    				<path d="M14.958,5.005c2.091,0.02 4.016,1.815 4.037,4.037c0.007,1.972 0.007,3.944 0,5.916c-0.02,2.083 -1.815,4.016 -4.037,4.037c-1.972,0.007 -3.944,0.007 -5.916,0c-2.092,-0.02 -4.016,-1.815 -4.037,-4.037c-0.007,-1.972 -0.007,-3.944 0,-5.916c0.019,-2.093 1.81,-4.016 4.037,-4.037c1.972,-0.007 3.944,-0.007 5.916,0Zm-5.889,0.945c-1.623,0.005 -3.103,1.412 -3.119,3.098c-0.006,1.968 -0.006,3.936 0,5.904c0.015,1.605 1.388,3.082 3.098,3.098c1.968,0.006 3.936,0.006 5.904,0c1.609,-0.015 3.082,-1.388 3.098,-3.098c0.006,-1.968 0.006,-3.936 0,-5.904c-0.015,-1.616 -1.415,-3.082 -3.098,-3.098c-1.961,-0.006 -3.922,0 -5.883,0Z" style="fill:#fff;fill-rule:nonzero;"/>
    				<path d="M12.024,8.5c1.618,0.015 3.126,1.263 3.422,2.862c0.211,1.14 -0.187,2.376 -1.027,3.178c-0.935,0.89 -2.382,1.208 -3.622,0.754c-1.386,-0.507 -2.361,-1.968 -2.296,-3.448c0.079,-1.768 1.641,-3.34 3.499,-3.346c0.008,0 0.016,0 0.024,0Zm-0.04,0.947c-1.155,0.011 -2.244,0.887 -2.484,2.025c-0.243,1.151 0.419,2.428 1.506,2.887c1.187,0.502 2.72,-0.061 3.293,-1.233c0.593,-1.211 0.034,-2.856 -1.218,-3.441c-0.341,-0.159 -0.72,-0.239 -1.097,-0.238Z" style="fill:#fff;fill-rule:nonzero;"/>
    				<path d="M16.5,8.227c0,-0.193 -0.077,-0.378 -0.213,-0.514c-0.136,-0.136 -0.321,-0.213 -0.514,-0.213c-0.015,0 -0.031,0 -0.046,0c-0.193,0 -0.378,0.077 -0.514,0.213c-0.136,0.136 -0.213,0.321 -0.213,0.514c0,0.008 0,0.015 0,0.023c0,0.199 0.079,0.39 0.22,0.53c0.14,0.141 0.331,0.22 0.53,0.22c0,0 0,0 0,0c0.414,0 0.75,-0.336 0.75,-0.75c0,-0.008 0,-0.015 0,-0.023Z" style="fill:#fff;"/>
    				<defs>
        				<radialGradient cx="0" cy="0" gradientTransform="matrix(27.933,0,0,27.933,2,21.5)" gradientUnits="userSpaceOnUse" id="_Radial1" r="1">
            				<stop offset="0" style="stop-color:#ff8100;stop-opacity:1"/>
            				<stop offset="0.19" style="stop-color:#ff7209;stop-opacity:1"/>
            				<stop offset="0.32" style="stop-color:#f55e16;stop-opacity:1"/>
            				<stop offset="0.48" style="stop-color:#d92938;stop-opacity:1"/>
            				<stop offset="1" style="stop-color:#9100ff;stop-opacity:1"/>
        				</radialGradient>
    				</defs>
				</svg>
				<!-- <img style="width: 16px; height: 16px; display: inline;" src="/build/inst.png"> -->
                <span class="header-nav__item-label">Instagram</span>
            </a>
            <a href="<?= PATH_CABINET ?>" class="header-nav__item" onclick="window.location.href='<?= PATH_CABINET ?>';">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="7.5" cy="4.5" r="2.5" stroke="#2E3649" stroke-width="2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 16C14.9296 15.302 14.7708 14.6313 14.5353 14.0001C13.4438 11.0746 10.7054 9 7.5 9C4.29456 9 1.55622 11.0746 0.464674 14.0001C0.229195 14.6313 0.070355 15.302 0 16H15ZM2.65025 14.0001H12.3497C11.3935 12.1906 9.55206 10.9999 7.5 10.9999C5.44794 10.9999 3.60645 12.1906 2.65025 14.0001Z" fill="#2E3649"/>
                </svg>
                <span class="header-nav__item-label"><?= $accountLinkText ?></span>
            </a>
        </nav>
    </div>
    <div class="header__main">
        <div class="header-box header-box--left">
            <a href="/" class="logo" data-link-type="logo">
				<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                viewBox="0 0 8466.66 3547.52"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Слой_x0020_1">
                        <metadata id="CorelCorpID_0Corel-Layer"/>
                        <g id="_2302794153120">
                            <path class="fil0" d="M5203.12 1330.35l0 663.41 -163.91 0 0 -819.6 646.35 0 0 156.19 -482.44 0zm-980.94 142.26l221.13 0c70.12,0 127.55,6.2 172.41,18.57 44.87,12.36 82.74,36.1 113.67,71.11 39.14,46.43 58.74,102.09 58.74,167.03 0,85.56 -26.81,151.02 -80.39,196.37 -50.54,45.38 -119.62,68.07 -207.2,68.07l-442.27 0 0 -819.6 163.91 0 0 298.45zm0 368.04l275.23 0c40.22,0 69.59,-7.2 88.16,-21.65 23.68,-17.52 35.54,-45.38 35.54,-83.52 0,-36.05 -11.33,-63.91 -34.02,-83.48 -17.52,-15.48 -45.86,-23.2 -85.04,-23.2l-279.87 0 0 211.85zm-1526.67 51.79c-80.92,80.93 -182.22,121.4 -303.83,121.4 -121.65,0 -222.69,-40.47 -303.08,-121.4 -80.45,-80.9 -120.62,-183.25 -120.62,-306.94 0,-123.69 40.17,-226.03 120.62,-306.95 80.39,-80.91 181.43,-121.38 303.08,-121.38 121.61,0 222.91,40.47 303.83,121.38 80.91,80.92 121.38,183.26 121.38,306.95 0,123.69 -40.47,226.04 -121.38,306.94zm293.15 -63.95c86.5,-18.29 160.34,-219.95 207.07,-324.07l148.29 -330.26 122.17 0 371.12 819.6 -177.84 0 -255.1 -584.53 -123.78 288.68c-57,133.11 -110.59,306.95 -291.93,295.93l0 -165.35zm3023.97 -193.53l105.82 -219.57 109.76 219.57 -215.58 0zm100.09 -460.8l-60.31 0 -159.74 330.12c-14.06,31.24 -30.53,71.24 -49.02,112.45l-27.37 57.96c-37.93,75.85 -82.35,143.44 -130.72,153.68l0 165.39c140.57,8.49 204.38,-94.07 252.49,-202.61l361.79 0 100.52 202.61 179.36 0 -405.13 -819.6 -61.87 0zm-3721.04 140.75c-73.2,0 -134.28,25.25 -183.26,75.75 -48.94,50.54 -73.45,115.44 -73.45,194.84 0,79.36 24.51,144.34 73.45,194.85 48.98,50.49 110.06,75.74 183.26,75.74 74.23,0 135.8,-25.25 184.77,-75.74 48.95,-50.51 73.46,-115.49 73.46,-194.85 0,-79.4 -24.51,-144.3 -73.46,-194.84 -48.97,-50.5 -110.54,-75.75 -184.77,-75.75z"/>
                            <polygon class="fil0" points="2975.85,3293.14 3005.87,3390.93 3103.62,3390.76 3024.44,3450.97 3054.82,3548.63 2975.85,3488.07 2896.94,3548.63 2927.26,3450.97 2848.13,3390.76 2945.83,3390.93 "/>
                            <polygon class="fil0" points="3825.03,3293.14 3855.06,3390.93 3952.8,3390.76 3873.62,3450.97 3903.99,3548.63 3825.03,3488.07 3746.11,3548.63 3776.44,3450.97 3697.31,3390.76 3795.01,3390.93 "/>
                            <polygon class="fil0" points="4674.25,3293.14 4704.27,3390.93 4802.01,3390.76 4722.84,3450.97 4753.21,3548.63 4674.25,3488.07 4595.33,3548.63 4625.7,3450.97 4546.52,3390.76 4644.23,3390.93 "/>
                            <polygon class="fil0" points="5523.47,3293.14 5553.49,3390.93 5651.2,3390.76 5572.01,3450.97 5602.39,3548.63 5523.47,3488.07 5444.5,3548.63 5474.88,3450.97 5395.69,3390.76 5493.45,3390.93 "/>
                            <path class="fil0" d="M4081.96 366.25c97.66,-133.93 181.83,-265.82 212.36,-305.99 16.36,65.55 49.72,183.91 60.62,242.83 -17.32,52.14 -54.75,173.83 -77.06,250.98 12.94,3.64 23.22,10.71 35.15,11.84 65.55,-73.75 78.44,-86.64 110.75,-117.23 69.51,25.95 110.9,33.8 193.64,62.17 27.84,-23.82 37.26,-31.92 67.37,-53.4 -11.88,56.4 -23.91,95.14 -35.36,137.45 -31.84,22.69 -56.23,34.22 -113.97,71.93 5.43,13.92 13.06,23.51 17.53,32.53 28.85,-12.76 173.54,-64.38 181.65,-67.37 45.16,27.15 152.67,98.31 202.69,127.85 10.85,-8.07 20.18,-15.93 29.59,-23.29 -15.57,-19.53 -236.01,-312.29 -236.01,-312.29 -42.17,-61.99 -86.64,10.54 -127.82,39.13 -29.15,-50.15 -204.42,-359.7 -258.44,-445.26 -14.06,-22.26 -49.15,-29.23 -69.64,1.13 -42.37,63.13 -148.06,213.8 -225.33,320.75 -23.38,-14.06 -112.32,-106.52 -148.25,-54.15 -105.17,153.49 -214.71,313.5 -320.71,464.04 12.46,9.99 17.71,11.85 28.86,18.79 36.53,-51.71 63,-88.81 118.87,-168.55 38.67,-55.27 107.51,-151.59 193.63,-275.75 0.14,59.39 1.6,78.83 -1.13,172.45 -11.14,14.01 -120.35,155.62 -163.21,216.54 8.72,8.2 24.17,17.87 23.91,21.08 31.62,-19.91 348.85,-243.43 406.12,-286.77 -0.82,-1.78 -105.69,-81.35 -105.81,-81.44z"/>
                            <path class="fil1" d="M89.02 2785.55c22.73,22.73 50.84,34.15 84.21,34.15 33.45,0 61.47,-11.42 84.25,-34.15 22.74,-22.73 34.14,-51.32 34.14,-85.69 0,-34.36 -11.4,-62.9 -34.14,-85.64 -22.78,-22.73 -50.8,-34.1 -84.25,-34.1 -33.37,0 -61.48,11.37 -84.21,34.1 -22.74,22.74 -34.1,51.28 -34.1,85.64 0,34.37 11.36,62.96 34.1,85.69zm207.11 37.22c-33.57,33.59 -74.52,50.37 -122.9,50.37 -48.34,0 -89.29,-16.78 -122.86,-50.37 -33.59,-33.57 -50.38,-74.54 -50.38,-122.91 0,-48.33 16.79,-89.28 50.38,-122.87 33.57,-33.57 74.52,-50.32 122.86,-50.32 48.38,0 89.33,16.75 122.9,50.32 33.59,33.59 50.38,74.54 50.38,122.87 0,48.37 -16.79,89.34 -50.38,122.91z"/>
                            <polygon class="fil1" points="690.08,2532.84 690.08,2585.34 596.06,2585.34 596.06,2866.91 541.14,2866.91 541.14,2585.34 446.69,2585.34 446.69,2532.84 "/>
                            <polygon class="fil1" points="880.97,2814.42 1028.92,2814.42 1028.92,2866.92 826.05,2866.92 826.05,2532.86 1026.48,2532.86 1026.48,2585.34 880.97,2585.34 880.97,2672.21 1014.59,2672.21 1014.59,2724.23 880.97,2724.23 "/>
                            <path class="fil1" d="M1147.22 2866.92l0 -50.59c21,2.86 36.7,-2.22 47.03,-15.26 10.33,-13.07 15.49,-38.02 15.49,-74.94l0 -193.27 223.87 0 0 334.06 -54.92 0 0 -281.58 -114.07 0 0 139.83c0,29.3 -3.07,53.93 -9.28,73.98 -6.2,20.04 -15.02,35.1 -26.47,45.12 -11.5,9.98 -23.82,16.66 -37,20.01 -13.2,3.38 -28.08,4.24 -44.65,2.64z"/>
                            <path class="fil1" d="M1718.99 2815.38c16.23,0 29.59,-5.47 40.09,-16.44 10.5,-10.98 15.7,-24.91 15.7,-41.79 0,-16.82 -5.2,-30.76 -15.7,-41.78 -10.5,-10.97 -23.86,-16.44 -40.09,-16.44l-68.24 0 0 116.45 68.24 0zm0 -167.99c31.51,0 57.79,10.59 78.96,31.72 21.18,21.17 31.76,47.2 31.76,78.04 0,31.2 -10.58,57.27 -31.76,78.28 -21.17,20.99 -47.45,31.49 -78.96,31.49l-123.17 0 0 -334.06 54.93 0 0 114.53 68.24 0z"/>
                            <path class="fil1" d="M2330.81 2815.38c12.71,0 23.42,-4.51 32.19,-13.58 8.72,-9.07 13.15,-20.13 13.15,-33.19 0,-13.02 -4.43,-24.08 -13.15,-33.14 -8.77,-9.08 -19.48,-13.63 -32.19,-13.63l-88.29 0 0 93.54 88.29 0zm-10.51 -230.98l-77.78 0 0 87.81 77.78 0c12.07,0 22.26,-4.21 30.55,-12.63 8.24,-8.45 12.41,-18.87 12.41,-31.28 0,-12.41 -4.17,-22.82 -12.41,-31.28 -8.29,-8.42 -18.48,-12.62 -30.55,-12.62zm63.92 109.28c14.66,7.64 26.12,18.14 34.36,31.49 8.29,13.37 12.44,28.82 12.44,46.31 0,27.37 -9.71,50.1 -29.11,68.24 -19.43,18.13 -43.11,27.2 -71.1,27.2l-143.22 0 0 -334.06 132.71 0c27.38,0 50.51,8.8 69.43,26.5 18.91,17.62 28.42,39.66 28.42,66.08 0,28.98 -11.33,51.71 -33.93,68.24z"/>
                            <path class="fil1" d="M2946.92 2873.12c-50.29,0 -91.93,-16.61 -125.04,-49.84 -33.1,-33.28 -49.63,-74.41 -49.63,-123.39 0,-48.98 16.53,-90.11 49.63,-123.35 33.11,-33.28 74.75,-49.89 125.04,-49.89 30.19,0 58.13,7.15 83.77,21.48 25.61,14.32 45.52,33.71 59.88,58.22l-47.73 27.68c-8.89,-16.53 -21.86,-29.67 -38.91,-39.35 -17.01,-9.72 -36.06,-14.57 -57.01,-14.57 -35.62,0 -64.52,11.27 -86.64,33.88 -22.13,22.6 -33.15,51.23 -33.15,85.9 0,34.65 11.02,63.3 33.15,85.9 22.12,22.61 51.02,33.88 86.64,33.88 20.95,0 40.09,-4.86 57.27,-14.53 17.18,-9.72 30.06,-22.87 38.65,-39.39l47.73 27.2c-14.02,24.51 -33.84,43.99 -59.45,58.48 -25.59,14.45 -53.65,21.69 -84.2,21.69z"/>
                            <polygon class="fil1" points="3286.23,2814.42 3434.18,2814.42 3434.18,2866.92 3231.31,2866.92 3231.31,2532.86 3431.75,2532.86 3431.75,2585.34 3286.23,2585.34 3286.23,2672.21 3419.85,2672.21 3419.85,2724.23 3286.23,2724.23 "/>
                            <path class="fil1" d="M3702.86 2700.84c16.22,0 29.59,-5.48 40.09,-16.45 10.49,-10.98 15.7,-24.9 15.7,-41.79 0,-16.82 -5.21,-30.75 -15.7,-41.72 -10.5,-11.02 -23.87,-16.49 -40.09,-16.49l-68.24 0 0 116.45 68.24 0zm0 -168c31.49,0 57.79,10.51 78.96,31.5 21.17,21 31.76,47.08 31.76,78.26 0,30.9 -10.59,56.88 -31.76,78.06 -21.17,21.13 -47.47,31.72 -78.96,31.72l-68.24 0 0 114.53 -54.93 0 0 -334.07 123.17 0z"/>
                            <path class="fil1" d="M3997.74 2814.42l130.82 0 0 -230.02 -106.91 0 0 115.97c0,49.62 -7.98,87.63 -23.91,114.05zm185.65 0l35.79 0 0 116.45 -54.84 0 0 -63.95 -202.87 0 0 63.95 -54.87 0 0 -116.45 31.02 0c19.43,-25.42 29.11,-63.78 29.11,-115.01l0 -166.55 216.66 0 0 281.56z"/>
                            <polygon class="fil1" points="4608.17,2814.42 4643.97,2814.42 4643.97,2930.87 4589.13,2930.87 4589.13,2866.92 4362.39,2866.92 4362.39,2532.86 4417.33,2532.86 4417.33,2814.42 4553.3,2814.42 4553.3,2532.86 4608.17,2532.86 "/>
                            <polygon class="fil1" points="4842.02,2814.42 4989.97,2814.42 4989.97,2866.92 4787.1,2866.92 4787.1,2532.86 4987.53,2532.86 4987.53,2585.34 4842.02,2585.34 4842.02,2672.21 4975.65,2672.21 4975.65,2724.23 4842.02,2724.23 "/>
                            <polygon class="fil1" points="5679.57,2532.84 5734.44,2532.84 5734.44,2866.91 5350.23,2866.91 5350.23,2532.84 5405.16,2532.84 5405.16,2814.41 5514.92,2814.41 5514.92,2532.84 5569.8,2532.84 5569.8,2814.41 5679.57,2814.41 "/>
                            <polygon class="fil1" points="5951.54,2814.42 6099.49,2814.42 6099.49,2866.92 5896.62,2866.92 5896.62,2532.86 6097.05,2532.86 6097.05,2585.34 5951.54,2585.34 5951.54,2672.21 6085.17,2672.21 6085.17,2724.23 5951.54,2724.23 "/>
                            <path class="fil1" d="M6368.21 2700.84c16.23,0 29.59,-5.48 40.1,-16.45 10.49,-10.98 15.7,-24.9 15.7,-41.79 0,-16.82 -5.21,-30.75 -15.7,-41.72 -10.51,-11.02 -23.87,-16.49 -40.1,-16.49l-68.24 0 0 116.45 68.24 0zm0 -168c31.5,0 57.79,10.51 78.97,31.5 21.17,21 31.75,47.08 31.75,78.26 0,30.9 -10.58,56.88 -31.75,78.06 -21.18,21.13 -47.47,31.72 -78.97,31.72l-68.24 0 0 114.53 -54.92 0 0 -334.07 123.16 0z"/>
                            <polygon class="fil1" points="6676.95,2814.42 6824.89,2814.42 6824.89,2866.92 6622.02,2866.92 6622.02,2532.86 6822.46,2532.86 6822.46,2585.34 6676.95,2585.34 6676.95,2672.21 6810.57,2672.21 6810.57,2724.23 6676.95,2724.23 "/>
                            <polygon class="fil1" points="7159,2532.84 7159,2585.34 7025.36,2585.34 7025.36,2866.91 6970.44,2866.91 6970.44,2532.84 "/>
                            <polygon class="fil1" points="7349.89,2814.42 7497.83,2814.42 7497.83,2866.92 7294.96,2866.92 7294.96,2532.86 7495.4,2532.86 7495.4,2585.34 7349.89,2585.34 7349.89,2672.21 7483.52,2672.21 7483.52,2724.23 7349.89,2724.23 "/>
                            <polygon class="fil1" points="7972.64,2532.84 8027.52,2532.84 8027.52,2866.91 7643.31,2866.91 7643.31,2532.84 7698.23,2532.84 7698.23,2814.41 7807.99,2814.41 7807.99,2532.84 7862.88,2532.84 7862.88,2814.41 7972.64,2814.41 "/>
                            <path class="fil1" d="M8259.97 2748.1l105.95 0 -52.93 -150.81 -53.02 150.81zm147.47 118.82l-23.38 -67.28 -142.22 0 -23.39 67.28 -59.64 0 121.21 -334.05 65.85 0 120.8 334.05 -59.23 0z"/>
                        </g>
                    </g>
                </svg>
            </a>
            <!--
            <div class="select select-lang">
                <svg class="select__arrow select-lang__arrow" xmlns="http://www.w3.org/2000/svg" width="6" height="4"
                     viewBox="0 0 6.2 3.63">
                    <path fill="none" stroke-miterlimit="10" stroke-width=".75" d="M5.94.27L3.1 3.1.27.27"/>
                </svg>

                <? $APPLICATION->IncludeComponent(
                    'only:lang',
                    '',
                    [
                        'LANG' => ['ru', 'en'],
                        'SELECTED' => $SITE_LANG
                    ],
                    false,
                    []
                ); ?>
            </div>
            -->
            <div class="weather">
                <? $APPLICATION->IncludeComponent(
                    'only:weather',
                    '',
                    [
                        'CITY' => 'sheregesh',
                        'CACHE_TIME' => 10800
                    ],
                    false,
                    []
                ); ?>
            </div>
        </div>
        <div class="navigation header-navigation">
            <? $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'top',
                Array(
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '2',
                    'MENU_CACHE_GET_VARS' => array(''),
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'N',
                    'ROOT_MENU_TYPE' => 'top',
                    'USE_EXT' => 'N'
                )
            ); ?>
        </div>
        <div class="header-box header-box--right">
            <button class="button book-it-button" data-booking-button>
                <div class="book-it-button__top-left-border"></div>
                <div class="book-it-button__text-wrapper">
                    <div class="book-it-button__bell">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.08 33">
                            <defs>
                                <style>.cls-1{fill:#fff;}</style>
                            </defs>
                            <path d="M30.07,28c-.08-2.62-.65-7.51-3.68-11C24.2,14.54,21,13.19,17,13L16,13l-.91,0c-4,.17-7.13,1.51-9.31,4C2.75,20.44,2.12,25.36,2,28H30.07m2,5H0V31H15V30H0S-1.45,11.73,15,11V9h2v2c16.69.7,15,19,15,19H17v1H32v2ZM0,30H0ZM19,9H13V7h6V9ZM8.3,9l-2-3.46L8,4.54,10,8,8.3,9ZM23.77,9,22,8l2-3.46,1.73,1L23.77,9ZM17,4H15V0h2V4Z"/>
                        </svg>
                    </div>
                    <div class="book-it-button__text">
                        забронировать
                    </div>
                </div>
                <div class="book-it-button__bottom-right-border"></div>
            </button>
            <button class="book-it-button-mobile">
                <span class="book-it-button-mobile__text">бронь</span>
                <svg class="book-it-button-mobile__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.15 20.29">
                    <path class="cls-1"
                          d="M1570.36-2285.42a0.46,0.46,0,0,1-.46-0.45,12.38,12.38,0,0,0-2.79-8,8.93,8.93,0,0,0-6.86-3.41c-4.9,0-9.12,4.5-9.6,10.25q0,0.55,0,1.11a0.46,0.46,0,0,1-.46.45,0.46,0.46,0,0,1-.46-0.45q0-.6,0-1.18c0.52-6.22,5.15-11.09,10.53-11.09a9.84,9.84,0,0,1,7.58,3.74,13.27,13.27,0,0,1,3,8.53A0.46,0.46,0,0,1,1570.36-2285.42Z"
                          transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-2" d="M1560.05-2277.48" transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-1"
                          d="M1570.36-2285.42h-20.22a0.47,0.47,0,0,1-.46-0.48,0.47,0.47,0,0,1,.46-0.48h20.22a0.47,0.47,0,0,1,.46.48A0.47,0.47,0,0,1,1570.36-2285.42Z"
                          transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-1"
                          d="M1561.64-2300.14h-2.78a0.47,0.47,0,0,1-.46-0.48,0.47,0.47,0,0,1,.46-0.48h2.78a0.47,0.47,0,0,1,.46.48A0.47,0.47,0,0,1,1561.64-2300.14Z"
                          transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-1"
                          d="M1560.24-2297.51a0.47,0.47,0,0,1-.46-0.48v-2.15a0.47,0.47,0,0,1,.46-0.48,0.47,0.47,0,0,1,.46.48v2.15A0.47,0.47,0,0,1,1560.24-2297.51Z"
                          transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-1"
                          d="M1560.24-2281.91a0.47,0.47,0,0,1-.46-0.48v-2.56a0.47,0.47,0,0,1,.46-0.48,0.47,0.47,0,0,1,.46.48v2.56A0.47,0.47,0,0,1,1560.24-2281.91Z"
                          transform="translate(-1549.17 2301.6)"/>
                    <path class="cls-1"
                          d="M1570.36-2281.81h-20.22a0.47,0.47,0,0,1-.46-0.48,0.47,0.47,0,0,1,.46-0.48h20.22a0.47,0.47,0,0,1,.46.48A0.47,0.47,0,0,1,1570.36-2281.81Z"
                          transform="translate(-1549.17 2301.6)"/>
                </svg>
            </button>
            <button class="menu-button">
                <span class="menu-button__text">меню</span>
                <div class="menu-button__icon menu-icon">
                    <div class="menu-icon__line"></div>
                    <div class="menu-icon__line"></div>
                    <div class="menu-icon__line"></div>
                </div>
            </button>
        </div>
        <div class="burger-menu">
            <div class="desktop-menu-spacer"></div>
            <div class="menu-wrapper" data-burger-menu-items>
            <? $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'main',
                Array(
                    'ALLOW_MULTI_SELECT' => 'N',
                    'CHILD_MENU_TYPE' => 'left',
                    'DELAY' => 'N',
                    'MAX_LEVEL' => '2',
                    'MENU_CACHE_GET_VARS' => array(''),
                    'MENU_CACHE_TIME' => '3600',
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_USE_GROUPS' => 'N',
                    'ROOT_MENU_TYPE' => 'top',
                    'USE_EXT' => 'Y'
                )
            ); ?>
            </div>
        </div>
    </div>
</header>

<div id="barba-wrapper">
    <?$APPLICATION->ShowViewContent('BARBA_START');?>

