<h1>Detalle del Producto <?php echo $product->id ?></h1>
<?php print_r($product); ?>
<ul>
    <li><strong>Id: </strong><?php echo $product->id ?></li>
    <li><strong>Nombre: </strong><?php echo $product->name ?></li>
    <li><strong>Type_id: </strong><?php echo $product->type_id ?></li>
    <li><strong>Precio: </strong><?php echo $product->price ?></li>
    <li><strong>F. compra: </strong><?php echo $product->fecha_compra ?></li>
</ul>