<?php

//namespace lo primero despues de php
    namespace Dwes\Galaxias;
//ese seria el namespace de este fichero
 
//las cosas magicas suelen llevar guiones delante
    echo "<br> Namespace actual : " . __NAMESPACE__;


/*
DIreccionamiento namespace:
1Sin direccionamient
al mismo nivel que el fichero que voy a requerir
2dirccionamiento relativo
3direccionamiento absoluto

*/ 
include "galaxia1.php";
include "pegaso/pegaso.php";


use const \Dwes\Galaxias\RADIO as RGALAX;
use const \Dwes\Galaxias\Pegaso\RADIO as RPEGASO;

//SE PUEDEN HACER ALIAS A NIVEL DE ELEMENTO O DE NAMESPACE

//cuando traemos varios RADIOs de distintos sitios hay que usar el alias
//o solo te coge el ultimo use que hayas hecho
use \Dwes\Galaxias\Pegaso as CABALLITO;

echo "<h2>Sin direccionamiento</h2>";
//necesito incluir el fichero con el que voy a trabajr
echo "<br>Radio ULTIMO : " . CABALLITO\RADIO;
$gl = new Galaxia();
Galaxia::muerte();




echo "<h2>Direccionamiento Relativo</h2>";
//navego a partir de mi ubicacion actual

//me estoy moviendo a partir de donde se encuentra este fichero

//desdee mi ubicacion actual
//necesito incluir el fichero con el que voy a trabajr
echo "<br>Radio de la galaxia : " . Pegaso\RADIO;
Pegaso\observar("Pegaso");
$gl = new Pegaso\Galaxia();
Pegaso\Galaxia::muerte();




echo "<h2>Direccionamiento Absoluto</h2>";
//desde raiz del servidor web que es public
//navego a partir de mi ubicacion actual

//me estoy moviendo a partir de donde se encuentra este fichero

//desde el driectori o raiz del servidor web
//necesito incluir el fichero con el que voy a trabajr
echo "<br>Radio de la galaxia : " . \Dwes\Galaxias\Pegaso\RADIO;
\Dwes\Galaxias\Pegaso\observar("Pegaso");

$gl = new \Dwes\Galaxias\Pegaso\Galaxia();
\Dwes\Galaxias\Pegaso\Galaxia::muerte();

 use const \Dwes\Galaxias\Pegaso\RADIO;
echo "<br> radio es " . RADIO;

use function \Dwes\Galaxias\Pegaso\observar;
use \Dwes\Galaxias\Galaxia;

echo "<br>el radio es : " .RADIO;
echo "<br>el radio es : " . observar("Otra galaxia");
echo "<br>objeto de galaxia generico: " . new Galaxia();


//Apodar namespace -> alias
use \Dwes\Galaxias\Pegaso\Galaxia as Seiya;
use \Dwes\Galaxias\Galaxia as Galaxus;
//va a reemplazarlo

echo "<br><br>";
$pg = new Seiya();
$glc = new Galaxus();
//puedo utilizar funciones y constantes con el mismo nombre porique estan en namespaces
//diferentes

// Seiya\observar("Observando a Seiya);
// Galaxus\observar("Observando a Galaxus");