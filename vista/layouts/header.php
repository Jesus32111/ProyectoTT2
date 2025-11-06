<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Veterinaria profesional - Cuidado integral para tus mascotas. Productos de calidad y servicios veterinarios.">
    <meta name="keywords" content="veterinaria, mascotas, productos veterinarios, alimentos, medicamentos">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Clini Vet - Veterinaria Profesional</title>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="header animate-fade-in-down">
        <div class="header-top">
            <div class="container">
                <div class="header-contact">
                    <a href="tel:+34912345678">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        +34 912 345 678
                    </a>
                    <a href="mailto:info@clinivet.es">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        info@clinivet.es
                    </a>
                </div>
                <div class="header-schedule">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Lun - Vie: 9:00 - 20:00
                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container">
                <a href="/" class="logo">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                        <path d="M8 10.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5S8 11.33 8 10.5zm5 0c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5z"/>
                        <path d="M12 17.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
                    </svg>
                    Clini<span>Vet</span>
                </a>

                <nav>
                    <ul class="nav-menu">
                        <li><a href="?page=home" class="<?php echo (isset($currentPage) && $currentPage === 'home') ? 'active' : ''; ?>">Inicio</a></li>
                        <li><a href="?page=products" class="<?php echo (isset($currentPage) && $currentPage === 'products') ? 'active' : ''; ?>">Productos</a></li>
                        <li><a href="?page=contact" class="<?php echo (isset($currentPage) && $currentPage === 'contact') ? 'active' : ''; ?>">Contacto</a></li>
                        <li><a href="?page=citas" class="<?php echo (isset($currentPage) && $currentPage === 'citas') ? 'active' : ''; ?>">Citas</a></li>
                    </ul>
                </nav>

                <div class="header-actions">
                    <button class="btn btn-primary">Cita Online</button>
                </div>
            </div>
        </div>
    </header>