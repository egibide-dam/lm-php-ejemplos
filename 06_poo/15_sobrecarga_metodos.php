<?php

// www/06_poo/15_sobrecarga_metodos.php

class MethodTest
{
    public function __call($name, $arguments)
    {
        // Nota: el valor $name es sensible a mayúsculas.
        echo "Llamando al método de objeto '$name' "
            . implode(', ', $arguments) . "\n";
    }

    /**  Desde PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Nota: el valor $name es sensible a mayúsculas.
        echo "Llamando al método estático '$name' "
            . implode(', ', $arguments) . "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('en contexto de objeto');

MethodTest::runTest('en contexto estático');  // Desde PHP 5.3.0
