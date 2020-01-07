<?php

// 03_funciones/variables.php

function foo()
{
    echo "En foo()<br />\n";
}

function bar($arg = '')
{
    echo "En bar(); el argumento era '$arg'.<br />\n";
}

$func = 'foo';
$func();        // Esto llama a foo()

$func = 'bar';
$func('prueba');  // Esto llama a bar()
