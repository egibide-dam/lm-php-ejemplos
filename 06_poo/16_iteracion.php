<?php

// www/06_poo/16_iteracion.php

class MiClase
{
    public $var1 = 'valor 1';
    public $var2 = 'valor 2';
    public $var3 = 'valor 3';

    protected $protected = 'variable protegida';
    private $private = 'variable privada';

    function iterateVisible()
    {
        echo "MiClase::iterateVisible:\n";
        foreach ($this as $clave => $valor) {
            print "$clave => $valor\n";
        }
    }
}

$clase = new MiClase();

foreach ($clase as $clave => $valor) {
    print "$clave => $valor\n";
}
echo "\n";

$clase->iterateVisible();
