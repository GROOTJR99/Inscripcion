<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login_container"> <!--Contendor Inicio de sesion -->
        <h1>Login</h1>


        <hr>
        <form action="login.php" method="POST">

            <label>Correo</label>
            <input type="email" name="correo" placeholder="Ingresa tu correo">

            <label>Contraseña</label>
            <input type="password" name="contrasena" placeholder="Ingrese su contraseña">

            <hr>

            <button type="submit">Iniciar Sesion</button> <!--Boton de Inicio de Sesion-->
            <a href="CrearCuenta.php"> Crear Cuenta</a>
        </form>
</body>

</html>