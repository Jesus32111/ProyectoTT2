<?php
$pageTitle = 'Inicio';
$currentPage = 'home';
?>

<main>
    <section class="hero">
    <div class="container hero-flex">
        <div class="hero-content">
        <h1 class="hero-title">
        <span class="typewriter line1">Cuidado Profesional</span><br>
        <span class="typewriter line2">para tus Mascotas</span>
        </h1>
        <p> 
            Ofrecemos servicios veterinarios integrales con más de 15 años de experiencia. 
            Tu mascota merece el mejor cuidado y atención especializada.
        </p>
        <div class="hero-buttons">
            <a href="/cita-online" class="btn btn-primary btn-large">Reservar Cita</a>
            <a href="/productos" class="btn btn-secondary btn-large">Ver Productos</a>
        </div>
        </div>

        <div class="hero-image-animation">
            <img src="assets/img/perro.png" alt="Perro feliz" class="animated-dog dog1">
            <img src="assets/img/perro1.png" alt="Perro feliz 2" class="animated-dog dog2">
        </div>

        

    </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-subtitle">Ofrecemos una amplia gama de servicios veterinarios para garantizar la salud y bienestar de tu mascota</p>
            </div>

            <div class="services-grid stagger-animation">
                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>Consulta Veterinaria</h3>
                    <p>Exámenes completos y diagnósticos precisos para mantener la salud de tu mascota en óptimas condiciones.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>Cirugía Especializada</h3>
                    <p>Quirófano equipado con la última tecnología para realizar intervenciones quirúrgicas con máxima seguridad.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </div>
                    <h3>Vacunación y Medicina Preventiva</h3>
                    <p>Programas de vacunación completos y atención preventiva para proteger a tu mascota de enfermedades.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <h3>Diagnóstico por Imagen</h3>
                    <p>Radiografía digital, ecografía y otros estudios de diagnóstico para una evaluación precisa.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3>Peluquería y Estética</h3>
                    <p>Servicios de grooming profesional para mantener a tu mascota limpia, saludable y hermosa.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3>Urgencias 24 Horas</h3>
                    <p>Atención de emergencia disponible las 24 horas del día, los 7 días de la semana para cuando más lo necesites.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section products-section">
        <div class="container">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Productos Destacados</h2>
                <p class="section-subtitle">Selección de productos de alta calidad para el cuidado y bienestar de tus mascotas</p>
            </div>

            <div class="products-grid">
                <?php
                $featuredProducts = [
                    [
                        'id' => 1,
                        'name' => 'Alimento Premium para Perros Adultos',
                        'category' => 'Alimentos',
                        'price' => '45.99',
                        'description' => 'Nutrición completa y balanceada para perros adultos de todas las razas',
                        'badge' => 'Destacado',
                        'image' => 'https://images.pexels.com/photos/7210754/pexels-photo-7210754.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Collar Antipulgas Natural',
                        'category' => 'Accesorios',
                        'price' => '18.50',
                        'description' => 'Protección efectiva contra pulgas y garrapatas con ingredientes naturales',
                        'badge' => 'Nuevo',
                        'image' => 'https://images.pexels.com/photos/5731794/pexels-photo-5731794.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Suplemento Vitamínico Completo',
                        'category' => 'Suplementos',
                        'price' => '32.00',
                        'description' => 'Multivitamínico formulado especialmente para fortalecer el sistema inmune',
                        'badge' => 'Más Vendido',
                        'image' => 'https://images.pexels.com/photos/6214476/pexels-photo-6214476.jpeg?auto=compress&cs=tinysrgb&w=600'
                    ]
                ];

                foreach ($featuredProducts as $product) {
                    include __DIR__ . '/../partials/product-card.php';
                }
                ?>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="?page=products" class="btn btn-primary btn-large">Ver Todos los Productos</a>
            </div>
        </div>
    </section>

    <section class="section" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Por Qué Elegirnos</h2>
                <p class="section-subtitle">Comprometidos con la salud y felicidad de tu mascota</p>
            </div>

            <div class="services-grid">
                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3>15 Años de Experiencia</h3>
                    <p>Equipo veterinario altamente calificado con más de una década cuidando mascotas en la comunidad.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3>Tecnología Avanzada</h3>
                    <p>Equipamiento moderno y técnicas de última generación para diagnósticos precisos y tratamientos efectivos.</p>
                </div>

                <div class="service-card fade-in-on-scroll">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3>Instalaciones Modernas</h3>
                    <p>Clínica completamente equipada con áreas de hospitalización, quirófano y laboratorio propio.</p>
                </div>
            </div>
        </div>
    </section>
</main>
