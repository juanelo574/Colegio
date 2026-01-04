<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h1>Editar Alumno</h1>
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" id="success-message" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            
            <script>
                // Desaparece después de 3 segundos
                setTimeout(function() {
                    var alert = document.getElementById('success-message');
                    if (alert) {
                        var bsAlert = new bootstrap.Alert(alert);
                        bsAlert.close();
                    }
                }, 3000);
            </script>
        @endif
        
        <form action="{{ route('alumnos.update', $alumnos->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="codigo_alumno" class="form-label">Código del Alumno</label>
                <input type="text" class="form-control" id="codigo_alumno" name="codigo_alumno" 
                       value="{{ $alumnos->codigo_alumno }}" required>
            </div>
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" 
                       value="{{ $alumnos->nombre }}" required>
            </div>
            
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" 
                       value="{{ $alumnos->apellido }}" required>
            </div>
            
            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                    value="{{ $alumnos->fecha_nacimiento }}" required>
            </div>
            
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <select name="genero" id="genero" class="form-select" required>
                    <option value="">Seleccione...</option>
                    <option value="Masculino" {{ $alumnos->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ $alumnos->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    <option value="Otro" {{ $alumnos->genero == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" 
                       value="{{ $alumnos->email }}" required>
            </div>
            
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" 
                       value="{{ $alumnos->telefono }}" required>
            </div>
            
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" 
                       value="{{ $alumnos->direccion }}" required>
            </div>
            
            <div class="mb-3">
                <label for="fecha_inscripcion" class="form-label">Fecha de Inscripción</label>
                <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion"
                    value="{{ $alumnos->fecha_inscripcion }}" required>
            </div>
            
            <div class="mb-3">
                <label for="activo" class="form-label">Activo</label>
                <select name="activo" id="activo" class="form-select" required>
                    <option value="1" {{ $alumnos->activo ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$alumnos->activo ? 'selected' : '' }}>No</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>