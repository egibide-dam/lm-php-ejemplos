<?php

// www/06_poo/08_propiedades_static.php

class Foo
{
    public static $mi_static = 'foo';

    public function valorStatic()
    {
        return self::$mi_static;
    }
}

echo Foo::$mi_static;
