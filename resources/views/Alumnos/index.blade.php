<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container mt-4">
    <h1 class="mb-4"> Lista de Alumnos</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Género</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha Inscripción</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody>
            
            @if($alumnos->isEmpty())
                <tr>
                    <td colspan="10" class="text-center">No hay alumnos registrados.</td>
                </tr>
            @else
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->codigo_alumno }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->genero }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->direccion }}</td>
                    <td>{{ $alumno->fecha_inscripcion }}</td>
                    <td>{{ $alumno->activo ? 'Sí' : 'No' }}</td>
                </tr>
                @endforeach
            @endif
            
        </tbody>
    </table>
</body>
</html>