<?php
// el controlador especifico
//un controlador para cada mierda en vez de uno solo para todas que es el que hemos deprecateado
class HomeController
{   
    //en home y login ya no voy a cargar productos, mostrare una vista diferente
    // un controlador no tiene porque sacar echos, llama a las vistas 
    //esto reemplazaria a controller.php
    //seria llamar a diferentes vistas enn cada controladror
    
    function __construct()
    {
        // echo "<br>Constructor clase HOMECONTROLLER";
        
    }

    //index y show van a remplazar a los de controller de mvc00
    function index(){
        echo "<br>Dentro index de HOMECONTROLLER";
        //metodo home de Controller de mvc00
        //habria que modificarlos
    }

    function show(){
        echo "<br>Dentro de show de HOMECONTROLLER";
        //metodo show de Controller mvc00
    }

////miniejercicio crear 2 nuevos login y home dentro de controllers
//si no hay metodo asigno index
//si no hay controlador asigno home 
}//fin clase