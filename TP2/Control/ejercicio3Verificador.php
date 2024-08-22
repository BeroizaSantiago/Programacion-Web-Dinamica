<?php
class Verificador {
    private $usuarios;

    public function __construct() {
        // Simulación de una base de datos de usuarios
        $this->usuarios = [
            ['usuario' => 'user1', 'clave' => 'password1'],
            ['usuario' => 'user2', 'clave' => 'password2'],
            ['usuario' => 'user3', 'clave' => 'password3'],
            ['usuario' => 'user4', 'clave' => 'password4'],
            ['usuario' => 'admin', 'clave' => 'admin123'],
        ];
    }

    public function verificarCredenciales($usuario, $clave) {
        foreach ($this->usuarios as $user) {
            if ($user['usuario'] === $usuario && $user['clave'] === $clave) {
                return true;
            }
        }
        return false;
    }
}
?>
