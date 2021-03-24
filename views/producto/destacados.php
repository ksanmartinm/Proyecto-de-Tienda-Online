<h1>Algunos de nuestros productos</h1>

<?php while($product = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?=base_url?>producto/ver&id=<?=$product->id?>" style="text-decoration: none">
            <?php if($product->imagen != null):?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="Camiseta">
            <?php else: ?>
                <img src="assets/img/camiseta.png" alt="">
            <?php endif; ?>
                <h2><?=$product->nombre?></h2>
        </a>
        <p><?=$product->precio?></p>
        <a href="" class="button">Comprar</a>
    </div>
<?php endwhile; ?>