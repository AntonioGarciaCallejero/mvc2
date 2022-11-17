<!-- la mayor parte del codigo va a ser html porque es una vista -->
<!-- miniejercicio modificar home de manera que al lado de cada producto nos salga un enlace que
nos lleve a ese producto en particular, es decir ak show -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inventario de Productos</h1>
    <table>
        <!-- mostrar todos los productos, miniejercicio
        las variables en el ambito del metodo estan aqui -->
        <?php foreach ($products as $item):?>
        <tr>
            <!-- el igual era lo mismo que php echo -->
            <td>Identificador: <?= $item[0] ?></td>
            <td>Descripcion:   <?= $item[1] ?></td>
            <!-- <a href="http://mvc.local/?method=show&&id=<?= $item[0] ?>"></a> -->
            <!-- parametro del metodo -->
            <!-- pone show delante de la interrogacion y le funciona, no se porque -->
            <!-- asi tambien funcionaria : "product/show?id=antes del menor interrogacion..." -->
            <!-- lo del href lo ha cambiado -->
            <!-- show?id este que es el que me ha puesto el no funciona -->
            <!-- product/show?id  el bueno est este -->
            <!-- ver teoria ejemplos a ver si arroja mas luz sobre esto -->
            <!-- mirar la teoria de esto, le va  poner la mayuscular con una mierda que hemos hecho
        cuiado al cambiar cosas -->
            <td><a href="product/show?id=<?= $item[0] ?>">Ver detalle</a></td>
        </tr>
        <!-- cierro la llave del foreach aqui -->
        <?php endforeach; ?>
        <!-- envezde abrir llaves se ponen dos puntos y endforeach con puntocoma, para mas claro -->
        <!-- sustituir por 2 puntos y endnombre de la funcion bucle punto coma -->
    </table>
</body>
</html>