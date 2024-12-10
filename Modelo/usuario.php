<?php
class Usuario
{
    private static $file = __DIR__ . '/../Datos/usuarios.json';

    public static function registro($nombre, $apellidos, $dni, $contra)
    {
        $usuarios = self::getAll();
        $usuarios[] = [
            'dni' => $dni,
            'contra' => password_hash($contra, PASSWORD_DEFAULT),
            'nombre' => $nombre,
            'apellidos' =>$apellidos
        ];
        file_put_contents(self::$file, json_encode($usuarios));
    }

    public static function inicio($dni, $contra)
    {
        $usuarios = self::getAll();
        foreach ($usuarios as $usuario) {
            if ($usuario['dni'] === $dni && password_verify($contra, $usuario['contra'])) {
                $_SESSION['usuario'] = $usuario['nombre'];
                return true;
            }
        }
        return false;
    }

    public static function getAll()
    {
        if (file_exists(self::$file)) {
            return json_decode(file_get_contents(self::$file), true);
        }
        return [];
    }
}
?>