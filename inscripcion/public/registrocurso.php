<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cursos</title>
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
    <div class="container_register">
    <h1>Registrarse a un curso</h1>
    <hr>
    <form action="registrar.php" method="POST">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa tu usuario">
        <label>Numero telefonico</label>
        <input type="tel" name="numerot" placeholder="Ingresa tu telefono">
        <label >Correo</label>
        <input type="email" name="correo" placeholder="Ingresa tu correo">
        <label>Ingresa el curso</label>
        <input type="text" name="curso" placeholder="Ingresa el curso que deseas">
        <label>Fecha de registro</label>
        <input type="date" name="fecha" placeholder="Fecha de registro">
        <hr>
        <input type="submit" name="Registrar">
    </form>
    </div>
</body>
</html>