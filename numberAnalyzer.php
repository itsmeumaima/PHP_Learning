<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Analyzer</title>

    <style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }

    body{
        background:#eef2f7;
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
        padding:20px;
    }

    .container{
        width:700px;
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 10px 30px rgba(0,0,0,.15);
    }

    h1{
        text-align:center;
        color:#0d6efd;
        margin-bottom:25px;
    }

    form{
        display:flex;
        gap:10px;
        margin-bottom:30px;
    }

    input[type=number]{
        flex:1;
        padding:12px;
        border:1px solid #ccc;
        border-radius:8px;
        font-size:16px;
    }

    input[type=submit]{
        padding:12px 20px;
        background:#0d6efd;
        color:white;
        border:none;
        border-radius:8px;
        cursor:pointer;
        font-size:16px;
    }

    input[type=submit]:hover{
        background:#0b5ed7;
    }

    .result{
        background:#f8f9fa;
        border-left:6px solid #0d6efd;
        padding:20px;
        border-radius:10px;
    }

    .result h2{
        margin-bottom:15px;
        color:#0d6efd;
    }

    table{
        width:100%;
        border-collapse:collapse;
    }

    td{
        padding:10px;
        border-bottom:1px solid #ddd;
    }

    td:first-child{
        font-weight:bold;
        width:45%;
    }

    .good{
        color:green;
        font-weight:bold;
    }

    .bad{
        color:red;
        font-weight:bold;
    }

    </style>

</head>
<body>

    <div class="container">

        <h1>Number Analyzer</h1>

        <form method="post">

            <input
            type="number"
            name="num"
            placeholder="Enter a number"
            required
            value="<?php echo isset($_POST['num']) ? htmlspecialchars($_POST['num']) : ''; ?>">

            <input type="submit" value="Analyze">

        </form>

<?php

if(isset($_POST['num'])){

    $num = $_POST['num'];

    $square = pow($num,2);
    $cube = pow($num,3);
    $absolute = abs($num);
    $rounded = round($num);
    $random = rand(1,100);

    if($num>=0){
        $sqrt = sqrt($num);
    }
    else{
        $sqrt = "Not defined for negative numbers";
    }

    $type = ($num%2==0) ? "Even" : "Odd";
    $sign = ($num>0) ? "Positive" : (($num<0) ? "Negative" : "Zero");

?>

<div class="result">

    <h2>Analysis Result</h2>

    <table>

        <tr>
        <td>Number Entered</td>
        <td><?php echo $num; ?></td>
        </tr>

        <tr>
        <td>Absolute Value</td>
        <td><?php echo $absolute; ?></td>
        </tr>

        <tr>
        <td>Square</td>
        <td><?php echo $square; ?></td>
        </tr>

        <tr>
        <td>Cube</td>
        <td><?php echo $cube; ?></td>
        </tr>

        <tr>
        <td>Square Root</td>
        <td><?php echo $sqrt; ?></td>
        </tr>

        <tr>
        <td>Rounded Value</td>
        <td><?php echo $rounded; ?></td>
        </tr>

        <tr>
        <td>Random Number (1-100)</td>
        <td><?php echo $random; ?></td>
        </tr>

        <tr>
        <td>Even / Odd</td>
        <td class="good"><?php echo $type; ?></td>
        </tr>

        <tr>
        <td>Positive / Negative</td>
        <td class="<?php echo ($sign=="Negative") ? "bad" : "good"; ?>">
        <?php echo $sign; ?>
        </td>
        </tr>

        <tr>
        <td>Maximum (Number vs 100)</td>
        <td><?php echo max($num,100); ?></td>
        </tr>

        <tr>
        <td>Minimum (Number vs 100)</td>
        <td><?php echo min($num,100); ?></td>
        </tr>

</table>

</div>

<?php
}
?>

</div>

</body>
</html>