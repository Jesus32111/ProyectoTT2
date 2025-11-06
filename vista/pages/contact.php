<?php
$pageTitle = 'Contacto';
$currentPage = 'contact';
?>

<main>
    <section class="section">
        <div class="container text-center">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Contacto</h2>
                <p class="section-subtitle">Ponte en contacto con nosotros para agendar una cita.</p>
            </div>

            <?php if (isset($_GET['status'])): ?>
                <div class="alert <?php echo $_GET['status'] === 'success' ? 'alert-success' : 'alert-danger'; ?> animate-fade-in-up" role="alert">
                    <?php echo $_GET['status'] === 'success' ? '¡Mensaje enviado con éxito!' : 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.'; ?>
                </div>
            <?php endif; ?>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="index.php?action=contact" method="post" class="contact-form">
                        <div class="form-group mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="tel" id="telefono" name="telefono" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="mensaje" class="form-label">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" rows="5" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
