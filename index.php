<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_PATH', __DIR__);

// Determinar la acción y la página
$action = isset($_GET['action']) ? $_GET['action'] : null;
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Enrutamiento
if ($action === 'contact') {
    include BASE_PATH . '/controlador/contacto_controlador.php';
} else {
    include BASE_PATH . '/vista/layouts/header.php';

    $valid_pages = [
        'home' => BASE_PATH . '/vista/pages/home.php',
        'products' => BASE_PATH . '/vista/pages/products.php',
        'product-detail' => BASE_PATH . '/vista/pages/product-detail.php',
        'contact' => BASE_PATH . '/vista/pages/contact.php',
        'citas' => BASE_PATH . '/vista/pages/citas.php',
    ];
    
    if ($page === 'citas') {
        include BASE_PATH . '/controlador/citas_controlador.php';
    }

    if (array_key_exists($page, $valid_pages)) {
        include $valid_pages[$page];
    } else {
        echo '<main class="container"><h2>Página no encontrada</h2></main>';
    }

    include BASE_PATH . '/vista/layouts/footer.php';
}
?>