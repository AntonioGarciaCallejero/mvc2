<?php  
    //mysql:dbname=<nombre_bbdd>;host=<ip | nombre>;

    //credenciales para conectar al servidor de bases de datos

    $dsn = "mysql:dbname=demo;host=db";
    $usuario = "dbuser";
    $clave = "secret";

    //datos sensibles zona privada

    try {
        //crear nuevo objeto de la clase PDO, apa de abstraccion
        $bd = new PDO($dsn,$usuario,$clave);
    }catch(PDOException $e){
        echo "Mensaje de la excepcion : " . $e->getMessage();
        exit();
    }