<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido <?= $_COOKIE['name'] ?></h1>

  <h2>Lista de deseos</h2>
  <!-- nos faltan por ver estos -->
  <!-- nos manda al metodo empty y nos manda al metodo close -->
  <h4><a href="?method=empty">Vaciar lista de deseos</a></h4>
  <h4><a href="?method=close">Cerrar sesión</a></h4>
  <ul>
    <pre>
  <?php 
  // var_dump($deseos);
  // exit();
  //si en deseos hay mas de 0, entiendo
  if (count($deseos)) {
    foreach ($deseos as $id => $deseo) {
      //metodo parametro, ver apuntes de rafa
      //un link que te lleva al metodo borrar con ese id
      //y tambien como funciona el delete y la url esta
      //varias mierdas que ha metido dentro de id
      //? seria index.php(o pondrias index.php?)y despues 
      //de ? seria parejas de clave valor que van en el get separadas por &
      echo "<li> Deseo nº $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> borrar</a> </li>';
    }
  } else {
    //si hay 0 deseos, te dice que no hay deseos todavia
    echo "No hay deseos todavía";
  }
  ?>
  </ul>
  
  <!-- aqui el formulario para añadir nuevos deseos -->
  <hr>
  <h2>Alta de nuevos deseos</h2>
  <!-- formulario que lleva al metodo new que veremos ahora -->
  <form action="?method=new" method="post">
    <label for="new">Nuevo deseo</label>
    <input type="text" name="new">
    
    <input type="submit" value="nuevo">
  </form>
  
</body>
</html>