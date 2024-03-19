<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar datos

$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$cargo = $_POST['cargo'];

?>

<h5>Datos ingresados</h5>
<p><b>Usuario: </b> <?= $usuario ?> </p>
<p><b>Contraseña: </b> <?= $contrasenia ?> </p>
<p><b>Nombre: </b> <?= $nombre ?> </p>
<p><b>DNI: </b> <?= $dni ?> </p>
<p><b>Cargo:</b> <?= $cargo ?> </p>

<?php

//insertar datos en la base de datos 'usuarios'
$insertar = "INSERT INTO usuarios(user, pass, nombre, dni, id_cargo) VALUES('$usuario', '$contrasenia', '$nombre', '$dni', '$cargo')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error!");
}else{
    ?>
    <script>
        alert("Se registro el Usuario exitosamente - Pulse Aceptar para continuar");
        window.location.href='./../admin.php';
    </script>
    <h4>Se realizo el registro exitosamente</h4>
<?php
}

?>