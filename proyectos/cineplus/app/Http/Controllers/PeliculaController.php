<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    // Función para mostrar el catálog de películas y buscar
    public function index(Request $r)
    {
        $peliculas = Pelicula::peliculas(); // Array de películas
        $busqueda = $r->input('q'); // Se guarda la información de busqueda

        // buscamos por título o director
        if ($busqueda) {
            $peliculas = array_filter($peliculas, fn($p) =>
                str_contains(strtolower($p->titulo), strtolower($busqueda)) ||
                str_contains(strtolower($p->director), strtolower($busqueda))
            );
        }

        return view('peliculas.index', compact('peliculas', 'busqueda'));
    }


    // Función para mostrar la información de una película
    public function mostrar($id)
    {
        $pelicula = collect(Pelicula::peliculas())->firstWhere('id', $id);
        return view('peliculas.mostrar', compact('pelicula'));
    }


    // Función para opinar en un formulario
    public function opinar(Request $r, $id)
    {
        $r->validate([
            'nombre' => 'required|min:3',
            'email' => 'required|email',
            'opinion' => 'required|min:20',
        ], [
            'opinion.min' => 'Tu opinión debe tener al menos 20 caracteres.'
        ]);

        return back()->with('exito', '¡Gracias por tu opinión!');
    }
}
