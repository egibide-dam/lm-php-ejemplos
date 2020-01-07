<?php

// www/06_poo/20_excepciones.php

function inverse($x)
{
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
} finally {
    echo "Primer finally.\n";
}
