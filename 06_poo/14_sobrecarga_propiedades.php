<?php

// www/06_poo/14_sobrecarga_propiedades.php

class PropertyTest
{
    /**  Localización de los datos sobrecargados.  */
    private $data = array();

    /**  La sobrecarga no se usa en propiedades declaradas.  */
    public $declared = 1;

    /**  La sobrecarga sólo funciona aquí al acceder desde fuera de la clase.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo "Estableciendo '$name' a '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Consultando '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Propiedad indefinida mediante __get(): ' . $name .
            ' en ' . $trace[0]['file'] .
            ' en la línea ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        echo "¿Está definido '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Eliminando '$name'\n";
        unset($this->data[$name]);
    }

    /**  No es un método mágico, esta aquí para completar el ejemplo.  */
    public function getHidden()
    {
        return $this->hidden;
    }
}

echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";

echo "Vamos a probar con la propiedad privada que se llama 'hidden':\n";
echo "Las propiedades privadas pueden consultarse en la clase, por lo que no se usa __get()...\n";
echo $obj->getHidden() . "\n";
echo "Las propiedades privadas no son visibles fuera de la clase, por lo que se usa __get()...\n";
echo $obj->hidden . "\n";
