<?php

// www/04_arrays/array_simple.php

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// a partir de PHP 5.4
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];

var_dump($array1);
var_dump($array2);

?>