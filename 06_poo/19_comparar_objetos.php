<?php

// www/06_poo/19_comparar_objetos.php

function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSO';
    } else {
        return 'VERDADERO';
    }
}

function compararObjetos(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
}

class Bandera
{
    public $bandera;

    function Bandera($bandera = true)
    {
        $this->bandera = $bandera;
    }
}

class OtraBandera
{
    public $bandera;

    function OtraBandera($bandera = true)
    {
        $this->bandera = $bandera;
    }
}

$o = new Bandera();
$p = new Bandera();
$q = $o;
$r = new OtraBandera();

echo "Dos instancias de la misma clase\n";
compararObjetos($o, $p);

echo "\nDos referencias a la misma instancia\n";
compararObjetos($o, $q);

echo "\nInstancias de dos clases diferentes\n";
compararObjetos($o, $r);
