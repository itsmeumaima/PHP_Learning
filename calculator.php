<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#6a11cb,#2575fc);
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
        }

        .container{
            width:400px;
            background:#fff;
            padding:35px;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            color:#333;
            margin-bottom:25px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
            color:#555;
        }

        input,
        select{
            width:100%;
            padding:12px;
            border:1px solid #ddd;
            border-radius:10px;
            font-size:16px;
            margin-bottom:20px;
            transition:0.3s;
        }

        input:focus,
        select:focus{
            outline:none;
            border-color:#2575fc;
            box-shadow:0 0 8px rgba(37,117,252,.3);
        }

        input[type="submit"]{
            background:#2575fc;
            color:white;
            border:none;
            cursor:pointer;
            font-size:17px;
            font-weight:bold;
            transition:.3s;
        }

        input[type="submit"]:hover{
            background:#1b5fd1;
            transform:translateY(-2px);
        }

        .result{
            margin-top:20px;
            padding:15px;
            background:#f4f8ff;
            border-left:5px solid #2575fc;
            border-radius:10px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
            color:#333;
        }

        .error{
            background:#ffe5e5;
            border-left:5px solid red;
            color:red;
        }
    </style>

</head>
<body>

<div class="container">

    <h1>Simple Calculator</h1>

    <form method="GET" action="">

        <label>Enter First Number</label>
        <input type="number" name="num1" required>

        <label>Enter Second Number</label>
        <input type="number" name="num2" required>

        <label>Select Operation</label>

        <select name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>

        <input type="submit" value="Calculate">

    </form>

    <?php

    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])){

        $num1=$_GET['num1'];
        $num2=$_GET['num2'];
        $operation=$_GET['operation'];

        switch($operation){

            case "add":
                $result=$num1+$num2;
                break;

            case "subtract":
                $result=$num1-$num2;
                break;

            case "multiply":
                $result=$num1*$num2;
                break;

            case "divide":
                if($num2!=0){
                    $result=$num1/$num2;
                }else{
                    $result="Division by zero is not allowed!";
                }
                break;

            default:
                $result="Invalid Operation";
        }

        if(is_numeric($result)){
            echo "<div class='result'>Result = $result</div>";
        }else{
            echo "<div class='result error'>$result</div>";
        }

    }

    ?>

</div>

</body>
</html>