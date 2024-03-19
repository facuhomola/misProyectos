<?php

session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];

$consulta = "SELECT * FROM usuarios where user='$user' ";
$resultado = mysqli_query($conexion, $consulta); 

$filas = mysqli_fetch_array($resultado);

if (!isset($user ) || $filas['id_cargo'] == 2 ) {
    header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sistema - Gimnasio - Formulario</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" action="bd/registrar-empleado.php" method="post" name="form" id="form">
    <h4>Formulario Registro - Complete los campos solicitados</h4>
    <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario">
    <input class="controls" type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña">
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
    <input class="controls" type="number" name="dni" id="dni" placeholder="Dni">
    Cargo
    <select name="cargo" id="cargo" class="controls">
        <option value="1">Administrador</option>
        <option value="2">Empleado</option>
    </select>
    <input type="submit" value="Enviar" class="botons"> 
    <!--<button type="button" id="btn-enviar" class="botons" onclick="validar();">Enviar</button>-->
  </form>  
</section>
    

<script src="js/formulario.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>