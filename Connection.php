<?php

function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud1";

    $connect = mysqli_connect($host, $user, $pass, $db);

    return $connect;
}
?>
