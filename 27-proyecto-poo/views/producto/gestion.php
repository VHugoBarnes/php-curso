<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">Crear producto</a>

<?php if( isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete' ): ?>
    <br><p><strong class="alert_green">Producto creado exitosamente</strong></p><br>
<?php elseif( isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed' ): ?>
    <br><p><strong class="alert_red">Error al guardar el producto</strong></p><br>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while ($producto = $productos->fetch_object()) : ?>
        <tr>
            <td><?= $producto->id ?></td>
            <td><?= $producto->nombre ?></td>
            <td><?= $producto->precio ?></td>
            <td><?= $producto->stock ?></td>
        </tr>
    <?php endwhile; ?>
</table>