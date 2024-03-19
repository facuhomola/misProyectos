<?php

session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];
if (!isset($user)) {
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
  <form class="form-register" action="bd/registrar-entrenador.php" method="post" name="form" id="form">
    <h4>Formulario Registro - Complete los campos solicitados</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
    <input class="controls" type="number" name="dni" id="dni" placeholder="DNI">
    Especialidad: 
    <select name="especialidad" id="especialidad" class="controls">
        <option value="Pilates">Pilates</option>
        <option value="Spinning">Spinning</option>
        <option value="Musculación">Musculación</option>
        <option value="Pilates - Spinning">Pilates - Spinning</option>
        <option value="Pilates - Musculación">Pilates - Musculación</option>
        <option value="Spinning - Musculación">Spinning - Musculación</option>
        <option value="Todas las áreas">Todas las áreas</option>
    </select>
    Gimnasio donde trabaja
    <select name="gym" id="gym" class="controls">
        <option value="San Luis">San Luis</option>
        <option value="Villa Mercedes">Villa Mercedes</option>
        <option value="Ambos">Ambos</option>
    </select>
    <input type="submit" value="Enviar" class="botons"> 
    <!--<button type="button" id="btn-enviar" class="botons" onclick="validar();">Enviar</button>-->
  </form>  
</section>
    

<script src="js/formulario.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>