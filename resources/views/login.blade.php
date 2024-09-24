<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Primero se  crea una vista html en la que se asignan las distintas clases  -->
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Bienvenido a Medipac</h1>
  <p>Ingrese sus credenciales de Administrador para iniciar el programa</p> 
</div>
  
<div class="container mt-3">
  <h2>Ingrese su credencial de Administrador</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="User">User:</label>
      <input type="User" class="form-control" id="user" placeholder="Enter User" name="user>
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


</body>
</html>
