<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>

<body>

    <?php include __DIR__ . '/../Publico/Header.php'; ?>

    <h1>Iniciar sesion</h1>
    <form action="/PracticaMVC/?action=login" method="POST">

        <p>
            <label for="dni">DNI: </label>
            <input type="text" name="dni" placeholder="DNI de usuario" required>
        </p>

        <p>
            <label for="Contraseña">Contraseña: </label>
            <input type="password" name="contra" placeholder="Contraseña" required>
        </p>

        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>

</body>

</html>