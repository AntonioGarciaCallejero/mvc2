<?php
    namespace App\Controllers;
// el controlador especifico
//porque esto es asi, no me cuadra la ruta
//creo que esto es asi porquue aqui venimos de App.php, que carga este controlador
//creo que tendria sentido que en todo momento seguimos estando en app o en index
require_once "../Product.php";

class ProductController
{

    //esto reemplazaria a controller.php
    function __construct()
    {
        // echo "<br>Constructor clase PRODUCTCONTROLLER";
    }

    //index y show van a remplazar a los de controller de mvc00
    function index(){
        // echo "<br>Dentro index de PRODUCTCONTROLLER";
        //metodo home de Controller de mvc00
        //habria que modificarlos
        $products = Product::all();
        require "../app/views/product.php";
        //si confundimos el home con el controller de home podemos renombrarlo a product
    }

    //un controlador no tiene sacar echos, tiene que invocar a las vistas
    //y que muestren ellas cosas
    function show(){
        // echo "<br>Dentro de show de PRODUCTCONTROLLER";
        //metodo show de Controller mvc00
        $id = $_GET["id"];
        $product = Product::find($id); //vendra de start.php
        
        require "../app/views/show.php";
    }

////miniejercicio crear 2 nuevos login y home dentro de controllers
//si no hay metodo asigno index
//si no hay controlador asigno home 
}//fin clase

//no va a hacer todas las vistas porque no hace falta, pero serian igual