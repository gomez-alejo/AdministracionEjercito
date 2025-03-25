<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuartel</title>
</head>
<body>

    <h1>Crear Cuartel</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cuartel.store') }}" method="POST">
        @csrf
        <div>
            <label for="id">Código:</label>
            <input type="text" name="id" id="id" required>
        </div>
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="location">Ubicación:</label>
            <input type="text" name="location" id="location" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>