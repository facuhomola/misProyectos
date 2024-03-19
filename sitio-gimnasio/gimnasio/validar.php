<?php

include('bd/cn.php');

$user = $_POST['user'];
$pass = $_POST['password'];

session_start();
$_SESSION['user'] = $user;

$consulta = "SELECT * FROM usuarios where user='$user' and pass='$pass' ";
$resultado = mysqli_query($conexion, $consulta); 

//$filas = mysqli_num_rows($resultado);
$filas = mysqli_fetch_array($resultado);

if ($filas['id_cargo'] == 1) { //sesión para administrador
    header("location:admin.php");
}if ($filas['id_cargo'] == 2) {
    header("location:empleado.php");
}
else{
    ?>
    <?php
    include('index.php');
    ?>
    <h2>Error de autenticación</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>