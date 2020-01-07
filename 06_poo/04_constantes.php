<?php

// www/06_poo/04_constantes.php

class MiClase
{
    const CONSTANTE = 'valor constante';

    function mostrarConstante()
    {
        echo self::CONSTANTE . "\n";
    }
}

echo MiClase::CONSTANTE . "\n";

$clase = new MiClase();
$clase->mostrarConstante();
