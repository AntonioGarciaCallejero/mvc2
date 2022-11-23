<?php
//Fichero que simula el modelo con datos
class Product{
    //asi o con define
    const PRODUCTS = [
        //control d selecciona toda la palabra
        //si haces otra vez control d te selecciona todas las palabras iguales
        //array de arrays
        //esta es la posicion 0
        array(1, 'Cortacesped'),
        //esta la 1
        array(2, 'Pizarra'),
        array(3, 'Billar'),
        array(4, 'Dardos'),
    ];

    function __construct(){
        // costructor vacio
    }

    //uno que me devuelva todos los productos y uno que me devuelva un producto en particular
    //escribir fun
    //tabular
    //devuelve todos
    //cuando ejecutas all() te devuelve el array de la constante productos
    public static  function all()
    {
        //acceder a una constante de clase
        return Product::PRODUCTS;
    }

    //devolver un producto en particular 
    public static function find($id)
    {
        //esto porque en el otro lado hemos empezado a contar en el 1 (con las ids de los productos)
        //a ese id que nos solicita le resto 1 para que acceda a la posicion correcta del array
        return Product::PRODUCTS[$id-1];
        //devuelve la posicion del array, el producto que asu vez es un array
    }

}//fin clase