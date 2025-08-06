<?php
include("connection.php");

$con = connection();

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO persona (name, apellido, usuario, clave, email) 
        VALUES ('$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php");
}
?>
