<?php

// 03_funciones/funcion.php

function mensaje($extra)
{
    $retval = "Mensaje: $extra";
    return $retval;
}

echo(mensaje("Prueba"));
