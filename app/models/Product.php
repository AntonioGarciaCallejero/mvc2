<?php
namespace App\Models;
//los datos de la base de datos y los metodos que los manejan aqui
//para que esto funcione habria que modificar los controladores de producto imagino
//esto es para cuando usemos PDO, hay q1ue ponerlo noserporque
use PDO;
//esto es para no tener que escribir la ruta namespace cada vez que usemos la clase Model
use Core\Model;
//use en namespaces:
//use const Dwes\PI; para constantes echo PI;
//use function Dwes\avisa; para funciones avisa();
//use Dwes\Prueba para clases, Prueba es una clase $prueba = new Prueba(); $prueba->probando();

//esto esta bien asi?
//creo que no
//ta bien asi en teoria
//parece que el punto punto siempre nos sube un nivel mas de lo que pensamos
require_once '../core/Model.php';
//Fichero que simula el modelo con datos

//lo de que te crea un atributo con el nombre de cada campo si no los creas tu

class Product extends Model{
    //asi o con define
    //entiendo que esto ya no hara falta si vamosa tenerr la mierda en la bnase de datos
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
    public static  function all()
    {
        $db = Product::db();
        //a ver como lo ha hecho el
        $sql = 'SELECT * FROM products';
        $sentencia = $db->prepare($sql);
        
        //nos faltaba ejecutarla joder
        $sentencia->execute();
        //y ahora con la sentencia preparada
        //me va a meter en products un array de objetos
        //daba error de la otra forma, de esta no ¿porque? nolose
        $products = $sentencia->fetchAll(PDO::FETCH_CLASS, Product::class);
        return $products;
    }

    //devolver un producto en particular 
    //a ver  como lo hacemos bien este
    public static function find($id)
    {   
        // (ESTO LO HEMOS DEPRECATEADO)
        //esto porque en el otro lado hemos empezado a contar en el 1
        //a ese id que nos solicita le resto 1 para que acceda a la posicion correcta del array
        // return Product::PRODUCTS[$id-1];
        $db = Product::db();
        $stmt = $db->prepare('SELECT * FROM products WHERE id=:id');
        //esta es la parte que podriamos hacer tambien o con bindParam o con bindValue
        //ejecutamos el objeto sentencia haciendo que el parametro coincida con nuestra
        //variable id
        //aqui efectivamente lo esta haciendo con un array asociativo
        $stmt->execute(array(':id' => $id));
        //el modo en que queremos recuperar los resultados
        //parece que son todo cosas internas del objeto statement
        //porque aqui no salta error con Product?
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Product");
        //y lo fetcheamos igualandolo a product, si hubiera varias lineas devueltas habria que hacer un bucle
        $product = $stmt->fetch(PDO::FETCH_CLASS);
        return $product;


    }
    // public function insert(){ //TODO }
    // public function delete(){ //TODO }
    // public function save(){ //TODO }

}//fin clase