<?php
include 'conexion.php';


        $nombre = $_POST["nombre"];
        $numerot = $_POST["numerot"];
        $correo = $_POST["correo"];
        $curso = $_POST["curso"];
        $fechareg = date("d/m/y");
        $insertar = "INSERT INTO registro(nombre, numerot, correo, curso, fechareg) VALUES ('$nombre','$numerot','$correo','$curso','$fechareg')";

        $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro WHERE nombre = '$nombre'");
        if(mysqli_num_rows($verificar_usuario) > 0){
            echo '<script>
            alert("El usuario ya esta registrado");
            </script>';
            exit;
        }

        $verificar_correo = mysqli_query($conexion, "SELECT * FROM registro WHERE correo = '$correo'");
        if(mysqli_num_rows($verificar_correo) > 0){
            echo '<script>
            alert("El correo ya esta registrado");
            </script>';
            exit;
        }
        $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo "Error al registrar";
        }else{
            echo "Registro exitoso";
        }

    mysqli_close($conexion);

?>