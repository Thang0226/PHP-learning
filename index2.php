<?php
    $name = "Nguyen Thang";
    $number = 123.456;
    $price = 500;
    $users = ["Thang", "Huy", "Duc"];
    $tax = 4.5*5000;
    $employed = false;

    // Can use isset() and empty() to check values of Variables (~ in JS)

    // key-value pairs can be used in Associative Arrays
    $capitals = [
        "USA" => "Washington D.C.",
        "Vietnam" => "Hanoi",
        "Japan" => "Tokyo",
        "China" => "Beijing"
    ];
    $capitals["India"] = "New Delhi";
    echo"Capital of Vietnam is: {$capitals['Vietnam']} <br>";
    foreach ($capitals as $key => $value) {
        echo "Capital of $key is: $value <br>";
    }

    $countries = array_keys($capitals);
    foreach ($countries as $country) {
        echo "Country: $country <br>";
    }
    echo "<br>";
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
<body class="container my-3">

    <form action="" method="POST" class="login-form my-3">
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>
        </div>
        <button type="submit">Find capital city</button>
    </form>
    <p class="my-2">
        <?php
            $selectedCountry = $_POST["country"];
            foreach ($capitals as $key => $value) {
                if ($key == $selectedCountry) {
                    echo "Capital of $key is: $value";
                    break;
                }
            }
        ?>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>