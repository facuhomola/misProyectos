<?php
  include('/gimnasio/bd/cn.php');
  session_start();
  $user = $_SESSION['user'];

  $user = $_SESSION['user'];

  $consulta = "SELECT * FROM usuarios where user='$user' ";
  $resultado = mysqli_query($conexion, $consulta); 
  
  $filas = mysqli_fetch_array($resultado);
  
  $cargo = $filas['id_cargo'];

?>

<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <?php
      if ($cargo == 1) {
        ?>
        <a class="navbar-brand" href="/gimnasio/admin.php">GYM</a>
    <?php
      }else{
        ?>
        <a class="navbar-brand" href="/gimnasio/empleado.php">GYM</a>
    <?php
      }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
              <?php
            if ($cargo == 1) {
              ?>
              <a class="nav-link active" aria-current="page" href="/gimnasio/admin.php">INICIO</a>
          <?php
            }else{
              ?>
              <a class="nav-link active" aria-current="page" href="/gimnasio/empleado.php">INICIO</a>
          <?php
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Usuario: <?php echo $user ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/logout.php">Cerrar Sessión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>