<?php

// www/06_poo/17_final.php

class BaseClass
{
    public function test()
    {
        echo "llamada a BaseClass::test()\n";
    }

    final public function moreTesting()
    {
        echo "llamada a BaseClass::moreTesting()\n";
    }
}

class ChildClass extends BaseClass
{
    public function moreTesting()
    {
        echo "llamada a ChildClass::moreTesting()\n";
    }
}
// Devuelve un error Fatal: Cannot override final method BaseClass::moreTesting()
