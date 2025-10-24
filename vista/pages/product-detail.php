<?php
$pageTitle = 'Detalle del Producto';
$currentPage = 'products';
include __DIR__ . '/../layouts/header.php';

$product = [
    'id' => 1,
    'name' => 'Alimento Premium para Perros Adultos',
    'category' => 'Alimentos',
    'price' => '45.99',
    'stock' => 'En Stock',
    'sku' => 'ALM-PER-001',
    'brand' => 'NutriPet Premium',
    'weight' => '15 kg',
    'rating' => 4.5,
    'reviews' => 127,
    'description' => 'Alimento completo y balanceado especialmente formulado para perros adultos de todas las razas. Elaborado con ingredientes naturales de primera calidad, incluyendo carne fresca de pollo, arroz integral, vegetales y frutas.',
    'long_description' => 'Este alimento premium proporciona una nutricion optima para mantener a tu perro adulto saludable y lleno de energia. Formulado por veterinarios y nutricionistas especializados, contiene el equilibrio perfecto de proteinas, grasas, carbohidratos, vitaminas y minerales esenciales.',
    'features' => [
        'Carne fresca de pollo como primer ingrediente',
        'Sin conservantes artificiales ni colorantes',
        'Glucosamina y condroitina para articulaciones saludables',
        'Omega 3 y 6 para piel y pelaje brillante',
        'Fibra natural para una digestion optima',
        'Antioxidantes naturales para fortalecer el sistema inmune'
    ],
    'composition' => 'Carne de pollo (30%), arroz integral (20%), maiz, harina de pescado, aceite de salmon, pulpa de remolacha, minerales, vitaminas, glucosamina, condroitina, extracto de yuca.',
    'images' => [
        'https://images.pexels.com/photos/7210754/pexels-photo-7210754.jpeg?auto=compress&cs=tinysrgb&w=800',
        'https://images.pexels.com/photos/7210425/pexels-photo-7210425.jpeg?auto=compress&cs=tinysrgb&w=800',
        'https://images.pexels.com/photos/7210420/pexels-photo-7210420.jpeg?auto=compress&cs=tinysrgb&w=800',
        'https://images.pexels.com/photos/7210755/pexels-photo-7210755.jpeg?auto=compress&cs=tinysrgb&w=800'
    ]
];
?>

<main>
    <div class="breadcrumb">
        <div class="container">
            <a href="/">Inicio</a>
            <span>/</span>
            <a href="/productos">Productos</a>
            <span>/</span>
            <span><?php echo htmlspecialchars($product['name']); ?></span>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="product-detail-container animate-fade-in-up">
                <div class="product-gallery">
                    <div class="main-image">
                        <img src="<?php echo htmlspecialchars($product['images'][0]); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    </div>
                    <div class="thumbnail-gallery">
                        <?php foreach ($product['images'] as $index => $image): ?>
                            <div class="thumbnail <?php echo $index === 0 ? 'active' : ''; ?>">
                                <img src="<?php echo htmlspecialchars($image); ?>" alt="Imagen <?php echo $index + 1; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="product-detail-info">
                    <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
                    <h1><?php echo htmlspecialchars($product['name']); ?></h1>

                    <div class="product-rating">
                        <div class="stars">
                            <?php
                            $fullStars = floor($product['rating']);
                            $halfStar = ($product['rating'] - $fullStars) >= 0.5;

                            for ($i = 0; $i < $fullStars; $i++) {
                                echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>';
                            }

                            if ($halfStar) {
                                echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="opacity: 0.5;"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>';
                            }

                            $emptyStars = 5 - ceil($product['rating']);
                            for ($i = 0; $i < $emptyStars; $i++) {
                                echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>';
                            }
                            ?>
                        </div>
                        <span><?php echo $product['rating']; ?> (<?php echo $product['reviews']; ?> valoraciones)</span>
                    </div>

                    <div class="product-detail-price"><?php echo number_format($product['price'], 2); ?> €</div>

                    <div class="product-detail-description">
                        <p><?php echo htmlspecialchars($product['description']); ?></p>
                        <p><?php echo htmlspecialchars($product['long_description']); ?></p>
                    </div>

                    <div class="product-meta">
                        <div class="product-meta-item">
                            <strong>Disponibilidad:</strong>
                            <span style="color: var(--accent-color);"><?php echo htmlspecialchars($product['stock']); ?></span>
                        </div>
                        <div class="product-meta-item">
                            <strong>SKU:</strong>
                            <span><?php echo htmlspecialchars($product['sku']); ?></span>
                        </div>
                        <div class="product-meta-item">
                            <strong>Marca:</strong>
                            <span><?php echo htmlspecialchars($product['brand']); ?></span>
                        </div>
                        <div class="product-meta-item">
                            <strong>Peso:</strong>
                            <span><?php echo htmlspecialchars($product['weight']); ?></span>
                        </div>
                    </div>

                    <div class="quantity-selector">
                        <button class="quantity-btn">-</button>
                        <input type="number" class="quantity-input" value="1" min="1" max="10">
                        <button class="quantity-btn">+</button>
                    </div>

                    <div style="display: flex; gap: 16px; margin-bottom: 24px;">
                        <button class="btn btn-primary btn-large" style="flex: 1;">Agregar al Carrito</button>
                        <button class="btn btn-secondary" style="padding: 16px 24px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                    </div>

                    <div style="display: flex; gap: 16px;">
                        <button class="btn btn-secondary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                            Compartir
                        </button>
                        <button class="btn btn-secondary">Consultar Disponibilidad</button>
                    </div>
                </div>
            </div>

            <div style="margin-top: 64px;">
                <div style="border-bottom: 2px solid var(--border-color); margin-bottom: 32px;">
                    <button class="filter-btn active" style="border-radius: 0; border-bottom: 3px solid var(--primary-color);">Descripcion</button>
                    <button class="filter-btn" style="border-radius: 0;">Composicion</button>
                    <button class="filter-btn" style="border-radius: 0;">Valoraciones</button>
                </div>

                <div style="background-color: var(--bg-white); padding: 40px; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-sm);">
                    <h3 style="margin-bottom: 24px;">Caracteristicas Principales</h3>
                    <ul style="list-style: none; padding: 0;">
                        <?php foreach ($product['features'] as $feature): ?>
                            <li style="padding: 12px 0; border-bottom: 1px solid var(--border-color); display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-color)" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span><?php echo htmlspecialchars($feature); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <h3 style="margin-top: 40px; margin-bottom: 16px;">Composicion Analitica</h3>
                    <p style="line-height: 1.8;"><?php echo htmlspecialchars($product['composition']); ?></p>
                </div>
            </div>

            <div style="margin-top: 64px;">
                <h2 style="text-align: center; margin-bottom: 40px;">Productos Relacionados</h2>
                <div class="products-grid">
                    <?php
                    $relatedProducts = [
                        [
                            'id' => 4,
                            'name' => 'Alimento para Gatos Esterilizados',
                            'category' => 'Alimentos',
                            'price' => '38.75',
                            'description' => 'Formula especial para gatos esterilizados con control de peso',
                            'badge' => null,
                            'image' => 'https://images.pexels.com/photos/8434791/pexels-photo-8434791.jpeg?auto=compress&cs=tinysrgb&w=600'
                        ],
                        [
                            'id' => 9,
                            'name' => 'Snacks Dentales para Perros',
                            'category' => 'Alimentos',
                            'price' => '9.99',
                            'description' => 'Premios funcionales que ayudan a limpiar los dientes',
                            'badge' => null,
                            'image' => 'https://images.pexels.com/photos/7210420/pexels-photo-7210420.jpeg?auto=compress&cs=tinysrgb&w=600'
                        ],
                        [
                            'id' => 14,
                            'name' => 'Alimento Cachorro Razas Grandes',
                            'category' => 'Alimentos',
                            'price' => '52.00',
                            'description' => 'Nutricion especializada para el desarrollo de cachorros',
                            'badge' => null,
                            'image' => 'https://images.pexels.com/photos/7210425/pexels-photo-7210425.jpeg?auto=compress&cs=tinysrgb&w=600'
                        ]
                    ];

                    foreach ($relatedProducts as $product) {
                        include __DIR__ . '/../partials/product-card.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
