<h1>Algunos de nuestros productos</h1>
<?php while ($producto = $productos->fetch_object()) : ?>
    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>">
            <img src="<?= $producto->imagen ? base_url . 'uploads/images/' . $producto->imagen : base_url . 'assets/img/camiseta.png' ?>" alt="Producto">
            <h2><?= $producto->nombre ?></h2>
        </a>
        <p><?= $productos->precio ?></p>
        <a href="#" class="button">Comprar</a>
    </div>
<?php endwhile; ?>