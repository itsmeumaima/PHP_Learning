<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Analyzer</title>

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

        <h1>String Analyzer</h1>

        <form method="post">

            <input
            type="text"
            name="text_val"
            placeholder="Enter a string"
            required
            value="<?php echo isset($_POST['text_val']) ? htmlspecialchars($_POST['text_val']) : ''; ?>">

            <input type="submit" value="Analyze">

        </form>

<?php

if(isset($_POST['text_val'])){

    $user_input = $_POST['text_val'];
    $upper = strtoupper($user_input);
    $lower = strtolower($user_input);
    $length  = strlen($user_input);
    $wc = str_word_count($user_input);
    $reverse = strrev($user_input);
    $trimmed = trim($user_input);
    $first_char = $user_input[0];
    $last_char = $user_input[$length-1];
    $remove_slashes = stripslashes($user_input);
   

?>

<div class="result">

    <h2>Analysis Result</h2>

    <table>

        <tr>
        <td>String Entered</td>
        <td><?php echo $user_input; ?></td>
        </tr>

        <tr>
        <td>Upper Case</td>
        <td><?php echo $upper; ?></td>
        </tr>

        <tr>
        <td>Lower Case</td>
        <td><?php echo $lower; ?></td>
        </tr>

        <tr>
        <td>Length</td>
        <td><?php echo $length; ?></td>
        </tr>

        <tr>
        <td>Word Count</td>
        <td><?php echo $wc; ?></td>
        </tr>

        <tr>
        <td>Reverse</td>
        <td><?php echo $reverse; ?></td>
        </tr>

        <tr>
        <td>First Character</td>
        <td><?php echo $first_char; ?></td>
        </tr>

        <tr>
        <td>Last Character</td>
        <td><?php echo $last_char; ?></td>
        </tr>

        <tr>
        <td>Remove Slashes</td>
        <td><?php echo $remove_slashes; ?></td>
        </tr>

        
</table>

</div>

<?php
}
?>

</div>

</body>
</html>