<?php

    $con = mysqli_connect("localhost", "root", "", "mobileapp");

    

    $name = $_POST["name"];

    $username = $_POST["username"];

    $password = $_POST["password"];



    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, password) VALUES (?, ?, ?)");

    mysqli_stmt_bind_param($statement, "siss", $name, $username, $password);

    mysqli_stmt_execute($statement);

    

    $response = array();

    $response["success"] = true;  

    

    echo json_encode($response);

?>
