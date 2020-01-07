<!-- holamundo.php -->

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/estilos.css"/>
</head>
<body>

<h1>Ejemplo</h1>

<?php
echo "<p>Hola, soy un script PHP.</p>";
?>

<?php
// REF: Formato de fecha y hora: https://stackoverflow.com/a/16921843
$dt = new DateTime;
$formatter = new IntlDateFormatter('es', IntlDateFormatter::FULL, IntlDateFormatter::LONG, new DateTimeZone("Europe/Madrid"));
echo $formatter->format($dt);
?>

</body>
</html>