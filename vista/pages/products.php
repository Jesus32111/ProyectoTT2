<?php
$pageTitle = 'Productos';
$currentPage = 'products';
?>

<main>
    <div class="breadcrumb">
        <div class="container">
            <a href="/">Inicio</a>
            <span>/</span>
            <span>Productos</span>
        </div>
    </div>

    <section class="section products-section">
        <div class="container">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Nuestros Productos</h2>
                <p class="section-subtitle">Encuentra productos de alta calidad para el cuidado integral de tu mascota</p>
            </div>

            <div class="products-filters">
                <button class="filter-btn active" data-category="all">Todos</button>
                <button class="filter-btn" data-category="alimentos">Alimentos</button>
                <button class="filter-btn" data-category="medicamentos">Medicamentos</button>
                <button class="filter-btn" data-category="accesorios">Accesorios</button>
                <button class="filter-btn" data-category="higiene">Higiene</button>
                <button class="filter-btn" data-category="suplementos">Suplementos</button>
            </div>

            <div class="products-grid">
                <?php
                $products = [
                    [
                        'id' => 1,
                        'name' => 'Alimento Premium para Perros Adultos',
                        'category' => 'Alimentos',
                        'price' => '45.99',
                        'description' => 'Nutricion completa y balanceada para perros adultos de todas las razas',
                        'badge' => 'Destacado',
                        'image' => 'https://images.pexels.com/photos/7210754/pexels-photo-7210754.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Collar Antipulgas Natural',
                        'category' => 'Accesorios',
                        'price' => '18.50',
                        'description' => 'Proteccion efectiva contra pulgas y garrapatas con ingredientes naturales',
                        'badge' => 'Nuevo',
                        'image' => 'https://images.pexels.com/photos/5731794/pexels-photo-5731794.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Suplemento Vitaminico Completo',
                        'category' => 'Suplementos',
                        'price' => '32.00',
                        'description' => 'Multivitaminico formulado especialmente para fortalecer el sistema inmune',
                        'badge' => 'Mas Vendido',
                        'image' => 'https://images.pexels.com/photos/6214476/pexels-photo-6214476.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
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
                        'id' => 5,
                        'name' => 'Antiparasitario Interno',
                        'category' => 'Medicamentos',
                        'price' => '24.90',
                        'description' => 'Tratamiento efectivo contra parasitos internos para perros y gatos',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/6235234/pexels-photo-6235234.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 6,
                        'name' => 'Cepillo Deslanador Premium',
                        'category' => 'Accesorios',
                        'price' => '15.99',
                        'description' => 'Cepillo profesional para eliminar el pelo muerto y prevenir nudos',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/7210408/pexels-photo-7210408.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 7,
                        'name' => 'Shampoo Hipoalergenico',
                        'category' => 'Higiene',
                        'price' => '12.50',
                        'description' => 'Shampoo suave especial para pieles sensibles y propensas a alergias',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/6816861/pexels-photo-6816861.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 8,
                        'name' => 'Omega 3 para Mascotas',
                        'category' => 'Suplementos',
                        'price' => '28.00',
                        'description' => 'Aceite de salmon rico en omega 3 para una piel y pelaje saludables',
                        'badge' => 'Nuevo',
                        'image' => 'https://images.pexels.com/photos/6214508/pexels-photo-6214508.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 9,
                        'name' => 'Snacks Dentales para Perros',
                        'category' => 'Alimentos',
                        'price' => '9.99',
                        'description' => 'Premios funcionales que ayudan a limpiar los dientes y refrescar el aliento',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/7210420/pexels-photo-7210420.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 10,
                        'name' => 'Antiinflamatorio Veterinario',
                        'category' => 'Medicamentos',
                        'price' => '35.50',
                        'description' => 'Tratamiento antiinflamatorio de uso veterinario con receta',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/6235661/pexels-photo-6235661.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 11,
                        'name' => 'Juguete Interactivo Dispensador',
                        'category' => 'Accesorios',
                        'price' => '22.00',
                        'description' => 'Juguete educativo que dispensa premios y estimula la inteligencia',
                        'badge' => 'Mas Vendido',
                        'image' => 'https://images.pexels.com/photos/7210755/pexels-photo-7210755.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 12,
                        'name' => 'Arena Aglomerante para Gatos',
                        'category' => 'Higiene',
                        'price' => '16.75',
                        'description' => 'Arena de alta calidad con control de olores y facil limpieza',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/8434799/pexels-photo-8434799.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 13,
                        'name' => 'Probioticos Digestivos',
                        'category' => 'Suplementos',
                        'price' => '26.90',
                        'description' => 'Formula con probioticos para mejorar la salud digestiva y fortalecer la flora intestinal',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/6235220/pexels-photo-6235220.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 14,
                        'name' => 'Alimento Cachorro Razas Grandes',
                        'category' => 'Alimentos',
                        'price' => '52.00',
                        'description' => 'Nutricion especializada para el desarrollo de cachorros de razas grandes',
                        'badge' => null,
                        'image' => 'https://images.pexels.com/photos/7210425/pexels-photo-7210425.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 15,
                        'name' => 'Cama Ortopedica Memory Foam',
                        'category' => 'Accesorios',
                        'price' => '68.00',
                        'description' => 'Cama ergonomica con espuma de memoria para mascotas con problemas articulares',
                        'badge' => 'Premium',
                        'image' => 'https://images.pexels.com/photos/4588440/pexels-photo-4588440.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ]
                ];

                foreach ($products as $product) {
                    include __DIR__ . '/../partials/product-card.php';
                }
                ?>
            </div>

            <div class="pagination">
                <button class="pagination-btn">&laquo;</button>
                <button class="pagination-btn active">1</button>
                <button class="pagination-btn">2</button>
                <button class="pagination-btn">3</button>
                <button class="pagination-btn">4</button>
                <button class="pagination-btn">&raquo;</button>
            </div>
        </div>
    </section>
</main>
