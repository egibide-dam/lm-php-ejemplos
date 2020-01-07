<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 1</title>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/estilos.css"/>
</head>
<body>

<h1>Conexión a MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "bd", con el usuario
    "blog".</p>
<p>No hace comprobación de errores.</p>

<?php
// Abrir la conexión
$conexion = mysqli_connect("bd", "blog", "12345Abcde", "blog");

// Aquí van nuestras consultas, etc.
echo 'Conectado al servidor: ' . mysqli_get_host_info($conexion);

// Cerrar la conexión
mysqli_close($conexion);
?>

</body>
</html>
