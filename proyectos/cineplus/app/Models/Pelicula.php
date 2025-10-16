<?php

namespace App\Models;

class Pelicula
{
    public int $id;
    public string $titulo;
    public string $director;
    public string $descripcion;
    public float $precio;
    public array $imagenes;

    public function __construct(
        int $id,
        string $titulo,
        string $director,
        string $descripcion,
        float $precio,
        array $imagenes
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->director = $director;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagenes = $imagenes;
    }


    /**
     *  Función para crear películas
     *  @return array peliculas
     */
    public static function peliculas()
    {
        return [
            new Pelicula
            (
                1, "Spider-Man 1", "Sam Raimi", "Los inicios de un héroe", 12.39, ["/img/spiderman1.jpg"]
            ),
            new Pelicula
            (
                2, "Spider-Man 2", "Sam Raimi", "La carga del heroe", 16.80, ["/img/spiderman2.jpg"]
            ),
            new Pelicula
            (
                2, "Spider-Man 3", "Sam Raimi", "La oscuridad renace", 14.60, ["/img/spiderman3.jpg"]
            ),
        ];
    }


    /**
     *  Función para buscar una película.
     *  Filtrar las películas por:
     *   - Título
     *   - Director
     *   - Ambos
     *  El usuario puede elegir.
     */
    public static function buscar()
    {
        return;
    }
}
