<?php
//el controlador por un lado recibe peticiones del cliente
//y por otro accede a los datos
//temgo una clase y quiero utilizar otra
require_once "Product.php";
//el include seguira ejecutando aunque no exista el fichero, el require dara error
//para las vistas requiere, para las clases require_once
//porque si metieras la clase dos veces te diria que clase duplicada

class Controller
{
    function __construct(){
        //const vacio
    }

    //funcion que por un lado recoge todos los productos y por otro va a invocar una vista
    //en la que va a mostrar todos los productos que haya
    //llama a vista de inventario

    //
    public function home(){
        //dos puntos para acceder a cosas estaticas
        //array de arrays
        $products = Product::all();
        //para tenerlo todos mas organizado las vistas van a tener su propia carpeta
        //recuperar todos los productos y llama a esta vista
        //el require es como que coges la pagina web y la inscrustas, es como is estuviera aqui la pagina
        //o como si aun estuvieramos aqui en la pagina
        require "views/home.php";
    }
    //funcin que va a recuperar un producto en particular, el id como parametro
    //va a allamar a una vsta de un producto en concreto


    public function show(){
        //aqui ya hemos recogido el id que nos vendra de la peticion
        //el array
        $id = $_GET["id"];
        //busca datos, genera vista 
        $product = Product::find($id);//vendra de start.php
        //nombre de la clase::elemento constante/Estatico
        //para acceder a constantes y a metodos o variables estaticas
        require "views/show.php";
    }

    
}//fin_clase
