<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container mt-4">
    <div class="d-flex justify-content-center align-items-center">
        <h1 class="mb-4">Lista de Alumnos</h1>
    </div>
    <input type="text" id="searchInput" placeholder="Buscar alumno..." 
       class="form-control mb-3" onkeyup="searchInputFunction()">
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" id="success-message" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        
        <script>
            setTimeout(function() {
                var alert = document.getElementById('success-message');
                if (alert) {
                    var bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }
            }, 3000);
        </script>
    @endif
    
    <button class="btn btn-outline-primary mb-3" onclick="window.location='{{ route('alumnos.create') }}'">
        Crear Nuevo Alumno
    </button>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Acciones</td>
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
            @if ($alumnos->isEmpty())
                <tr>
                    <td colspan="11" class="text-center">No hay alumnos registrados.</td>
                </tr>
            @else
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-outline-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
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
        <script>
    function searchInputFunction() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const tableRows = document.querySelectorAll('table tbody tr');
        
        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            row.style.display = rowText.includes(input) ? '' : 'none';
        });
    }
</script>
</body>
</html>