<?php
// Variables
$age = 20;
$price = 99.99;
$large = 2.5e3;

// Calculations
$a = 20;
$b = 6;

// Increment and Decrement
$x = 5;
$increment = $x + 1;
$decrement = $x - 1;

// Pre and Post Increment
$pre = 5;
$preResult = ++$pre;

$post = 5;
$postFirst = $post++;
$postSecond = $post;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            margin:30px;
        }

        .container{
            width:800px;
            margin:auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            color:#2c3e50;
        }

        h2{
            color:#0d6efd;
            margin-top:25px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:10px;
        }

        table,th,td{
            border:1px solid #ccc;
        }

        th{
            background:#0d6efd;
            color:white;
        }

        th,td{
            padding:10px;
            text-align:left;
        }
    </style>

</head>
<body>

<div class="container">

<h1>PHP Numbers Example</h1>

<h2>1. Numbers in PHP</h2>

<table>
<tr>
    <th>Variable</th>
    <th>Value</th>
</tr>

<tr>
    <td>Integer (Age)</td>
    <td><?php echo $age; ?></td>
</tr>

<tr>
    <td>Float (Price)</td>
    <td><?php echo $price; ?></td>
</tr>

<tr>
    <td>Scientific Notation</td>
    <td><?php echo $large; ?></td>
</tr>

</table>


<h2>2. Making Calculations</h2>

<table>

<tr>
    <th>Operation</th>
    <th>Result</th>
</tr>

<tr>
    <td>Addition</td>
    <td><?php echo $a + $b; ?></td>
</tr>

<tr>
    <td>Subtraction</td>
    <td><?php echo $a - $b; ?></td>
</tr>

<tr>
    <td>Multiplication</td>
    <td><?php echo $a * $b; ?></td>
</tr>

<tr>
    <td>Division</td>
    <td><?php echo $a / $b; ?></td>
</tr>

<tr>
    <td>Modulus</td>
    <td><?php echo $a % $b; ?></td>
</tr>

<tr>
    <td>Exponent</td>
    <td><?php echo $a ** 2; ?></td>
</tr>

</table>


<h2>3. Built-in Numeric Functions</h2>

<table>

<tr>
    <th>Function</th>
    <th>Output</th>
</tr>

<tr>
    <td>abs(-15)</td>
    <td><?php echo abs(-15); ?></td>
</tr>

<tr>
    <td>round(5.67)</td>
    <td><?php echo round(5.67); ?></td>
</tr>

<tr>
    <td>ceil(5.2)</td>
    <td><?php echo ceil(5.2); ?></td>
</tr>

<tr>
    <td>floor(5.9)</td>
    <td><?php echo floor(5.9); ?></td>
</tr>

<tr>
    <td>max(10,50,25)</td>
    <td><?php echo max(10,50,25); ?></td>
</tr>

<tr>
    <td>min(10,50,25)</td>
    <td><?php echo min(10,50,25); ?></td>
</tr>

<tr>
    <td>rand(1,100)</td>
    <td><?php echo rand(1,100); ?></td>
</tr>

<tr>
    <td>sqrt(81)</td>
    <td><?php echo sqrt(81); ?></td>
</tr>

</table>


<h2>4. Increment and Decrement</h2>

<table>

<tr>
    <th>Operation</th>
    <th>Result</th>
</tr>

<tr>
    <td>Increment (++): 5 → 6</td>
    <td><?php echo $increment; ?></td>
</tr>

<tr>
    <td>Decrement (--): 5 → 4</td>
    <td><?php echo $decrement; ?></td>
</tr>

<tr>
    <td>Pre Increment (++x)</td>
    <td><?php echo $preResult; ?></td>
</tr>

<tr>
    <td>Post Increment (x++) First Output</td>
    <td><?php echo $postFirst; ?></td>
</tr>

<tr>
    <td>Post Increment Final Value</td>
    <td><?php echo $postSecond; ?></td>
</tr>

</table>

</div>

</body>
</html>