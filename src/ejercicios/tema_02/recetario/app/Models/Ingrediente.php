<?php

namespace App\Models;

class Ingrediente
{
    public string $nombre;
    public string $descripcion;

    public function __construct(string $nombre, string $descripcion)
    {
        $this->$nombre = $nombre;
        $this->$descripcion = $descripcion;
    }
}
