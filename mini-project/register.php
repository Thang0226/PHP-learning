<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Welcome to fakebook</h2>
    <form action="register.php" method="post">
        <label for="username">Username: </label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"><br><br>
        <button type="submit" name="register">Register</button> 
    </form>
</body>
</html>

<?php 
    if (isset($_POST["register"])) {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "INSERT INTO users (username, password) VALUES ('{$username}', '{$password}')";
            // echo $sql;
            try {
                mysqli_query($conn, $sql);
                header("Location: user-list.php");
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
?>