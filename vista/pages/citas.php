<?php
$pageTitle = 'Citas Registradas';
$currentPage = 'citas';
?>

<main>
    <section class="section">
        <div class="container">
            <div class="section-header animate-fade-in-up">
                <h2 class="section-title">Citas Registradas</h2>
                <p class="section-subtitle">Aquí puedes ver todas las citas registradas.</p>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Mensaje</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($citas)): ?>
                            <?php foreach ($citas as $cita): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($cita['id']); ?></td>
                                    <td><?php echo htmlspecialchars($cita['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($cita['email']); ?></td>
                                    <td><?php echo htmlspecialchars($cita['telefono']); ?></td>
                                    <td><?php echo htmlspecialchars($cita['mensaje']); ?></td>
                                    <td><?php echo htmlspecialchars($cita['fecha_registro']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No hay citas registradas.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
