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
		          	<div class="card  hoverable">
			            <div class="card-content">
			              	<span class="card-title">Ingrese nueva evaluación</span>
							<form id="myForm" action="#" method="POST">
					            <div class="row">
					                <div class="offset-s2 input-field col s4">
					                    <input id="codigo" name="codigo" type="text" class="validate">
					                    <label for="codigo">Codigo *</label>
					                </div>
					                <div class=" col s4 input-field">       
					                    <input id="nombre" name="nombre" type="text" class="datepicker">
					                    <label for="nombre">Fecha de entrega *</label>
					                </div>
					            </div>
					            <div class="row">
					                <div class=" col s2 offset-s5"> 
					                 	<h5>Competencia 1</h5>
					                </div>
					                <div class=" col s8 offset-s2 input-field">      
					                    <textarea id="objetivos" name="objetivos" class="materialize-textarea" length="500"></textarea>
            							<label for="objetivos">Observación</label>
					                </div>					             
					                <div class=" col s2 offset-s2 input-field">   
				                    	<select name="tipoFuncionario">
									      	<option value="" disabled selected>Elija una calificación</option>
									      	<option value="MB">Muy bueno</option>
									    	<option value="B">Bueno</option>	
									    	<option value="M">Malo</option>
									    	<option value="MM">Muy malo</option>		
									    </select>
										<label >Calificación</label>
					                </div>  
					            </div>
					            <div class="row">					            
					                <div class=" col s2 offset-s5"> 
					                 	<h5>Competencia 2</h5>
					                </div>
					                <div class=" col s8 offset-s2 input-field">      
					                    <textarea id="objetivos" name="objetivos" class="materialize-textarea" length="500"></textarea>
            							<label for="objetivos">Observación</label>
					                </div>					             
					                 <div class=" col s2 offset-s2 input-field">   
				                    	<select name="tipoFuncionario">
									      	<option value="" disabled selected>Elija una calificación</option>
									      	<option value="MB">Muy bueno</option>
									    	<option value="B">Bueno</option>	
									    	<option value="M">Malo</option>
									    	<option value="MM">Muy malo</option>		
									    </select>
										<label >Calificación</label>
					                </div> 
					            </div>
					            <div class="row">	
					                <div class=" col s2 offset-s5"> 
					                 	<h5>Competencia 3</h5>
					                </div>
					                <div class=" col s8 offset-s2 input-field">      
					                    <textarea id="objetivos" name="objetivos" class="materialize-textarea" length="500"></textarea>
            							<label for="objetivos">Observación</label>
					                </div>					             
					                 <div class=" col s2 offset-s2 input-field">   
				                    	<select name="tipoFuncionario">
									      	<option value="" disabled selected>Elija una calificación</option>
									      	<option value="MB">Muy bueno</option>
									    	<option value="B">Bueno</option>	
									    	<option value="M">Malo</option>
									    	<option value="MM">Muy malo</option>		
									    </select>
										<label >Calificación</label>
					                </div>
					            </div>
					            <div class="row">	  
					                <div class=" col s2 offset-s2 input-field">       
					                    <input id="nivel" name="nivel" type="text" class="validate">
					                    <label for="nivel">Resultado *</label>
					                </div>
					            </div>
					            <div class="row">
						            <div class="col s2 offset-s8">
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
	<script src="../../recursos/js/picker.js"></script>
    <script src="../../recursos/js/picker.date.js"></script>
	<script>
	  (function($) {
	    $(document).ready(function() {
	      $.slidebars();
	      $('select').material_select();
	    });
	  }) (jQuery);
	  $('.datepicker').pickadate({
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sáb'],
        today: 'Hoy',
        clear: 'Borrar Selección',
        close: 'Cancelar',
        selectMonths: true,
        selectYears: 200,
        format: 'dd-mm-yyyy',
        firstDay: 1
    });
	</script>
</body>
</html>