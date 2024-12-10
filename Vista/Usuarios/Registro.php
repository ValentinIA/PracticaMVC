<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>

    <?php include __DIR__ . '/../Publico/Header.php'; ?>

    <h1>Hazte cliente</h1>
    <form action="/PracticaMVC/?action=registro" method="POST">

        <p>
            <label for="dni">DNI o NIE: </label>
            <input type="text" name="dni" placeholder="DNI de usuario" id="dni" minlength="9" maxlength="9" required>
        </p>

        <p>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" placeholder="Nombre de usuario" required>
        </p>

        <p>
            <label for="Apellidos">Apellidos: </label>
            <input type="text" name="apellidos" placeholder="Apellidos de usuario" required>
        </p>


        <p>
            <label for="Contraseña">Contraseña: </label>
            <input type="password" name="contra" placeholder="Contraseña" required>
        </p>


        <button type="submit">Registrar</button>
    </form>

</body>

</html>