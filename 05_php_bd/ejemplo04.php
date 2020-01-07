<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 4</title>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/estilos.css"/>
</head>
<body>

<h1>Mostrar todas las filas de una tabla de MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "bd", con el usuario
    "blog".</p>
<p>Muestra las filas de la tabla "entrada".</p>
<p>El resultado se muestra también en forma de tabla HTML.</p>
<p>No hace comprobación de errores.</p>

<?php
// Abrir la conexión
$conexion = mysqli_connect("bd", "blog", "12345Abcde", "blog");

// Formar la consulta (seleccionando todas las filas)
$query = "select * from entrada";

// Ejecutar la consulta en la conexión abierta y obtener el "resultset"
$resultset = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

// Calcular el número de filas
$total = mysqli_num_rows($resultset);

// Mostrar el contenido de las filas, creando una tabla HTML
if ($total > 0) {
    echo '<table border="1">';
    echo '<tr><th>Título</th><th>Texto</th><th>Fecha</th><th>Activo</th></tr>';

    while ($fila = mysqli_fetch_assoc($resultset)) {
        echo "<tr>";
        echo "<td>" . $fila['titulo'] . "</td>";
        echo "<td>" . $fila['texto'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['activo'] . "</td>";
        echo "</tr>";
    }

    echo '</table>';
}

// Cerrar la conexión
mysqli_close($conexion);
?>

</body>
</html>
