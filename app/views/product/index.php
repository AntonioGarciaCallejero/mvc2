<h1>Lista de productos</h1>

<table class="table table-striped table-hover">
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Fecha de Compra</th>
  </tr>
  <!-- efectivamente parece que la consulta no devuelve nada -->
  
  <?php foreach ($products as $key => $product) { ?>
    <tr>
    <td><?php echo $product->name ?></td>
    <td><?php echo $product->price ?></td>
    <td><?php echo $product->fecha_compra ?></td>
    <td>
      <a href="/product/show/<?php echo $product->id ?>" class="btn btn-primary">Ver </a>
    </td>
    </tr>
    <!-- esto era la forma esta raruna de cerrar cosas el bucle yel trozo de php al mismo tiempo -->
  <?php } ?>
</table>