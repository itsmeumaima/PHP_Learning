<?php

$num1 = "";
$num2 = "";
$operation = "";
$result = "";
$error = "";
$symbol = "";
$operationName = "";

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {

    $num1 = htmlspecialchars(trim($_POST['num1']));
    $num2 = htmlspecialchars(trim($_POST['num2']));
    $operation = htmlspecialchars(trim($_POST['operation']));

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Please enter valid numbers.";
    }

    if ($error == "") {

        switch ($operation) {

            case "add":
                $result = $num1 + $num2;
                $symbol = "+";
                $operationName = "Addition";
                break;

            case "subtract":
                $result = $num1 - $num2;
                $symbol = "-";
                $operationName = "Subtraction";
                break;

            case "multiply":
                $result = $num1 * $num2;
                $symbol = "×";
                $operationName = "Multiplication";
                break;

            case "divide":
                $operationName = "Division";
                $symbol = "÷";

                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $error = "Division by zero is not allowed!";
                }
                break;

            default:
                $error = "Invalid Operation";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, .2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="submit"] {
            background: #2575fc;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background: #1b5fd1;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f4f8ff;
            border-left: 5px solid #2575fc;
            border-radius: 10px;
        }

        .error {
            background: #ffe5e5;
            border-left: 5px solid red;
            color: red;
        }

        .result p {
            margin: 8px 0;
        }

        h3 {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<script>
document.addEventListener("keydown", function(event) {

    const operation = document.getElementById("operation");

    switch (event.key) {

        case "+":
            operation.value = "add";
            break;

        case "-":
            operation.value = "subtract";
            break;

        case "*":
            operation.value = "multiply";
            break;

        case "/":
            event.preventDefault();
            operation.value = "divide";
            break;
    }

});
</script>

<body>

<div class="container">

    <h1>Simple Calculator</h1>

    <form method="POST">

        <label>Enter First Number</label>
        <input type="number" name="num1"
               value="<?php echo $num1; ?>" required>

        <label>Enter Second Number</label>
        <input type="number" name="num2"
               value="<?php echo $num2; ?>" required>

        <label>Select Operation</label>

        <select name="operation" id="operation"required>

            <option value="add"
                <?php if ($operation == "add") echo "selected"; ?>>
                Addition
            </option>

            <option value="subtract"
                <?php if ($operation == "subtract") echo "selected"; ?>>
                Subtraction
            </option>

            <option value="multiply"
                <?php if ($operation == "multiply") echo "selected"; ?>>
                Multiplication
            </option>

            <option value="divide"
                <?php if ($operation == "divide") echo "selected"; ?>>
                Division
            </option>

        </select>

        <input type="submit" value="Calculate">

    </form>

    <?php

    if ($error != "") {

        echo "<div class='result error'>$error</div>";

    } elseif ($result !== "") {

        echo "<div class='result'>";

        echo "<p><strong>First Number:</strong> $num1</p>";
        echo "<p><strong>Second Number:</strong> $num2</p>";
        echo "<p><strong>Operation:</strong> $operationName</p>";

        echo "<hr><br>";

        echo "<h3>$num1 $symbol $num2 = $result</h3>";

        echo "</div>";
    }

    ?>

</div>

</body>
</html>