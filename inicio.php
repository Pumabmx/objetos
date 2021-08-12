<?php
session_start();

if (!$_SESSION) {
    header("Location:http://localhost/clases_php/objetos/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<h1>Sesión iniciada, Hola
    <?php echo $_SESSION['email']; ?>
</h1>

<form action="cerrarSesion.php" method="post">
    <button type="submit">Cerrar Sesion</button>
</form>
</body>
</html>