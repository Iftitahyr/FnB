<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "alpscom";

    $con = mysqli_connect($host, $username, $password, $database);

    if(!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    

?>