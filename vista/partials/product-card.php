<div class="product-card fade-in-on-scroll hover-lift">
    <div class="product-image-wrapper">
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image">
        <?php if (isset($product['badge'])): ?>
            <span class="product-badge"><?php echo htmlspecialchars($product['badge']); ?></span>
        <?php endif; ?>
    </div>

    <div class="product-info">
        <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
        <h3 class="product-title"><?php echo htmlspecialchars($product['name']); ?></h3>
        <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>

        <div class="product-footer">
            <div class="product-price">
                <span class="product-price-label">Precio</span>
                <?php echo number_format($product['price'], 2); ?> €
            </div>
            <a href="/producto/<?php echo $product['id']; ?>" class="btn-add-cart">Ver Detalle</a>
        </div>
    </div>
</div>
