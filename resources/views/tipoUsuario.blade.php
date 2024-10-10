<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tipo Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Primero se  crea una vista html en la que se asignan las distintas clases  -->
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bienvenido a Medipac</h1>
  <p>Por favor elija el usuario que va a utilizar el sistema</p> 
</div>
  
<div class="container mt-3">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Medico</h5>
            <p class="card-text">Seleccione esta opción si es un Medico.</p>
            <a href="/medico" class="btn btn-primary">Seleccionar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Paciente</h5>
            <p class="card-text">Seleccione esta opción si es un Paciente.</p>
            <a href="/paciente" class="btn btn-primary">Seleccionar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Farmaceutico</h5>
            <p class="card-text">Seleccione esta opción si es un Farmaceutico.</p>
            <a href="/farmaceutico" class="btn btn-primary">Seleccionar</a>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Botón de Cerrar sesión -->
<div class="container mt-5 text-center">
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Cerrar sesión</button>
  </form>
</div>

</body>
</html>