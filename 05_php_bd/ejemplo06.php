<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 6</title>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/estilos.css"/>
</head>
<body>

<h1>Borrar una fila de una tabla de MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "bd", con el usuario
    "blog".</p>
<p>Borra la fila que le pasemos como "id" a través del método GET.</p>
<p>No hace comprobación de errores.</p>

<?php
// Abrir la conexión
$conexion = mysqli_connect("bd", "blog", "12345Abcde", "blog");

// Borrado, si es que nos pasan un id
if (isset($_GET['id'])) {

    // Borramos los comentarios correspondientes a la entrada
    $query = "delete from comentario where entrada_id='" . $_GET['id'] . "'";
    mysqli_query($conexion, $query) or die(mysqli_error($conexion));

    // Borramos la entrada
    $query = "delete from entrada where id='" . $_GET['id'] . "'";
    mysqli_query($conexion, $query) or die(mysqli_error($conexion));

    // Comprobar si hemos afectado a alguna fila
    echo "<p>";

    if (mysqli_affected_rows($conexion) > 0)
        echo "Se ha borrado la entrada con ID: " . $_GET['id'];
    else
        echo "No se ha borrado ninguna entrada.";

    echo "</p>";
}

// Formar la consulta (seleccionando todas las filas)
$query = "select * from entrada";

// Ejecutar la consulta en la conexión abierta y obtener el "resultset"
$resultset = mysqli_query($conexion, $query) or die(mysqli_error($conexion));

// Calcular el número de filas
$total = mysqli_num_rows($resultset);

// Mostrar el contenido de las filas, creando una tabla XHTML
if ($total > 0) {
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Título</th><th>Texto</th><th>Fecha</th>';
    echo '<th>Activo</th><th>Acciones</th></tr>';

    while ($fila = mysqli_fetch_assoc($resultset)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['titulo'] . "</td>";
        echo "<td>" . $fila['texto'] . "</td>";
        echo "<td>" . $fila['fecha'] . "</td>";
        echo "<td>" . $fila['activo'] . "</td>";

        echo "<td><a href='ejemplo06.php?id=" . $fila['id'] . "'>Borrar</a></td>";

        echo "</tr>";
    }

    echo '</table>';
}

// Cerrar la conexión
mysqli_close($conexion);
?>

<p><a href="ejemplo06.php">Recargar la página</a></p>

</body>
</html>
