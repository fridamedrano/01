<?php require('cms/inc/conexion_sql.php'); session_start();

if (!isset($_SESSION['usuario-id'])) {

	header ('Location: index.php?error=1');

}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Colegio Nuevo Santander - Anuario 2015</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/cns-css2.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<section class="header-logo col-xs-12 col-sm-3 col-md-3 col-lg-2">ANUARIO <strong style="color:#fff;">2015</strong></section>
			<section class="header-titulo col-xs-12 col-sm-9 col-md-9 col-lg-10"><img src="imagenes/principal/ico-btn-prin-1-titulo.jpg" border="0" width="auto" height="50%" />MI ANUARIO</section>
		</div>
		<div class="row">
			<section id="barraMenu" class="barra-menu-todo">
				<div class="menu-barra hidden-xs col-sm-3 col-md-3 col-lg-2">
					<a href="#" class="btn-menu-prin btn-menu-prin-1 btn-menu-prin-1-activo">Mi Anuario</a>
					<a href="#" class="btn-menu-prin btn-menu-prin-2">Perfil</a>
					<a href="javascript:abrirSubmenu(3,1)" class="btn-menu-prin btn-menu-prin-3">Colegio</a>
					<div id="submenu3" class="submenu-wrapper">
						<a href="#" class="btn-submenu">Historia</a>
						<a href="#" class="btn-submenu">Filosofía</a>
						<a href="#" class="btn-submenu">Modelo Académico</a>
						<a href="#" class="btn-submenu">Cuerpo Docente</a>
						<a href="#" class="btn-submenu">Galería</a>
					</div>
					<a href="javascript:abrirSubmenu(4,1)" class="btn-menu-prin btn-menu-prin-4">Grupos</a>
					<div id="submenu4" class="submenu-wrapper">
						<a href="#" class="btn-submenu">Pre-primaria</a>
						<a href="#" class="btn-submenu">Primaria</a>
						<a href="#" class="btn-submenu">Secundaria</a>
						<a href="#" class="btn-submenu">Preparatoria</a>
						<a href="#" class="btn-submenu">Eventos</a>
						<a href="#" class="btn-submenu">Actividades</a>
					</div>
					<a href="#" class="btn-menu-prin btn-menu-prin-5">Eventos</a>
					<a href="javascript:abrirSubmenu(6,1)" class="btn-menu-prin btn-menu-prin-6">Actividades</a>
					<div id="submenu6" class="submenu-wrapper">
						<a href="#" class="btn-submenu">Futbol</a>
						<a href="#" class="btn-submenu">Basketbol</a>
						<a href="#" class="btn-submenu">Artes</a>
					</div>
					<a href="#" class="btn-menu-prin btn-menu-prin-7">Cerrar Sesión</a>
					<div class="bottom-menu">
						<img src="imagenes/principal/logos-escuela-menu.jpg" border="0" class="img-responsive logos-menu" />
						<p>Politicas de privacidad<br />Todos los derechos reservados<br />Colegio Nuevo Santander 2015 ®</p>
					</div>
				</div>
				<nav class="navbar navbar-default visible-xs">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Mi Anuario <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Perfíl</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Colegio<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Historia</a></li>
										<li><a href="#">Filosofía</a></li>
										<li><a href="#">Modelo Académico</a></li>
										<li><a href="#">Cuerpo Docente</a></li>
										<li><a href="#">Galaería</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Grupos<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Pre-primaria</a></li>
										<li><a href="#">Primaria</a></li>
										<li><a href="#">Secundaria</a></li>
										<li><a href="#">Preparatoria</a></li>
										<li><a href="#">Eventos</a></li>
										<li><a href="#">Actividades</a></li>
									</ul>
								</li>
								<li><a href="#">Eventos</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actividades<span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Futbol</a></li>
										<li><a href="#">Basketbol</a></li>
										<li><a href="#">Artes</a></li>
									</ul>
								</li>
								<li><a href="#">Cerrar Sesión</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</section>
			<!--principal-->
			<section id="principalInfoUsuario" class="prin-info-usuario col-xs-12 col-sm-9 col-md-9 col-lg-8">
				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<img src="imagenes/principal/foto-usuario.jpg" border="0" class="img-responsive" />
				</div>
				<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
					<p class="usuario-nombre-1">Diego David Orozco Villarreal</p>
					<p class="usuario-grupo-1">grupo 5a</p>
					<p class="usuario-subcontent">Partimos de los valores humanos, universales y mexicanos, con la misión de ser siempre la institución educativa líder que genere egresados de calidad y excelencia.</p>
					<div class="usuario-clubs col-xs-12 col-sm-12 col-md-6 media">
						<div class="media-left media-top">
							<img class="media-object" src="imagenes/principal/ico-clubs-prin.jpg" />
						</div>
						<div class="media-body">
							<span class="usuario-club-nombre">Actividades</span>
							<ul>
								<li>Basketbol</li>
								<li>Arte</li>
							</ul>
						</div>
					</div>
					<div class="usuario-clubs col-xs-12 col-sm-12 col-md-6 media">
						<div class="media-left media-top">
							<img class="media-object" src="imagenes/principal/ico-eventos-prin.jpg" />
						</div>
						<div class="media-body">
							<span class="usuario-club-nombre">Eventos</span>
							<ul>
								<li>Torneo Amistad 2015</li>
								<li>Torneo Hrn. Mode 2015</li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
					<img src="imagenes/principal/logos-escuela-side.jpg" border="0" class="img-responsive" />
				</div>
			</section>
			<section id="principalMenuGrupos" class="prin-menu-grupos col-xs-12 col-sm-9 col-md-9 col-lg-8">
				<a href="#" class="menu-grupos-sm col-xs-6 col-sm-3 col-md-3 col-lg-3"><span>PRE-PRIMARIA</span><img src="imagenes/principal/btn-grupo-1.jpg" border="0" class="img-responsive" /></a>
				<a href="#" class="menu-grupos-sm col-xs-6 col-sm-3 col-md-3 col-lg-3"><span>PRIMARIA</span><img src="imagenes/principal/btn-grupo-2.jpg" border="0" class="img-responsive" /></a>
				<a href="#" class="menu-grupos-sm col-xs-6 col-sm-3 col-md-3 col-lg-3"><span>SECUNDARIA</span><img src="imagenes/principal/btn-grupo-3.jpg" border="0" class="img-responsive" /></a>
				<a href="#" class="menu-grupos-sm col-xs-6 col-sm-3 col-md-3 col-lg-3"><span>PREPARATORIA</span><img src="imagenes/principal/btn-grupo-4.jpg" border="0" class="img-responsive" /></a>
				<a href="#" class="menu-grupos-lg col-xs-12 col-sm-6 col-md-6 col-lg-6"><span>EVENTOS</span><img src="imagenes/principal/btn-grupo-5.jpg" border="0" class="img-responsive" /></a>
				<a href="#" class="menu-grupos-lg col-xs-12 col-sm-6 col-md-6 col-lg-6"><span>ACTIVIDADES</span><img src="imagenes/principal/btn-grupo-6.jpg" border="0" class="img-responsive" /></a>
			</section>
		</div>
	</div>
	<script src="js/funciones.js"></script>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/angular.js"></script>
	<script>
		
	</script>
</body>
</html>