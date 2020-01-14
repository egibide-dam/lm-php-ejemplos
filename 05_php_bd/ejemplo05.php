<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo 5</title>
    <link rel="stylesheet" href="../css/normalize.css"/>
    <link rel="stylesheet" href="../css/estilos.css"/>
</head>
<body>

<h1>Insertar una fila en una tabla de MySQL</h1>
<p>Se conecta a una base de datos llamada "blog" en la máquina "bd", con el usuario
    "blog".</p>
<p>Inserta un nuevo post en la tabla "entrada".</p>
<p>No hace comprobación de errores.</p>

<h2>Nuevo post</h2>

<?php
date_default_timezone_set('Europe/Madrid');
$fecha_actual = date("Y-m-d H:i:s");
?>

<form action="ejemplo05.php" method="POST">
    <div>
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value=""/>
    </div>
    <div>
        <label for="texto">Texto:</label>
        <textarea id="texto" name="texto" rows="4" cols="40"></textarea>
    </div>
    <div>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo $fecha_actual; ?>"/>
    </div>
    <div>
        <label for="activo">Activo:</label>
        <input type="checkbox" id="activo" name="activo" checked/>
    </div>
    <div>
        <input type="reset" id="limpiar" name="limpiar" value="Limpiar"/>
        <input type="submit" id="enviar" name="enviar" value="Guardar"/>
    </div>
</form>

<?php if (isset($_POST['enviar'])) { ?>

    <?php
    // Recoger los valores
    $titulo = "";
    if (isset($_POST['titulo']))
        $titulo = $_POST['titulo'];

    $texto = "";
    if (isset($_POST['texto']))
        $texto = $_POST['texto'];

    $fecha = $fecha_actual;
    if (isset($_POST['fecha']) && $_POST['fecha'] != "")
        $fecha = $_POST['fecha'];

    $activo = 0;
    if (isset($_POST['activo']))
        $activo = 1;
    ?>

    <?php
    // Abrir la conexión
    $conexion = mysqli_connect("mariadb", "blog", "12345Abcde", "blog");

    // Formar la consulta (insertar una fila)
    $query = "insert into entrada values ( 0,'$titulo','$texto','$fecha',$activo )";

    // Ejecutar la consulta en la conexión abierta. No hay "resultset"
    mysqli_query($conexion, $query) or die(mysqli_error($conexion));

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

<?php } ?>

</body>
</html>
