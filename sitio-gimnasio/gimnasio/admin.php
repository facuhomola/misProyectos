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
    <title>Sistema - Gimnasio - Administrador</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <h1 class="display-4 text-center"> SISTEMA GYM SL-VM </h1>
        </div>
    </div>
</div>

<div class="container-lg">
    <div class="row">
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/registros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="bd/empleados.php" class="btn btn-primary">Usuarios Registrados</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/registrar.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="alta-empleado.php" class="btn btn-primary">Registrar Usuario</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/clientes.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="bd/usuarios.php" class="btn btn-primary">Clientes Registrados</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/gym.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="bd/entrenadores.php" class="btn btn-primary">Entrenadores Registrados</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <h3 class="mt-2 text-center">Días - horarios - planes</h3>
            <table class="table table-success table-striped">
                <tr>
                    <td><b>DÍA</b></td>
                    <td><b>HORA</b></td>
                    <td><b>PLAN</b></td>
                </tr>
                <tr>
                    <td>Lunes - Miercóles - Viernes</td>
                    <td>8:00 - 22:00</td>
                    <td>Musculación - $5500</td>
                </tr>
                <tr>
                    <td>Todos los días</td>
                    <td>8:00 - 22:00</td>
                    <td>Musculación - $6400</td>
                </tr>
                <tr>
                    <td>Martes - Jueves</td>
                    <td>8:00 - 12:00</td>
                    <td>Spinning - $3500</td>
                </tr>
                <tr>
                    <td>Martes - Jueves</td>
                    <td>16:00 - 20:00</td>
                    <td>Pilates - $4000</td>
                </tr>
            </table>
        </div>
    </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>