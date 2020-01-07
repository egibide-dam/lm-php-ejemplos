<?php

// www/06_poo/13_clases_anonimas.php

$util->setLogger(new class
{
    public function log($msg)
    {
        echo $msg;
    }
});