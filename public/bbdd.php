<?php
    require "../bbddcon.php";


    //recurso/metodo/parametro1/parametro2
    //recurso -> controlador
    //metodo ->metodos o fucniones dentro de controladores
    //parametros: uno varios o ninguno
    

    //separamos lo publico de la consulta
        $sql = "select nombreusu, password from credenciales";
        //esto hace que la conexion ejecute la consulta sql
        //esto me devolvera un registro por fila de la base de datos
        //y recorro las filass
        $registros = $bd->query($sql);
        echo "<br>Numero de registros devueltos: " . $registros->rowCount();
        //devuelve los registros que devuelve la consulta
        if($registros->rowCount() > 0){
            foreach($registros as $fila){
                echo "<br>Nombre de usuario : " . $fila["nombreusu"];
                echo "<br>Password : " . $fila["password"];
            }
        }else{
            echo "<br>No se ha devuelto ninguna fila";
        }

   
    
    //insertar una nueva fila en credenciales usuario2 : error es la contraseña(cifrada)
    //no se ponen contraseña sin cifrar
    //actualizar una fila
    //borrar una fila