<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Compañía</title>
</head>
<body>

    <h1>Crear Compañía</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('compania.store') }}" method="POST">
        @csrf
        <div>
            <label for="id">Número de Compañía:</label>
            <input type="text" name="id" id="id" required>
        </div>
        <div>
            <label for="primary_activity">Actividad Principal:</label>
            <input type="text" name="primary_activity" id="primary_activity" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>