<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🎬Catálogo | Películas</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header></header>
    <main id="catalogo">
        <form method="GET" action="/">
            <input type="text" name="q" placeholder="Buscar..." value="{{ $busqueda }}">
            <button type="submit">Buscar</button>
        </form>

        <div class="grid">
            @foreach ($peliculas as $p)
                <div class="card">
                    <img src="{{ $p->imagenes[0] }}" alt="{{ $p->titulo }}">
                    <h3>{{ $p->titulo }}</h3>
                    <p>{{ $p->director }}</p>
                    <a href="/peliculas/{{ $p->id }}">Ver detalles</a>
                </div>
            @endforeach
        </div>
    </main>
    <footer>
        @copy Todos los derechos reservados.
    </footer>
</body>
</html>
