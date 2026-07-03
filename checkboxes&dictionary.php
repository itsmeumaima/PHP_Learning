<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes and Conditional Logic</title>
</head>
<body>

    <h1>Checkboxes in PHP</h1>

    <form method="post" action="">
        <label>
            <input type="checkbox" name="fruits[]" value="Apple"> Apple<br>
            <input type="checkbox" name="fruits[]" value="Banana"> Banana<br>
            <input type="checkbox" name="fruits[]" value="Cherry"> Cherry<br><br>
        </label>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["fruits"])) {

            $fruits = $_POST["fruits"];

            echo "<h3>You selected:</h3>";

            foreach ($fruits as $fruit) {
                echo $fruit . "<br>";
            }

        } else {
            echo "<h3>No fruits selected.</h3>";
        }
    }
    ?>

    <h1>Associative Arrays (Dictionary)</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST["name"]) || !isset($_POST["age"])) {
            echo "<h3>Please fill in both name and age.</h3>";
            exit;
        }
        $name = $_POST["name"];
        $age = $_POST["age"];

        $associativeArray = array(
            "Name" => $name,
            "Age" => $age
        );
        echo "<h3>Associative Array:</h3>";
        foreach ($associativeArray as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
    }    
    else {
        echo "<h3>Please fill in the form.</h3>";
    }
    ?>

</body>
</html>