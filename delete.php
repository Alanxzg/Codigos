<?php
include("connection.php");

$con = connection();
$id = $_GET['id'];

$sql = "DELETE FROM persona WHERE id = '$id'";
$elim = mysqli_query($con, $sql);

if ($elim) {
    header("Location: index.php");
}
?>
