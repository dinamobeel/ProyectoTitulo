<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacéutico - Selección de Módulo</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Selecciona un Módulo</h2>
    
    <div class="row text-center">
        <!-- Módulo A -->
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Módulo A</h5>
                    <p class="card-text">Módulo de mayor prioridad. Procesar recetas urgentes.</p>
                    <a href="{{ route('farmoduloA') }}" class="btn btn-primary">Seleccionar Módulo A</a>
                </div>
            </div>
        </div>
        
        <!-- Módulo B -->
        <div class="col-md-4">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title">Módulo B</h5>
                    <p class="card-text">Módulo de prioridad media. Procesar recetas en tiempo estándar.</p>
                    <a href="{{ route('farmoduloB') }}" class="btn btn-warning">Seleccionar Módulo B</a>
                </div>
            </div>
        </div>

        <!-- Módulo C -->
        <div class="col-md-4">
            <div class="card border-secondary">
                <div class="card-body">
                    <h5 class="card-title">Módulo C</h5>
                    <p class="card-text">Módulo con menor prioridad. Procesar recetas no urgentes.</p>
                    <a href="{{ route('farmoduloC') }}" class="btn btn-secondary">Seleccionar Módulo C</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Agregar Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
