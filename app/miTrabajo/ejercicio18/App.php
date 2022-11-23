<?php

class App
{
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      //el metodo por defecto aqui seria login que es donde vamos a empezar
      $method = 'login';
    }
  
    $this->$method();      
  }

  public function login()
  {
    //si existe la cookie, el login me muestra home
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    //si no existe, me muestra la pagina de login
    include('views/login.php');
  }

  public function auth()
  {
    //recoger datos POST
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      //redireccion a ind3ex.php que esta al mismo nivel que nosotros con 
      //¿ruta relativa?
      header('Location: ?method=login');
      return;
    }
    //echo "xxxxx"; //al cuerpo del response. Ya no puedo usar header, ningun setcookie,....
    //guardar en cookie
    //ha puesto en 2 cookies distintas, pero luego va a comprobar todo el rato con la
    //cookie name
    setcookie('name', $name, time() + 60*60*2);
    setcookie('password', $password, time() + 60*60*2);
    //reenviar a "home"
    //le dice al navegador que vaya a otro sitio:
    //http://ejercicios.local/ejemplos/20/index.php?method=home
    //los puedes poner asi o con esto antes de la interrogacion index.php
    header('Location: ?method=home');
  }
  public function home()
  {
    //si no existe la cookie home te devuelve al login
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
    //si existe la cookie name
    //si existe la cookie deseos, la deserializa y la iguala a una variable
    //que sera el array
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      //si no existe, crea el array
      // $deseos = array();
      $deseos = [];
    }
    //y te muestra la pagina home
    include('views/home.php');
  }

  public function new()
  {
    //si no existe el como deberias haber llegado ahi, te redirige a dedonde venias
    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      //y eso va a inmediatamente finalizar la funcion
      return;
    }
    //si si que existe va guardar en una variable el nuevo objeto
    $new = $_POST['new'];
    //despues si existe la cookie deseos la va a deserializar para obtner el array 
    //que hay dentro
    if (isset($_COOKIE['deseos'])) {
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      //si no existe la cookie pues crea un nuevo array
      $deseos = [];
    }
    //en ambos casos guarda el nuevo deseo en el array
    $deseos[] = $new;
    //y despues vuelve a crear la cookie con el array serializado dentro
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    //y nos redirige a home
    header('Location: index.php?method=home');
  }

  //a ver el metodo delete
  public function delete()
  {
    // echo "<pre>";
    // print_r($_GET);
    if (isset($_COOKIE['deseos'])) {
      //si existe la cookie con la lista de deseos deserializa el array de dentro
      $deseos = unserialize($_COOKIE['deseos']);
    } else {
      //sino crea uno nuevo
      $deseos = [];
    }
    //coge el valor del id que le hemos pasado por get
    $id = $_GET['id'];
    //y elimina la posicion de ese id del array
    unset($deseos[$id]);
    //despues vuelve a crear la cookie con el array actualizado
    //estos serian segundos imaginop
    setcookie('deseos', serialize($deseos), time() + 60*60*2);
    //y nos redirige a home
    header('Location: index.php?method=home');
  }

  public function empty()
  {
    //son dos formas de eliminar la cookie al parecer
    //¿porque? no lose
    setcookie('deseos', '',  1);
    // setcookie('deseos', '', time() - 1);
    //despues te redirige
    header('Location: index.php?method=home');    
  }

  public function close()
  {
    //este elimina todas las cookies y te redirige a login
    setcookie('deseos', '',  1);
    setcookie('name', '',  1);
    setcookie('password', '',  1);
    header('Location: index.php?method=login');
  }
}
