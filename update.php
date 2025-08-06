<?php
include("connection.php");

$con = connection();

$id = $_GET["id"];

$sql = "SELECT * FROM persona WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <div class="mb-4">
            <h3>Editar usuario</h3>
        </div>
        <div class="card-body">
            <form action="update_Crud.php" method="post" class="row g-3">
                <input type="hidden" name="id" value="<?=$row['id'] ?>">
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="<?=$row['name'] ?>">
                </div>
                <div class="col-md-4">
                    <input type="text" name="lastname" class="form-control" placeholder="Apellido" value="<?=$row['apellido'] ?>">
                </div>
                <div class="col-md-4">
                    <input type="text" name="username" class="form-control" placeholder="Usuario" value="<?=$row['usuario'] ?>">
                </div>
                <div class="col-md-6">
                    <input type="text" name="password" class="form-control" placeholder="Contraseña" value="<?=$row['clave'] ?>">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Correo" value="<?=$row['email'] ?>">
                </div>
                <div class="col-12 text-center">
                    <input type="submit" value="Editar usuario" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
