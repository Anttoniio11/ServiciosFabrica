<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Productos</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->nombre }} - ${{ $product->precio ?? 'N/A' }}</li>
        @endforeach
    </ul>

    <hr>

    <h2>Crear nuevo usuario</h2>

    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br>

        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>
