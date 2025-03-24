<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "mysql";
    $conn = null;
    try {
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    } catch (Exception $e) {
        echo "". $e->getMessage();
    }
?>