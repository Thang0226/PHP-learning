<?php
    include "database.php";
    $sql = "SELECT * FROM users";
    $records = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>User list</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Username</th>
        </tr>
        <?php
        if (mysqli_num_rows($records) > 0) {
            $count = 0;
            while ($record = mysqli_fetch_assoc($records)) {
                $count++;
                echo "
                    <tr>
                        <td>{$count}</td>
                        <td>{$record["username"]}</td>
                    </tr>
                ";
            }
        }
        ?>
    </table>
</body>
</html>