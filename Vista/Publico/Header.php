<head>
    <h1><a href="?action=principal" style="text-decoration: none; color: black">Banck</a></h1>

    <?php if (isset($_SESSION['user'])): ?>
        <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?> |
            <a href="/ejemploMVC/?action=logout">Cerrar Sesión</a>
        </p>
    <?php else: ?>
        <button onclick="window.location.href='?action=login';">Iniciar sesion</button>
        <button onclick="window.location.href='?action=registro';"> Hazte cliente</button>
    <?php endif; ?>

    <hr>
</head>