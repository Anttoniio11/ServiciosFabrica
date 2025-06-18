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

    <hr>

    <h2>Crear nuevo usuario</h2>

    <form method="POST" action="{{ route('usuario.crear') }}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br>

        <button type="submit">Crear Usuario</button>
    </form>

    <hr>

    <h2>Crear nuevo producto</h2>

    <form method="POST" action="{{ route('dashboard.products.store') }}">
        @csrf
        <label for="nombre">Nombre del producto:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" id="precio" required><br>

        <button type="submit">Crear Producto</button>
    </form>

</body>
</html>
