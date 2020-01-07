<?php

// www/07_namespaces/03_importar_cualificados.php

use Mi\Completo\NombreDeClase as Otra, Mi\Completo\NombreEN;

$obj = new Otra; // instancia un objeto de la clase Mi\Completo\NombreDeClase
$obj = new \Otra; // instancia un objeto de la clase Otra
$obj = new Otra\cosa; // instancia un objeto de la clase Mi\Completo\NombreDeClase\cosa
$obj = new \Otra\cosa; // instancia un objeto de la clase Otra\cosa
