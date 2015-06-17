
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Colegio Nuevo Santander - Anuario 2015</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/cns-css1.css" />
	
</head>
<body class="">
	<section class="cont-login hidden-xs col-sm-4 col-md-4 col-lg-2 col-sm-offset-4 col-md-offset-4 col-lg-offset-5">
		<div class="header-login col-xs-12">ANUARIO <strong style="color:#fff;">2015</strong></div>
		<form class="form-login">
			<input type="text" class="input-text-login input-usuario" id="valUsuario" placeholder="Usuario" />
			<input type="password" class="input-text-login input-password" id="valPassword" placeholder="Contraseña" />
			<a href="#" class="btn-olvidaste-pass">¿Olvidaste tu contraseña?</a>
			<div class="login-error-message" id="loginErrorMessage">Tu sesión ha caducado, vuelve a ingresar tus datos de acceso.</div>
			<div class="loading-bar" id="loadingBar"><img src="imagenes/principal/loading1.gif" /></div>
			<a class="btn-login-ingresar" id="btnIngresar">INGRESAR</a>
			<a class="btn-login-registro">REGISTRO</a>
		</form>
	</section>
	<section class="cont-login-xs visible-xs col-xs-12">
		<div class="header-login col-xs-12">ANUARIO <strong style="color:#fff;">2015</strong></div>
		<form class="form-login">
			<input type="text" class="input-text-login input-usuario" id="valUsuario" placeholder="Usuario" />
			<input type="password" class="input-text-login input-password" id="valPassword" placeholder="Contraseña" />
			<a href="#" class="btn-olvidaste-pass">¿Olvidaste tu contraseña?</a>
			<div class="login-error-message" id="loginErrorMessage">Tu sesión ha caducado, vuelve a ingresar tus datos de acceso.</div>
			<div class="loading-bar" id="loadingBar"><img src="imagenes/principal/loading1.gif" /></div>
			<a class="btn-login-ingresar" id="btnIngresar">INGRESAR</a>
			<a class="btn-login-registro">REGISTRO</a>
		</form>
	</section>
	<div class="fondo-login hidden-xs"></div>
	<footer class="footer-todo col-xs-12">
		<img src="imagenes/principal/logos-escuela-login.jpg" border="0" class="img-responsive col-xs-12 col-sm-4 col-md-4 col-lg-2 col-sm-offset-4 col-md-offset-4 col-lg-offset-5" />
		<p class="hidden-xs col-sm-4 col-md-4 col-lg-2 col-sm-offset-4 col-md-offset-4 col-lg-offset-5">Politicas de privacidad<br />
		Todos los derechos reservados<br />
		Colegio Nuevo Santander 2015 ®</p>
		<p class="visible-xs col-xs-12" style="font-size:9px;">Politicas de privacidad<br />
		Todos los derechos reservados<br />
		Colegio Nuevo Santander 2015 ®</p>
	</footer>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		
		$(function () {
		
			$.get("index.php?error=1", function(data, status){
			
				console.log("Data: " + data + "\nStatus: " + status);
				
			});
			
			$('#btnIngresar').click(function () {
			
				login();
			
			});
			
			$(document).keypress(function (e) {
			
				if (e.which == 13) {
				
					if ($("#valUsuario").is(":focus") || $("#valPassword").is(":focus")) {
					
						login();
					
					}
					
				}
				
			});
		
		});
		
		function login() {
		
			$('#loadingBar').css('display','block');
			$('#loginErrorMessage').css('display','none');
			$('#valUsuario').removeClass('input-text-login-error');
			$('#valPassword').removeClass('input-text-login-error');
			
			var usuario = $('#valUsuario').val();
			var password = $('#valPassword').val();
			
			$.ajax({
				type: "POST",
				url: "cms/inc/login.php",
				data:{usuario:usuario, password:password }, 
				success: function(data){
				
					switch (data) {
					
						case '0':
							console.log('Has ingresado.');
							$('#loadingBar').css('display','none');
							$('#loginErrorMessage').css('display','none');
							$('#valUsuario').removeClass('input-text-login-error');
							$('#valPassword').removeClass('input-text-login-error');
							window.location.replace("principal.php");
							break;
						
						case '1':
							console.log('El usuario no existe.');
							$('#loadingBar').css('display','none');
							$('#loginErrorMessage').css('display','block');
							$('#loginErrorMessage').html('El usuario no existe.');
							$('#valUsuario').addClass('input-text-login-error');
							$('#valPassword').removeClass('input-text-login-error');
							break;
						
						case '2':
							console.log('La contraseña no es correcta.');
							$('#loadingBar').css('display','none');
							$('#loginErrorMessage').css('display','block');
							$('#loginErrorMessage').html('La contraseña no es correcta.');
							$('#valUsuario').removeClass('input-text-login-error');
							$('#valPassword').addClass('input-text-login-error');
							break;
					
					}
					
				}
			});
		
		}
		
		<?php

		if (isset($_GET['error'])) {

			echo "$('#loginErrorMessage').css('display','block');";

		}

		?>
	</script>
</body>
</html>