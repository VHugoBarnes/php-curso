<h1>Carrito de la compra</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php foreach ($carrito as $indice => $producto) : ?>
        <tr>
            <td><img class="thumb" src="<?= $producto['producto']->imagen ? base_url . 'uploads/images/' . $producto['producto']->imagen : base_url . 'assets/img/camiseta.png' ?>" alt=""></td>
            <td><a href="<?= base_url ?>producto/ver&id=<?= $producto['producto']->id ?>"><?= $producto['producto']->nombre ?></a></td>
            <td>$<?= $producto['precio'] ?></td>
            <td><?= $producto['unidades'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br>
<br>

<div class="acciones-carrito">
    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-pedido button-red">Vaciar carrito</a>
    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito(); ?>
        <h3 id="precio-total">Precio total: $<?= $stats['total'] ?></h3>
        <a href="<?= base_url ?>pedido/hacer" class="button button-pedido">Continuar con el pedido</a>
    </div>
</div>