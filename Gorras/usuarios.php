<?php 
include "include/conecta.php";
include "include/consultas.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dark.css">
    <link rel="stylesheet" href="css/pace.css">
    <script src="js/jquery.js"></script>
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row mt-2">
            <h2 class="display-6 text-center">Lista de Usuarios</h2>
        </div>
        <div class="d-2 justify-content-center table-responsive">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre completo</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php while ($linea = $econsulta -> fetch_assoc()) { ?>
      <td><?php echo $linea['nombre'];?></td>
      <td><?php echo $linea['correo_electronico'];?></td>
      <td><?php echo $linea['contrasena'];?></td>
    </tr>
    <?php }?>
    <tr>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>