<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar valores del formulario
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$gym = $_POST['gym'];
$plan = $_POST['plan'];
$fecha = $_POST['fecha'];

echo "$nombre <br> $dni <br> $edad <br> $sexo <br> $telefono <br> $gym <br> $plan <br> $fecha ";

//insertar datos en la tabla usuarios
$insertar = "INSERT INTO clientes(nombre, dni, edad, sexo, telefono, gym, plan, fecha) VALUES('$nombre', '$dni', '$edad', '$sexo', '$telefono', '$gym', '$plan', '$fecha')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
    ?>
    <script>
        alert("Se registro el cliente exitosamente - Pulse Aceptar para continuar");
        window.location.href='./../alta.php';
    </script>
    echo "<h4>Se registro el usuario exitosamente</h4>";
    <?php 
}

?>