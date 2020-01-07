<?php

// www/06_poo/01_clase.php

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
