<?php

session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];
if (!isset($user)) {
    header("location:./../index.php");
}

?>

<?php

//conectar a la base de datos "gimnasio"
include 'cn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sistema - Gimnasio - Registros</title>
</head>
<body>

<!--Cabecera-->
<?php

require('./../includes/header.php');

?>
<!--Fin cabecera-->

<h3 class="mt-2 mb-2 text-center">Clientes Registrados</h3>

<table border="1" class="table table-striped">
<tr>
    <td><b>nombre</b></td>
    <td><b>dni</b></td>
    <td><b>edad</b></td>
    <td><b>sexo</b></td>
    <td><b>teléfono</b></td>
    <td><b>gym</b></td>
    <td><b>plan</b></td>
    <td><b>fecha</b></td>
</tr>

<?php 

$sql="SELECT * from clientes";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

<tr>
    <td><?php echo $mostrar['nombre'] ?></td>
    <td><?php echo $mostrar['dni'] ?></td>
    <td><?php echo $mostrar['edad'] ?></td>
    <td><?php echo $mostrar['sexo'] ?></td>
    <td><?php echo $mostrar['telefono'] ?></td>
    <td><?php echo $mostrar['gym'] ?></td>
    <td>$<?php echo $mostrar['plan'] ?></td>
    <td><?php echo $mostrar['fecha'] ?></td>
</tr>
<?php 
}
?>
</table>

    <script src="./../js/bootstrap.bundle.min.js"></script>
</body>
</html>