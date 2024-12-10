<?php
require_once __DIR__ . "/../Modelo/usuario.php";
class controlador_usuario
{

    public function login()
    {

        $dni = $_POST["dni"];
        $contra = $_POST["contra"];

        if (Usuario::inicio($dni, $contra)) {
            echo "Tamo bien :)";
        } else {
            echo "Aquinosta";
        }
    }

    public function registro()
    {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $dni = $_POST["dni"];
        $contra = $_POST["contra"];

        // Verificar si el usuario ya existe
        $usuarios = Usuario::getAll();
        foreach ($usuarios as $usuario) {
            if ($usuario['dni'] === $dni) {
                echo "El usuario ya existe.";
                return;
            }
        }

        Usuario::registro($nombre, $apellidos, $dni, $contra);

        echo "Te has dado de alta correctamente<br>";
        echo '<a href="/PracticaMVC/?action=login">Iniciar sesion</a>';
    }

    public function logout()
    {
        exit();
    }
}
