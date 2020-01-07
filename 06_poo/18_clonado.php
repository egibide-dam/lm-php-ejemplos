<?php

// www/06_poo/18_clonado.php

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instances;
    }

    public function __clone()
    {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        // Forzamos la copia de this->object, si no
        // hará referencia al mismo objeto.
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print("Objeto Original:\n");
print_r($obj);

print("Objeto Clonado:\n");
print_r($obj2);
