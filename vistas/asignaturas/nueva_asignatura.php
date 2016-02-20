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
			    	<li><a href="../../index.php">Logout</a></li>
			    </ul>
			</div>
		</nav>			
	</header>
	<main id="sb-site" class="blue-grey lighten-5">
		<div class="container">		

			<!-- contenido del contenido principal -->
			<div class="row center" style="margin-top:100px;">
		        <div class="col s12 m12">
		          	<div class="card  hoverable">
			            <div class="card-content">
			              	<span class="card-title">Ingrese nueva asignatura</span>
			              	
							<form id="myForm" action="#" method="POST">
					            <div class="row">
					                <div class=" col s4 offset-s4 input-field col s4">
					                    <input id="rut" name="rut_cliente" type="text" class="validate">
					                    <label for="rut_cliente">Codigo *</label>
					                </div>
					                <div class=" col s4 offset-s4 input-field">       
					                    <input id="nombre" name="nombre" type="text" class="validate">
					                    <label for="nombre">Nombre *</label>
					                </div>
					                <div class=" col s4 offset-s4 input-field">       
					                    <input id="apaterno" name="apaterno" type="text" class="validate">
					                    <label for="apaterno">Nivel *</label>
					                </div>
					            </div>

					            <div class="row center">
						            <div class="col s2 offset-s6">
							            <button id="btn" class="btn right waves-effect waves-light color_primario"  type="submit" name="action">Ingresar
							            <i class="material-icons right">send</i>
							            </button>
						            </div>
					            </div>
					       </form>
						
			            </div>
		          	</div>
		        </div>
		    </div>
		    <!-- fin del contenido del contenido principal -->
		    
		</div>	
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