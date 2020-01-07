<?php

// www/06_poo/12_traits.php

trait Hola
{
    public function decirHola()
    {
        echo 'Hola ';
    }
}

trait Mundo
{
    public function decirMundo()
    {
        echo 'Mundo';
    }
}

class MiHolaMundo
{
    use Hola, Mundo;

    public function decirAdmiración()
    {
        echo '!';
    }
}

$o = new MiHolaMundo();
$o->decirHola();
$o->decirMundo();
$o->decirAdmiración();
