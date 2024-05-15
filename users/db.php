<?php

    $con = mysqli_connect("thiensql.mysql.database.azure.com","thiensql","123999Aa@","kapetann");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
