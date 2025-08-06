<?php
include("connection.php");

$con = connection();
$sql = "SELECT * FROM persona";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud con Bootstrap</title>

    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">CRUD de Usuarios</h1>

        <!-- Formulario -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Agregar nuevo usuario</div>
            <div class="card-body">
                <form action="insertar_Crud.php" method="post" class="row g-3">

                    <div class="col-md-6">
                        <input type="text" name="name" placeholder="Nombre" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="lastname" placeholder="Apellido" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="username" placeholder="Usuario" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="password" placeholder="Contraseña" class="form-control" required>
                    </div>

                    <div class="col-12">
                        <input type="email" name="email" placeholder="Correo" class="form-control" required>
                    </div>

                    <div class="col-12 text-center">
                        <input type="submit" value="Agregar Usuario" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabla -->
        <div class="card">
            <div class="card-header bg-secondary text-white">Usuarios Registrados</div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Clave</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($query)): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['apellido'] ?></td>
                                <td><?= $row['usuario'] ?></td>
                                <td><?= $row['clave'] ?></td>
                                <td><?= $row['email'] ?></td>

                                 <td> <a href="update.php?id=<?=$row['id'] ?>" class="btn btn-sm btn-warning">Editar</a></td>

                            <td> <a href="delete.php?id=<?=$row['id'] ?>" class="btn btn-sm btn-danger">Eliminar</a></td>






                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
