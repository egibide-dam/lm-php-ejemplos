<?php

// www/06_poo/05_constructores.php

class BaseClass
{
    function __construct()
    {
        print "En el constructor BaseClass\n";
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();
        print "En el constructor SubClass\n";
    }
}