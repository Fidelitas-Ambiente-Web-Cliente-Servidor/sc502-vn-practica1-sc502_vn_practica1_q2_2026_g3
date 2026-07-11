<?php
$pageTitle  = 'Contacto - Academia Pro';
$activePage = 'contacto';
$extraCss   = 'css/contacto.css';
$extraJs    = 'js/contacto.js';
require __DIR__ . '/layout/header.php';

$valores = [
    'nombre'   => $_POST['nombre']   ?? '',
    'email'    => $_POST['email']    ?? '',
    'telefono' => $_POST['telefono'] ?? '',
    'asunto'   => $_POST['asunto']   ?? '',
    'mensaje'  => $_POST['mensaje']  ?? '',
];
?>

<div class="encabezado-pagina">
    <h1>Ponte en contacto con nosotros</h1>
    <p>¿Tienes dudas sobre nuestros cursos, horarios o profesores? Completa el formulario para poder brindarte la
        mejor atención.</p>
</div>

<div id="contacto">
    <div id="formulario-contacto">

        <?php if (!empty($enviado)): ?>
            <div id="mensaje-exito" class="exito-visible">¡Formulario enviado exitosamente! Nos pondremos en
                contacto contigo pronto.</div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div id="mensaje-error" class="exito-visible" style="background:#f8d7da;color:#721c24;border-color:#f5c6cb;">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form id="form-contacto" action="index.php?controller=contacto&action=store" method="post">

            <div class="formulario-grupo">
                <input type="text" placeholder="Nombre completo" name="nombre" id="input-nombre"
                    value="<?= htmlspecialchars($valores['nombre']) ?>">
                <span id="error-nombre" class="error-mensaje"></span>
            </div>

            <div class="formulario-grupo">
                <input type="email" placeholder="Correo Electrónico" name="email" id="input-email"
                    value="<?= htmlspecialchars($valores['email']) ?>">
                <span id="error-email" class="error-mensaje"></span>
            </div>

            <div class="formulario-grupo">
                <input type="text" placeholder="Telefono" name="telefono" id="input-telefono"
                    value="<?= htmlspecialchars($valores['telefono']) ?>">
                <span id="error-telefono" class="error-mensaje"></span>
            </div>

            <div class="formulario-grupo">
                <input type="text" placeholder="Asunto" name="asunto" id="input-asunto"
                    value="<?= htmlspecialchars($valores['asunto']) ?>">
                <span id="error-asunto" class="error-mensaje"></span>
            </div>

            <div class="formulario-grupo">
                <textarea id="Textarea-mensaje" rows="5" placeholder="Mensaje" name="mensaje"><?= htmlspecialchars($valores['mensaje']) ?></textarea>
                <span id="error-mensaje" class="error-mensaje"></span>
            </div>

            <div class="formulario-acciones">
                <input type="submit" value="Enviar" id="btn-envio" disabled>
            </div>

        </form>
    </div>
    <div class="columna-derecha">
        <div id="informacion-contacto">
            <h2>Información de Contacto</h2>
            <p>Dirección: Calle 3 y 5, avenida 6, 50 metros oeste del mercado municipal de artesanias, San José,
                Capital, 10104, Costa Rica</p>
            <p>Teléfono: +506 1234 5678</p>
            <p>Email: info@academiapro.com</p>
        </div>
        <div id="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5557.907935058811!2d-84.07767731077244!3d9.931093960140977!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1780451659690!5m2!1sen!2sus"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php require __DIR__ . '/layout/footer.php'; ?>