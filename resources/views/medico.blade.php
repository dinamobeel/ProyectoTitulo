<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generar Receta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Generar Receta</h1>
        <form method="POST" action="{{ route('receta.store') }}">
          @csrf
          <div class="mb-3">
            <label for="rutPaciente" class="form-label">Rut Paciente:</label>
            <input type="text" class="form-control" id="rutPaciente" name="rutPaciente" placeholder="Ingrese el Rut del Paciente">
          </div>
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el Nombre del Paciente">
          </div>
          <div class="mb-3">
            <label for="estadoReceta" class="form-label">Estado Receta:</label>
            <input type="text" class="form-control" id="estadoReceta" name="estadoReceta" placeholder="Ingrese el Estado de la Receta">
          </div>
          <div class="mb-3">
            <label for="fechaCreacion" class="form-label">Fecha Creación:</label>
            <input type="date" class="form-control" id="fechaCreacion" name="fechaCreacion">
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label">Comentario:</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Ingrese un Comentario"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Generar Receta</button>
        </form>
      </div>
      

</body>
</html>