<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar | {{ $pelicula->titulo }}</title>
    <link rel="stylesheet" href="{{ asset('css/mostrar.css') }}">
</head>
<body>
    <section class="contain">

        <a href="{{ url('/') }}" class="back-link">← Volver al inicio</a>
        <h1>{{ $pelicula->titulo }}</h1>
        <img src="{{ $pelicula->imagenes[0] }}" alt="img" class="pelicula-img">
        <p><strong>Director:</strong> {{ $pelicula->director }}</p>
        <p>{{ $pelicula->descripcion }}</p>


        <form method="POST" action="/peliculas/{{ $pelicula->id }}/opinar">
            @csrf
            <input type="text" name="nombre" placeholder="Tu nombre">
            <input type="email" name="email" placeholder="Tu email">
            <textarea name="opinion" placeholder="Tu opinión"></textarea>
            <button type="submit">Enviar</button>
        </form>


        @if (@session('exito'))
            <p style="color: green;">{{ session('exito') }}</p>
        @endif

    </section>
</body>
</html>
