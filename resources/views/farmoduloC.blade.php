<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas - Módulo C</title>

    <!-- Agregar estilos de DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- Agregar jQuery y DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <style>
        body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

.container {
    background: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-bottom: 20px;
}

.table {
    margin-top: 20px;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f2f2f2;
}

.table th {
    background-color: #007bff;
    color: white;
}

.table th, .table td {
    text-align: center;
}

.table td {
    vertical-align: middle;
}

    </style>
</head>
<body>

<div class="container">
    <h2>Lista de Recetas - Módulo C</h2>

    <table class="table table-bordered" id="recetas-table-c">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Fecha de Creación</th>
                <th>Tiempo desde Solicitud</th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">
    $(function() {
        $('#recetas-table-c').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/farmaceutico/moduloC') }}",
            columns: [
                { data: 'id_receta', name: 'id_receta' },
                { data: 'paciente', name: 'paciente' },
                { data: 'medico', name: 'medico' },
                { data: 'fecha_creacion', name: 'fecha_creacion' },
                { data: 'tiempo_solicitud', name: 'tiempo_solicitud' },
            ]
        });
    });
</script>

</body>
</html>
