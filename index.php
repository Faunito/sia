<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de SIA2</title>
	<link rel="stylesheet" href="recursos/css/slidebars.min.css">
	<link rel="stylesheet" href="recursos/css/materialize.min.css">
	<link rel="stylesheet" href="recursos/css/estilo.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/1.2.65/css/materialdesignicons.min.css">
</head>
<body>

<!-- Slidebar -->
	<div class="sb-slidebar sb-left sb-style-overlay">
	    <ul class="sb-menu">
			<li><img src="recursos/img/logo.png" alt=""></li>
			<li class="sb-close"><a href="#">Usuarios</a></li>
			<li class="sb-close"><a href="#">Prácticas</a></li>
			<li class="sb-close"><a href="#">Evaluaciones</a></li>
			<li class="sb-close"><a href="#">Mallas</a></li>
			<li class="sb-close"><a href="#">Asignaturas</a></li>
			<li class="sb-close"><a href="#">Competencias</a></li>
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
			    	<li><a href="vistas/usuarios/nuevo_usuario.php"><i class="material-icons right">account_circle</i>Registrarse</a></li>
			    </ul>
			</div>
		</nav>			
	</header>
	
	<main id="sb-site" class="blue-grey lighten-5">
		<div class="container">		

			<!-- contenido del contenido principal -->
			<div class="row center" style="margin-top:100px;">
			    <div class="col s12 m6 offset-m3">
			    	<div class="card  hoverable">
					    <div class="card-content">
					    	<span class="card-title">Ingreso al sistema</span>
							<form method="POST" action="vistas/home.php" id="login">
				            <!--<form method="POST">-->
				                <div class="row">
				                    <div class="input-field col s12 m10 offset-m1">
				                        <input type="text" id="email" class="login-input" name="email" required>
										<label for="email">Email</label>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="input-field col s12 m10 offset-m1">
				                        <input type="password" id="password" class="login-input" name="password" required>
										<label for="pasword">Contraseña</label>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="input-field col s12 m10 offset-m1">
				                    	<select name="tipoFuncionario">
									      	<option value="" disabled selected>Elija un tipo</option>
									      	<option value="profesor">Profesor</option>
									    	<option value="secretaria">Secretaria</option>									      										    
									    </select>
				                    <!--    <input type="password" id="pass" class="login-input" name="password" required>
										<label for="pasword">Contraseña</label>-->
										<label >Funcionario</label>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="col  m10 offset-m1">
				                        <p class="right-align">
				                            <button class="btn btn-large waves-effect waves-light color_primario" type="submit" form="login" name="action">Ingresar</button>
				                        </p>
				                    </div>
				                </div>
				            <!--</form>-->
				            </form>
				        </div>
			        </div>
			    </div>
		    </div>
		    <!-- fin del contenido del contenido principal -->
		    
		</div>	
	</main>

	<script src="recursos/js/jquery-2.2.0.min.js"></script>
	<script src="recursos/js/materialize.min.js"></script>
	<script src="recursos/js/slidebars.min.js"></script>

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