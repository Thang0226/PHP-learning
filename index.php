<?php
    $name = "Nguyen Thang";
    $number = 123.456;
    $price = 500;
    $users = ["Thang", "Huy", "Duc"];
    $tax = 4.5*5000;
    $employed = false;
?>
<?=
    "
    Hello, I am $name
    "
    // This is a comment
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <p>This is some html content. I dont know if i can print out this number: <?= $number?></p> <br>
    <?=
    "
    I want to show my user: {$users[0]} <br>
    Your tax is: $tax <br>
    Are you employed? $employed
    "
    // true --> "1", false --> ""
    ?>
    <?php 
        $total = $price * $number;
    ?>
    <?= 
        "Your total is $$total"
    ?>

    <form action="" method="POST" class="login-form my-3">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <p>
        <?= 
            "Username: {$_POST['username']} <br>
            Password: {$_POST['password']}"
        ?>
    </p>
    <form action="" method="POST">
        <label>Math number:</label>
        <input type="number" name="number" required>
        <button type="submit">Submit</button>
    </form>
    <p>
        <?php
            $value = $_POST['number'];
            $result = abs($value);
            $result = $value ** 2; 

            echo"Your result is: {$result}";
        ?>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>