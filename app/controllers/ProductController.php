<?php
    namespace App\Controllers;
    //o le pones el namespace cada vez que lo uses o lo pones aqui asi una vez
    use App\Models\Product;
 
    
// el controlador especifico
//porque esto es asi, no me cuadra la ruta
//creo que esto es asi porquue aqui venimos de App.php, que carga este controlador
//creo que tendria sentido que en todo momento seguimos estando en app o en index
//hay algo que no pillo, lo logico seria que estando aqui.... de todas formas ante la duda 
//se pueden usar rutas absolutas?
//pones .. y te salen las opciones, tambien es una manera
//¿porque me falla esto?
//porque esto es asi si hasta el propio visualstudio me lo dice otr manera?
//un nivel por encima de lo que dictaria la logica, al parecer
require_once "../app/models/Product.php";


//a pesar de los namespaces hay que requerirlo, y ahora esta en otro sitio, ¿puede ser eso?

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
        //este producto me sale porque la clase productcontroller esta dentro de un namespace
        //si esta en la raiz tengoque decirle que se encuentra en el namespace raiz
        //si Product tuviera un namespace seria diferente
        //ante la duda usar rutas absolutas ves
        $products = Product::all();
        //tenemos el array de productos
        //y una vista en la que lo recorremos mostrandolo
        // require "../app/views/product.php";
        require('../app/views/product/index.php');
        //si confundimos el home con el controller de home podemos renombrarlo a product
    }

    //un controlador no tiene sacar echos, tiene que invocar a las vistas
    //y que muestren ellas cosas
    function show(){
        //lo de args¿?
        // echo "<br>Dentro de show de PRODUCTCONTROLLER";
        //metodo show de Controller mvc00
        //cogemo el id que nos viene en la url con la que venimos
        $id = $_GET["id"];
        //y ejecutamos el metodo find de la clase producto con esa id
        $product = \App\Models\Product::find($id); //vendra de start.php
        
        require "../app/views/product/show.php";
    }

////miniejercicio crear 2 nuevos login y home dentro de controllers
//si no hay metodo asigno index
//si no hay controlador asigno home 
}//fin clase

//no va a hacer todas las vistas porque no hace falta, pero serian igual