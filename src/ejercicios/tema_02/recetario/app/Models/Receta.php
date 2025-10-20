<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\This;

use function Pest\Laravel\put;

class Receta
{
    public int $id;
    public string $titulo;
    public int $dificultad;
    public float $precio;
    public array $ingredientes = [];
    public array $imagenes = [];

    public function __construct(int $id, string $titulo, int $dificultad, float $precio)
    {
        $this->$id = $id;
        $this->$titulo = $titulo;
        $this->$dificultad = $dificultad;
        $this->$precio = $precio;
    }

    // Función para añadir ingredientes a la lista
    function aniadirIngrediente(Ingrediente $ingrediente): void
    {
        $this->ingredientes[] = $ingrediente;
    }

    // Función para añadir una imágen a la lista
    function aniadirImagen(string $ruta): void
    {
        $this->imagenes[] = $ruta;
    }

    /**
     *  Función que devuelve una lista de recetas predefinidas
     *  @return array<Receta>
     */
    public static function recetas()
    {
        $receta1 = new Receta(1, "Tarta de manzana", 3, 12.50);
        $receta1->aniadirIngrediente(new Ingrediente("Manzana", "Trozos de manzana cortados en láminas"));
        $receta1->aniadirIngrediente(new Ingrediente("Harina", "Harina de trigo para repostería"));
        $receta1->aniadirIngrediente(new Ingrediente("Azúcar", "Azúcar blanca"));
        $receta1->aniadirIngrediente(new Ingrediente("Mantequilla", "Mantequilla sin sal"));
        $receta1->aniadirIngrediente(new Ingrediente("Huevo", "Huevos frescos"));
        $receta1->aniadirIngrediente(new Ingrediente("Canela", "Canela en polvo"));
        $receta1->aniadirIngrediente(new Ingrediente("Levadura", "Levadura química o polvo de hornear"));
        $receta1->aniadirIngrediente(new Ingrediente("Sal", "Una pizca de sal"));
        $receta1->aniadirImagen("tarta1.jpg");
        $receta1->aniadirImagen("tarta2.jpg");
        $receta1->aniadirImagen("tarta3.jpg");
        return [$receta1];
    }
}
