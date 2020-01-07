<?php

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';

    // Declaración de un método
    public function mostrarVar()
    {
        echo $this->var;
    }
}

// www/06_poo/02_new.php

$instancia = new ClaseSencilla();

// Esto también se puede hacer con una variable:
$nombreClase = 'ClaseSencilla';
$instancia = new $nombreClase(); // new ClaseSencilla()

var_dump($instancia);