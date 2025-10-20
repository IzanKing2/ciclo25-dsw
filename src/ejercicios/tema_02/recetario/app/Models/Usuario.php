<?php

namespace App\Models;

class Usuario
{
    public string $email;
    public string $nombre;
    public string $rol;

    public function __construct(string $email, string $nombre, string $rol) {
        $this->email = $email;
        $this->$nombre = $nombre;
        $this->$rol = $rol;
    }

    /**
     *  Función que devuelve una lista de usuarios predefinidos
     *  @return array<Usuario>
     */
    public static function usuarios()
    {
        return [
            new Usuario("izan@example.com", "Izan", "admin"),
            new Usuario("maria@example.com", "María", "editor"),
            new Usuario("pedro@example.com", "Pedro", "viewer"),
        ];
    }
}
