<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bc_webnc";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn){
        mysqli_query($conn, "SET NAMES 'UTF8'");
    }
    else{
        echo "ket noi that bai";
    }
?>
