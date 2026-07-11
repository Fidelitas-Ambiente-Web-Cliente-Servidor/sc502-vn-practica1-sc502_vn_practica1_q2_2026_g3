<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? 'Academia Pro') ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <?php if (!empty($extraCss)): ?>
        <link rel="stylesheet" href="<?= htmlspecialchars($extraCss) ?>">
    <?php endif; ?>
    <?php if (!empty($extraJs)): ?>
        <script src="<?= htmlspecialchars($extraJs) ?>" defer></script>
    <?php endif; ?>
</head>

<body>

    <header class="navbar">
        <div class="logo">Academia Pro</div>

        <nav>
            <a href="index.php?controller=index&action=index" class="<?= ($activePage ?? '') === 'index' ? 'active' : '' ?>">Inicio</a>
            <a href="index.php?controller=cursos&action=index" class="<?= ($activePage ?? '') === 'cursos' ? 'active' : '' ?>">Cursos</a>
            <a href="index.php?controller=profesores&action=index" class="<?= ($activePage ?? '') === 'profesores' ? 'active' : '' ?>">Profesores</a>
            <a href="index.php?controller=contacto&action=index" class="<?= ($activePage ?? '') === 'contacto' ? 'active' : '' ?>">Contacto</a>
        </nav>
    </header>
