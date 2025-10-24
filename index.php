<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ruta base del proyecto
define('BASE_PATH', __DIR__);

// Incluir header
include BASE_PATH . '/vista/layouts/header.php';

// Determinar la vista a cargar
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Vistas válidas
$valid_pages = [
    'home' => BASE_PATH . '/vista/pages/home.php',
    'products' => BASE_PATH . '/vista/pages/products.php',
    'product-detail' => BASE_PATH . '/vista/pages/product-detail.php',
];

// Cargar la vista si existe
if (array_key_exists($page, $valid_pages)) {
    include $valid_pages[$page];
} else {
    echo '<main class="container"><h2>Página no encontrada</h2></main>';
}

// Incluir footer
include BASE_PATH . '/vista/layouts/footer.php';
?>
