<!-- interrogacion para empezar la zona de parametros, el nombre del parametro y el valor
eso cuando lo pasamos en la url 
el id ya esta recodigo en $product-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de producto</h1>
    <!-- solo un producto, no todo el array
    una lista ordenada con el identificador  -->
    <li>
        <strong>Identificador:</strong>
        <?= $product[0] ?>
        <strong>Descripcion:</strong>
        <?= $product[1] ?>
    </li>
</body>
</html>

