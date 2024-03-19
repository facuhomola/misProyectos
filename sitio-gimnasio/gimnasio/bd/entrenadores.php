<?php

session_start();
//Conectar a la base de datos
include 'cn.php';

$user = $_SESSION['user'];

if (!isset($user )) {
    header("location:./../index.php");
}

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

<h3 class="mt-2 mb-2 text-center">Entrenadores Registrados</h3>

<table border="1" class="table table-striped">
<tr>
    <td><b>Nombre</b></td>
    <td><b>dni</b></td>
    <td><b>Especialidad</b></td>
    <td><b>Gimnasio que trabaja</b></td>
</tr>

<?php 

$sql="SELECT * from entrenadores";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){

?>

<tr>
    <td><?php echo $mostrar['nombre'] ?></td>
    <td><?php echo $mostrar['dni'] ?></td>
    <td><?php echo $mostrar['especialidad'] ?></td>
    <td><?php echo $mostrar['gym'] ?></td>
</tr>
<?php 
}
?>
</table>

    <script src="./../js/bootstrap.bundle.min.js"></script>
</body>
</html>