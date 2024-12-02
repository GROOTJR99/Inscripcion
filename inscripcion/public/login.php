<?php
include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {

    header("location:Bienvenido.php");
    exit();
} else {
    echo '
    <script>
    alert("Usuario no existe, porfavor veifique los datos introducidos");
    window.location.href="../index.php";
    </script>
    ';
    exit();
}
