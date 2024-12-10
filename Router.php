<?php
require_once __DIR__."/Controlador/controlador_usuario.php";
//session_start();
$action = $_GET['action'] ?? 'principal';

switch ($action) {
    case 'principal':
        require_once __DIR__ . '/Vista/Principal.php';
        break;

    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new controlador_usuario())->login();
        } else {
            include_once __DIR__ . '/Vista/Usuarios/Login.php';
        }
        break;

    case 'registro':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new controlador_usuario())->registro();
        } else {
            require_once __DIR__ . '/Vista/Usuarios/Registro.php';
        }
        break;
    case 'logout':
        (new controlador_usuario())->registro();

    default:
        echo "<h1>404 Not Found</h1>";
        echo "<h2>Directorio no encontrado</h2>";
        break;
}
