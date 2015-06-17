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