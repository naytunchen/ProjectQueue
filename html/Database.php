<?php
    // Create connection crednetials
    $db_host = 'localhost';
    $db_name = 'project_queue';
    $db_user = 'root';
    $db_pass = 'ProjecT';

    // Create mysqli object
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Error Handler
    if($mysqli->connect_error) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

?>
