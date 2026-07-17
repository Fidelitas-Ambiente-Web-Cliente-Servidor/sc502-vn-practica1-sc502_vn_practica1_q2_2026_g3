<?php
$pageTitle  = 'Inicio | Academia Pro';
$activePage = 'index';
$extraCss   = 'css/index.css';
require __DIR__ . '/layout/header.php';
?>

<main>
    <section class="hero">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                <p class="hero-tag">Academia de idiomas</p>
                <h1>Aprende un nuevo idioma y abre más oportunidades</h1>
                <p>
                    En Academia Pro ofrecemos cursos de Alemán, Francés, Inglés,
                    Italiano, Japonés y Portugués para estudiantes que desean mejorar su
                    comunicación, viajar, estudiar o crecer profesionalmente.
                </p>
                <a class="btn-primary" href="index.php?controller=cursos&action=index">Ver cursos</a>
            </div>

            <div class="col-12 col-lg-5">
                <div class="hero-box">
                    <h2>Clases prácticas</h2>
                    <p>
                        Aprende vocabulario, conversación, gramática y cultura con profesores
                        preparados para guiarte desde nivel básico hasta avanzado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-title">
            <h2>Cursos destacados</h2>
            <p>Conoce algunos de los idiomas más solicitados por nuestros estudiantes.</p>
        </div>

        <div class="row g-4">
            <?php if (!empty($cursosDestacados)): ?>
                <?php foreach ($cursosDestacados as $curso): ?>
                    <div class="col-12 col-md-4">
                        <article class="course-card">
                            <img
                                src="<?= htmlspecialchars($curso['imagen_url']) ?>"
                                alt="<?= htmlspecialchars($curso['alt_imagen'] ?: ('Curso de ' . $curso['nombre'])) ?>" />
                            <div class="card-info">
                                <h3><?= htmlspecialchars($curso['nombre']) ?></h3>
                                <p><?= htmlspecialchars($curso['descripcion']) ?></p>
                                <a href="<?= htmlspecialchars($curso['enlace'] ?: 'index.php?controller=cursos&action=index') ?>">Ver más</a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-center mb-0">No hay cursos destacados disponibles en este momento.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="languages-list">
            <h3>Idiomas disponibles</h3>
            <p>Alemán • Francés • Inglés • Italiano • Japonés • Portugués</p>
        </div>
    </section>

    <section class="stats">
        <div class="row g-4 text-center">
            <div class="col-12 col-md-4">
                <div class="stat-card">
                    <h3>900+</h3>
                    <p>Estudiantes activos</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="stat-card">
                    <h3>6</h3>
                    <p>Idiomas disponibles</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="stat-card">
                    <h3>15</h3>
                    <p>Profesores especializados</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-title">
            <h2>Testimonios</h2>
            <p>Opiniones de estudiantes que han aprendido nuevos idiomas con nosotros.</p>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-6">
                <article class="testimonial">
                    <p>
                        “Entré con un nivel básico de inglés y ahora puedo mantener
                        conversaciones con más confianza. Las clases son claras y prácticas.”
                    </p>
                    <h3>María Fernández</h3>
                    <span>Estudiante de Inglés</span>
                </article>
            </div>

            <div class="col-12 col-md-6">
                <article class="testimonial">
                    <p>
                        “Siempre quise aprender japonés y en Pro encontré una forma
                        ordenada y sencilla para empezar desde cero.”
                    </p>
                    <h3>Carlos Ramírez</h3>
                    <span>Estudiante de Japonés</span>
                </article>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/layout/footer.php'; ?>
