
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=koi8-r" />
		<title>Добро пожаловать в Шерегеш</title>
		<link rel="stylesheet" type="text/css" href="my.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
<script type="text/javascript" src="/jquery.let_it_snow.js"></script>
<script type="text/javascript" src="/modernizr.custom.js"></script>
<script type="text/javascript">
	$(document).ready( function() {
	
		$("canvas.snow").let_it_snow({
		   speed: 2, 
		   interaction: true, 
		   size: 10,
		   count: 50,
		   opacity: 0.3, 
		   color: "#ffffff", 
		   windPower: -2, 
		   image: "/images/snow.png" 
		});
			$('#olga').click(function(){
				var goal = $(this).attr("href");
				$("#light").addClass("animated");
				$("#olga, #berloga").css({"position":"initial"});
				$("#olga_logo, #berloga_logo").css({"display":"none"});
				
				setTimeout (function(){
						$("#olga_logo").css({"z-index":"2", "right":"inherit", "left":"50%", "margin-left":"-120px"});
						$("#olga_logo").css({"display":"block"});
						$("#olga_logo").attr("src","/images/olga_logo_h.png");
						}, 1000);
				
				setTimeout ("window.location='"+goal+"'", 3000);
				
				return false;
			})


			$('#berloga').click(function(){
				var goal = $(this).attr("href");
				$("#light").addClass("animated");
				$("#olga, #berloga").css({"position":"initial"});
				$("#olga_logo, #berloga_logo").css({"display":"none"});
				
				setTimeout (function(){
						$("#berloga_logo").css({"z-index":"2", "right":"inherit", "left":"50%", "margin-left":"-70px"});
						$("#berloga_logo").css({"display":"block"});
						$("#berloga_logo").attr("src","/images/berloga_logo_h.png");
						}, 1000);
				
				setTimeout ("window.location='"+goal+"'", 3000);
				
				return false;
			})
	});
</script>		
		
	</head>
	<body >
		<div class="cont">
			<div id="window">
				<div id="title">Добро пожаловать в Шерегеш!</div>
				<script>
				if (Modernizr.canvas) {
					document.write('<canvas width="100%" height="100%" class="snow"></canvas>');
				}
				</script>
				<div id="light"></div>
				<a href="http://www.olgahotel.ru/" id="olga">
					<img src="/images/olga_logo.png" id="olga_logo"/>
				</a>
				<a href="http://www.berlogahotel.ru/" id="berloga">
					<img src="/images/berloga_logo.png" id="berloga_logo" />
				</a>
				<div class="clear"></div>
			</div>
			<br />
			Телефоны отдела бронирования: <br />
			+7 (3843) 900-222<br /><br />
			e-mail: <a href="mailto:reserve@olgaberloga.ru">reserve@olgaberloga.ru</a><br /> 
			<br />
			<br /> 
			<br />
			
		</div>
	</body>
</html>
