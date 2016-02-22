<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sistema de SIA2</title>
    <link rel="stylesheet" href="../recursos/css/slidebars.min.css">
    <link rel="stylesheet" href="../recursos/css/materialize.min.css">
    <link rel="stylesheet" href="../recursos/css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/1.2.65/css/materialdesignicons.min.css">
  </head>
<body>

<!-- Slidebar -->
  <div class="sb-slidebar sb-left sb-style-overlay">
      <ul class="sb-menu">
      <li><img src="../../recursos/img/logo.png" alt=""></li>
      <li class="sb-close"><a href="usuarios/usuarios.php">Usuarios</a></li>
      <li class="sb-close"><a href="practicas/practicas.php">Prácticas</a></li>
      <li class="sb-close"><a href="evaluaciones/evaluaciones.php">Evaluaciones</a></li>
      <li class="sb-close"><a href="mallas/mallas.php">Mallas</a></li>
      <li class="sb-close"><a href="asignaturas/asignaturas.php">Asignaturas</a></li>
      <li class="sb-close"><a href="competencias/competencias.php">Competencias</a></li>
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
            <li><a href="../index.php"><i class="material-icons right">power_settings_new</i>Logout</a></li>
          </ul>
      </div>
    </nav>      
  </header>
  <main id="sb-site" class="blue-grey lighten-5">
    <div class="container">   

      <!-- contenido del contenido principal -->
      <div class="row center" style="margin-top:100px;">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Listado de alumnos</span>
                  <table class="highlight bordered">
                    <thead>
                      <tr>
                          <th data-field="rut">Rut</th>
                          <th data-field="nombre">Nombre</th>
                          <th data-field="apaterno">Apellido paterno</th>
                          <th data-field="amaterno">Apellido materno</th>
                          <th data-field="carrera">Carrera</th>
                          <th data-field="nivel">Nivel</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>17.095.407-6</td>
                        <td>Julio</td>
                        <td>Caruncho</td>
                        <td>Arriagada</td>
                        <td>Ingenieria civil en computación e informática</td>
                        <td>5</td>
                        <td>
                        <a href="#" id="rut" class="btn-floating red"><i class="material-icons">perm_identity</i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
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
        $('.tooltipped').tooltip({delay: 50});
        $.slidebars();
        $('select').material_select();
      });
    }) (jQuery);
  </script>
</body>
</html>