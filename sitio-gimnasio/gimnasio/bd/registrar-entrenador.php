<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar datos

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$especialidad = $_POST['especialidad'];
$gym = $_POST['gym'];

?>

<h5>Datos ingresados</h5>
<p><b>Nombre: </b> <?= $nombre ?> </p>
<p><b>dni: </b> <?= $dni ?> </p>
<p><b>Especialidad: </b> <?= $especialidad ?> </p>
<p><b>Gimnasio: </b> <?= $gym?> </p>

<?php

//insertar datos en la base de datos 'usuarios'
$insertar = "INSERT INTO entrenadores(nombre, dni, especialidad, gym) VALUES('$nombre', '$dni', '$especialidad', '$gym')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error!");
}else{
    ?>
    <script>
        alert("Se registro el Entrenador exitosamente - Pulse Aceptar para continuar");
        window.location.href='./../alta-entrenador.php';
    </script>
    <!-- <a href="./../admin.php">Volver al Inicio</a> -->
<?php
}

?>