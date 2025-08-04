<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Edad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Verifica tu edad</h1>
    
    <form method="post">
        <label>Edad:</label>
        <input type="number" name="edad" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["edad"];
        if ($edad >= 18) {
            echo "<p class='mayor'>Mayor de edad</p>";
        } else {
            echo "<p class='menor'>Menor de edad</p>";
        }
    }
    ?>
</body>
</html>
