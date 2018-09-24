<div class="container">
    <?php foreach($products as $product): ?>
    <div class="product" data-id="<?= $product['id'] ?>">
        <img src='img/<?= $product['img'] ?>' />
        <ul class="info">
            <li><?= $product['name'] ?></li>
            <li><?= $product['price'] ?></li>
        </ul>
    </div>
    <?php endforeach; ?>
</div>
