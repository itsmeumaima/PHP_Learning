<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning - Working with Numbers</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:linear-gradient(135deg,#667eea,#764ba2);
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
            background:#fff;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 15px 35px rgba(0,0,0,0.2);
        }

        .header{
            background:linear-gradient(135deg,#2c3e50,#3498db);
            color:white;
            text-align:center;
            padding:35px;
        }

        .header h1{
            font-size:36px;
            margin-bottom:10px;
        }

        .header p{
            font-size:18px;
            color:#ecf0f1;
        }

        .content{
            padding:35px;
        }

        p{
            font-size:17px;
            line-height:1.7;
            color:#444;
            margin-bottom:15px;
        }

        ul{
            margin:15px 0 25px 30px;
        }

        li{
            margin-bottom:10px;
            font-size:17px;
            color:#555;
        }

        strong{
            color:#2980b9;
        }

        .section-title{
            margin:30px 0 20px;
            padding-left:12px;
            border-left:6px solid #3498db;
            color:#2c3e50;
            font-size:25px;
        }

        .result{
            background:#f8f9ff;
            border-left:5px solid #3498db;
            padding:15px 20px;
            margin:12px 0;
            border-radius:8px;
            font-size:18px;
            transition:0.3s;
        }

        .result:hover{
            transform:translateX(8px);
            background:#eef5ff;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .value{
            color:#e74c3c;
            font-weight:bold;
        }

        .footer{
            text-align:center;
            padding:18px;
            background:#f4f4f4;
            color:#666;
            font-size:15px;
        }

        @media(max-width:768px){

            body{
                padding:20px;
            }

            .header h1{
                font-size:28px;
            }

            .content{
                padding:20px;
            }
        }

    </style>

</head>
<body>

<div class="container">

    <div class="header">
        <h1>Working with Numbers in PHP</h1>
        <p>Learn basic mathematical operations and built-in number functions in PHP</p>
    </div>

    <div class="content">

<?php

echo "<p>PHP provides many built-in mathematical operators and functions that make calculations simple and efficient. You can perform arithmetic operations, rounding, generate random numbers, find maximum and minimum values, calculate powers, square roots, and much more.</p>";

echo "<p>Some commonly used number operations in PHP include:</p>";

echo "<ul>
        <li><strong>Arithmetic Operations</strong> (+, -, *, /, %)</li>
        <li><strong>Rounding Functions</strong> (round(), ceil(), floor())</li>
        <li><strong>Absolute Value</strong> (abs())</li>
        <li><strong>Power & Square Root</strong> (pow(), sqrt())</li>
        <li><strong>Maximum & Minimum</strong> (max(), min())</li>
        <li><strong>Random Numbers</strong> (rand(), mt_rand())</li>
      </ul>";


echo "<h2 class='section-title'>Arithmetic Operations</h2>";

$num1 = 10;
$num2 = 3;

$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$modulus = $num1 % $num2;

echo "<div class='result'>First Number : <span class='value'>$num1</span></div>";
echo "<div class='result'>Second Number : <span class='value'>$num2</span></div>";

echo "<div class='result'>Addition : <span class='value'>$sum</span></div>";
echo "<div class='result'>Subtraction : <span class='value'>$difference</span></div>";
echo "<div class='result'>Multiplication : <span class='value'>$product</span></div>";
echo "<div class='result'>Division : <span class='value'>$quotient</span></div>";
echo "<div class='result'>Modulus : <span class='value'>$modulus</span></div>";


echo "<h2 class='section-title'>Rounding Functions</h2>";

$floatNum = 5.7;

echo "<div class='result'>Original Number : <span class='value'>$floatNum</span></div>";
echo "<div class='result'>Round() : <span class='value'>" . round($floatNum) . "</span></div>";
echo "<div class='result'>Ceil() : <span class='value'>" . ceil($floatNum) . "</span></div>";
echo "<div class='result'>Floor() : <span class='value'>" . floor($floatNum) . "</span></div>";


echo "<h2 class='section-title'>Absolute Value</h2>";

$negativeNum = -15;

echo "<div class='result'>Original Number : <span class='value'>$negativeNum</span></div>";
echo "<div class='result'>Absolute Value : <span class='value'>" . abs($negativeNum) . "</span></div>";



echo "<h2 class='section-title'>Power & Square Root</h2>";

$base = 4;
$exponent = 3;

echo "<div class='result'>Base Number : <span class='value'>$base</span></div>";
echo "<div class='result'>Exponent : <span class='value'>$exponent</span></div>";
echo "<div class='result'>Power : <span class='value'>" . pow($base, $exponent) . "</span></div>";
echo "<div class='result'>Square Root : <span class='value'>" . sqrt($base) . "</span></div>";



echo "<h2 class='section-title'>Maximum & Minimum</h2>";

$numbers = [5, 10, 2, 8, 3];

echo "<div class='result'>Numbers : <span class='value'>" . implode(", ", $numbers) . "</span></div>";
echo "<div class='result'>Maximum Value : <span class='value'>" . max($numbers) . "</span></div>";
echo "<div class='result'>Minimum Value : <span class='value'>" . min($numbers) . "</span></div>";


?>

    </div>

    <div class="footer">
        🚀 PHP Learning Series | Working with Numbers
    </div>

</div>

</body>
</html>