<?php
    namespace Dwes\galaxias;
    // el namespace debe ser la siguiente instruccion a php
    //como estoyt hablando de namespace la primera en mayuscula
    //barra hacia la izda como la de windows


    const RADIO = 1.25; //millone de años luz

    function observar($mensaje){
        echo "<br>Estoy mirando a la galaxia " . $mensaje;
    }


class Galaxia{

    function __construct()
    {
        $this->nacimiento();
    }

    function nacimiento(){
        echo "<br>Soy una nueva galaxia";
    }

    static function  muerte(){
        echo "<br>Me destruyo!!";
    }

}