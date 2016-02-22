<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de SIA2</title>
	<link rel="stylesheet" href="../../recursos/css/slidebars.min.css">
	<link rel="stylesheet" href="../../recursos/css/materialize.min.css">
	<link rel="stylesheet" href="../../recursos/css/estilo.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/1.2.65/css/materialdesignicons.min.css">
</head>
<body>

<!-- Slidebar -->
	<div class="sb-slidebar sb-left sb-style-overlay">
	    <ul class="sb-menu">
			<li><img src="../../recursos/img/logo.png" alt=""></li>
			<li class="sb-close"><a href="../usuarios/usuarios.php">Usuarios</a></li>
			<li class="sb-close"><a href="../practicas/practicas.php">Prácticas</a></li>
			<li class="sb-close"><a href="../evaluaciones/evaluaciones.php">Evaluaciones</a></li>
			<li class="sb-close"><a href="../mallas/mallas.php">Mallas</a></li>
			<li class="sb-close"><a href="../asignaturas/asignaturas.php">Asignaturas</a></li>
			<li class="sb-close"><a href="../competencias/competencias.php">Competencias</a></li>
		</ul>
    </div>
	
	<!-- Contenedor principal -->

	<!-- Navbar -->
	<header class="navbar-fixed">
		<nav>
			<div class="nav-wrapper color_primario">
				<a href="#" class="brand-logo center">
					Sistema laravel facilito
				</a>

				<ul class="left">
					<li> <a class='orange' href='index.php'><i class="sb-toggle-left material-icons right">dehaze</i></a></li>
				</ul>
				<ul class="right">
			    	<li><a href="../../index.php"><i class="material-icons right">power_settings_new</i>Logout</a></li>
			    </ul>
			</div>
		</nav>			
	</header>
	<main id="sb-site" class="blue-grey lighten-5">
		<div class="container">		

		<!-- contenido del contenido principal -->
			<div class="row center" style="margin-top:100px;">
	        	<div class="col s12 m12">
	          		<div class="card">
			          	<div class="card-image">
			          		<img src="../../recursos/img/hola.jpg">
				            <span class="card-title"><strong><h4>Evaluaciones</h4></strong></span>
				        </div>
	          			<div class="card-content">
	          		    	<div class="row">
			                	<div class="col s4">
				                	<div class="card hoverable">
				                		<div class="card-content">
				              				<span class="card-title">Nueva evaluación</span>
				              				<p>Ingrese una nueva evaluación de práctica de un alumno</p>
				              				<div class="card-action">
	         									<a class="waves-effect waves-light btn color_primario" href="nueva_asignatura.php"><i class="material-icons right">note_add</i>Registrar</a>
	        								</div>
				              			</div>
				              		</div>
			              		</div>
			              		<div class="col s4">
				                	<div class="card hoverable">
				                		<div class="card-content">
				              				<span class="card-title">Modificar evaluación</span>
				              				<p>Modifique una evaluación de práctica ya existente en el sistema</p>
				              				<div class="card-action">
	         									<a class="waves-effect waves-light btn color_primario"><i class="material-icons right">create</i>Modificar</a>
	        								</div>
				              			</div>
				              		</div>
			              		</div>
			              		<div class="col s4">
				                	<div class="card hoverable">
				                		<div class="card-content">
				              				<span class="card-title">Ver evaluación</span>
				              				<p>Visualice una evaluación ya existente en el sistema</p>
				              				<div class="card-action">
	         									<a class="waves-effect waves-light btn color_primario">Visualizar<i class="mdi mdi-eye right"></i></a>
	        								</div>
				              			</div>
				              		</div>
			              		</div>
			                </div>
			            </div>
		            </div>
		        </div>
		    </div>
		</div>
	    <!-- fin del contenido del contenido principal -->   
	</main>
	<script src="../../recursos/js/jquery-2.2.0.min.js"></script>
	<script src="../../recursos/js/materialize.min.js"></script>
	<script src="../../recursos/js/slidebars.min.js"></script>
	<script>
	  (function($) {
	    $(document).ready(function() {
	      $.slidebars();
	      $('select').material_select();
	    });
	  }) (jQuery);
	</script>
</body>
</html>