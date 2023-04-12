<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Solicitud enviada</title>

		<meta charset="UTF-8">
		<!-- FAVICON -->
	    <link rel="shortcut icon" href="images/favicon.ico">
	    <!-- GEO-tag -->
	    <meta name="geo.region" content="ES-M" />
		<meta name="geo.placename" content="Madrid" />
		<meta name="geo.position" content="40.405009;-3.710512" />
		<meta name="ICBM" content="40.405009, -3.710512" />

		<!-- SEO -->
		<meta name="description" content="Traductor y desarrollador web especializado en traducción técnica. Inglés a español." />
		<meta name="keywords" content="traducción, localización, desarrollo web, página web, html, css, spanish, english, español, inglés" />
		<meta http-equiv="Content-Language" content="es"/>


		<!-- meta tag para indexar la página en motores de búsqueda. Index para la página, y follow para los enlaces -->
		<meta name="robots" content="index, follow">  


		<!-- BOOTSTRAP-->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!-- start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!-- start-smoth-scrolling-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!--//End-top-nav-script-->

<!-- formulario PHPH -->
<?
if (!$_POST){

}else{
    /* Estoy recibiendo el formulario, compongo el cuerpo | Sustituir con
    los nombres de los campos NAME del formulario en HTML */
    $cuerpo = "Formulario enviado\n";
/*    $cuerpo .= "Nombre: " . $_POST["nombre"] . "\n";*/
	$cuerpo .= "Mensaje: " . $_POST["message"] . "\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\n";

 
    //mando el correo... ( SUSTITUIR POR TU EMAIL )
    mail("a.gomez@my.westminster.ac.uk","Formulario recibido",$cuerpo);

}
?>
</head>

<body>

		<!--- start-header-->
			<div id="home" class="header">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="http://www.albertogomezmartin.com/es/">Alberto Gómez-Martín</a>
						</div>
						<!--start-top-nav-->

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!--- //End-header-->
			<!--banner-->
			<div class="banner text-center">
				<div class="container">
					<div class="banner-info">
						<script>
							$(document).ready(function(){
								$('.enviado').click(function(){
								$('.enviado').hide('slow');
								$('.mostrar').show('slow');
								});
							});
							</script>

						<h1 class="enviado"> Solicitud enviada correctamente.</h1>

				</div>
			</div>
			<!--//banner-->







				</div>
			</div>

</body>
</html>
