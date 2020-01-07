<?php

// www/07_namespaces/02_importar_namespaces.php

namespace foo;

use Mi\Completo\NombreDeClase as Otra;

// esto es lo mismo que utilizar Mi\Completo\NombreEN as NombreEN
use Mi\Completo\NombreEN;

// importar una clase global
use ArrayObject;

// importar una función (PHP 5.6+)
use function Mi\Completo\nombreDeFunción;

// apodar una función (PHP 5.6+)
use function Mi\Completo\nombreDeFunción as func;

// importar una constante (PHP 5.6+)
use const Mi\Completa\CONSTANTE;

$obj = new namespace\Otra; // instancia un objeto de la clase foo\Otra
$obj = new Otra; // instancia un objeto de la clase class Mi\Completo\NombreDeClase
NombreEN\suben\func(); // llama a la función Mi\Completo\NombreEN\subes\func
$a = new ArrayObject(array(1)); // instancia un objeto de la clase ArrayObject
// sin el "use ArrayObject" instanciaríamos un objeto de la clase foo\ArrayObject
func(); // llama a la función Mi\Completo\nombreDeFunción
echo CONSTANT; // imprime el valor de Mi\Completa\CONSTANTE;
