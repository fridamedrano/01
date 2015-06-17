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

	<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body >
	<div class="container-fluid" >
		<div class="row">
			<section class="header-logo col-xs-12 col-sm-3 col-md-3 col-lg-2">ANUARIO <strong style="color:#fff;">2015</strong></section>
			<section class="header-titulo col-xs-12 col-sm-9 col-md-9 col-lg-10"><img src="imagenes/principal/ico-btn-prin-1-titulo.jpg" border="0" width="auto" height="50%" />COLEGIO</section>
		</div>
		<div class="row">
			<section class="barra-menu-todo">
				<div class="menu-barra hidden-xs col-sm-3 col-md-3 col-lg-2">
					<a href="#" class="btn-menu-prin btn-menu-prin-1 btn-menu-prin-1-activo">Mi Anuario</a>
					<a href="#" class="btn-menu-prin btn-menu-prin-2">Perfil</a>
					<a href="javascript:abrirSubmenu(3,1)" class="btn-menu-prin btn-menu-prin-3">Colegio</a>
					<div id="submenu3" class="submenu-wrapper" id="submenu-open">
						<a href="#" class="btn-submenu">Historia</a>
						<a href="#" class="btn-submenu">Filosofía</a>
						<a href="#" class="btn-submenu">Modelo Académico</a>			
						<a href="#" class="btn-submenu">Cuerpo Docente</a>	
						<a href="#" class="btn-submenu">Galería</a>							
					</div>
					<a href="javascript:abrirSubmenu(4,1)" class="btn-menu-prin btn-menu-prin-4">Grupos</a>
					<div id="submenu4" class="submenu-wrapper">
						<a href="#" id="showLeft" class="btn-submenu">Pre-primaria</a>
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
<div class="container-fluid no-space">
<section class="no-space col-xs-12 col-sm-9 col-md-9 col-lg-10" style="position: relative">
	
		<div class="row">
			<div class="col-lg-12">
			<!-- side menu -->
				<div id="site-wrapper">
				<div id="site-canvas">

				<div id="site-menu">
				<div class="side-menu cbp-spmenu-push cbp-spmenu-vertical hidden-xs col-sm-3 col-md-3 col-lg-2" >
					<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
						<div clas="container">
							<h3>Pre-Primaria</h3>
							<p>Partimos de los valores humanos, universales y mexicanos, con la misión de ser siempre la institución educativa líder que genere egresados de calidad y excelencia.</p>
							<br>
							<p>PRIMERO:</p>
								<P><a href="#">1A</a> <a href="#">1B</a><a href="#">1C</a></P>
							<p>SEGUNDO:</p>
								<P><a href="#">2A</a> <a href="#">2B</a><a href="#">2C</a></P>
							<p>TERCERO:</p>
								<P><a href="#">3A</a> <a href="#">3B</a><a href="#">3C</a></P>
							<p>CUARTO:</p>
								<P><a href="#">4A</a> <a href="#">4B</a><a href="#">4C</a></P>
							<p>QUINTO:</p>
								<P><a href="#">5A</a> <a href="#">5B</a><a href="#">5C</a></P>
							<p>SEXTO:</p>
								<P><a href="#">6A</a> <a href="#">6B</a><a href="#">6C</a></P>
						</div>
					</nav> 
				</div>
				</div>
				<section id="principalInfoUsuario" class="prin-texto-simple col-xs-12 col-sm-9 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
					<p class="titulo-h1">Filosofía</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
					<p class="texto-simple">
						<span class="strong-text">MISIÓN:
						<br>El colegio promueve la formación de hábitos que hagan del alumno un sujeto activo, dispuesto siempre a participar con sus compañeros en el trabajo de equipo y a aprender más.</span>
						<br>
						<br>Partimos de los valores humanos, universales y mexicanos, con la misión de ser siempre la institución educativa líder que genere egresados de calidad y excelencia.
						<BR>
						<br>La educación debe ser integral. Por eso le damos importancia a la totalidad de los elementos que conforman la estructura institucional.
						<br>
						<br>Si bien la parte académica del colegio es fundamental, también lo es la educación estética, deportiva y tecnológica, los buenos hábitos alimenticios, las actividades extra escolares, la conciencia ecológica, fomentar los valores, la investigación y la cultura general.<br>
						<br>El colegio orienta al alumno a la formación de hábitos que hagan de él un sujeto activo, participante, preocupado siempre por aprender más y por participar con sus compañeros en el trabajo de equipo.
						<br>
						<br>Para lograr nuestra misión, la selección de personal académico y administrativo es muy rigurosa, se valoran los aspectos sicológicos, académicos, pedagógicos y morales; periódicamente los maestros reciben cursos de capacitación y actualización.
					</p>
				</div>
				<div class="visible-md visible-lg col-md-5 col-lg-5">
					<img src="imagenes/filosofia/foto-filosofia.jpg" border="0" class="img-responsive " />
				</div>
			</section>

				</div>
				</div>
		</div>
		<!-- finished side menu -->
		</div>
</section>
</div>

		</div>
	</div>
	<script src="js/funciones.js"></script>
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeft = document.getElementById( 'showLeft' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
			};
		</script>
</body>
</html>