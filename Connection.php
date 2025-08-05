<?php

function connection (){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud1";

    //medoto

    $connect = mysqli_connect($host,$user,$pass, $db  );
    
    mysqli_select_db($connect,$db );

    return $connect ;


}


?>
