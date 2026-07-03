<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures in PHP</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#74ebd5,#9face6);
            padding:40px;
        }

        .container{
            max-width:950px;
            margin:auto;
            background:#fff;
            padding:35px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        h1{
            text-align:center;
            color:#2c3e50;
            margin-bottom:20px;
        }

        h2{
            color:#34495e;
            margin-top:30px;
            margin-bottom:10px;
            border-left:5px solid #3498db;
            padding-left:10px;
        }

        p{
            color:#555;
            font-size:17px;
            line-height:1.7;
            margin-bottom:20px;
        }

        pre{
            background:#2d3436;
            color:#00ff99;
            padding:18px;
            border-radius:10px;
            overflow-x:auto;
            font-size:16px;
            margin-top:10px;
        }

        .output{
            background:#f4f9ff;
            border-left:5px solid #3498db;
            border-right:5px solid #3498db;
            padding:20px;
            border-radius:10px;
            margin-top:15px;
            box-shadow:0 5px 10px rgba(0,0,0,0.08);
        }

        .result{
            margin-top:10px;
            font-size:18px;
            color:#27ae60;
            font-weight:bold;
            line-height:1.8;
        }

        hr{
            margin:35px 0;
            border:none;
            border-top:2px dashed #ccc;
        }

        @media(max-width:768px){
            body{
                padding:20px;
            }

            .container{
                padding:20px;
            }

            pre{
                font-size:14px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Control Structures in PHP</h1>

    <p>
        Control structures determine the flow of execution in a PHP program.
        They allow you to make decisions, repeat tasks, and execute different
        blocks of code based on conditions.
    </p>

    <!-- IF Statement -->
    <h2>1. If Statement</h2>

<pre>
$age = 20;

if($age >= 18){
    echo "You are eligible to vote.";
}
</pre>

    <div class="output">
        <h4>Output:</h4>
        <div class="result">
            <?php
                $age = 20;

                if($age >= 18){
                    echo "You are eligible to vote.";
                }
            ?>
        </div>
    </div>

    <hr>

    <!-- Switch -->
    <h2>2. Switch Statement</h2>

<pre>
$day = "Monday";

switch($day){
    case "Monday":
        echo "Start of the week.";
        break;

    case "Friday":
        echo "Weekend is near!";
        break;

    default:
        echo "Have a nice day!";
}
</pre>

    <div class="output">
        <h4>Output:</h4>
        <div class="result">
            <?php
                $day = "Monday";

                switch($day){
                    case "Monday":
                        echo "Start of the week.";
                        break;

                    case "Friday":
                        echo "Weekend is near!";
                        break;

                    default:
                        echo "Have a nice day!";
                }
            ?>
        </div>
    </div>

    <hr>

    <!-- While Loop -->
    <h2>3. While Loop</h2>

<pre>
$count = 1;

while($count <= 5){
    echo $count . "&lt;br&gt;";
    $count++;
}
</pre>

    <div class="output">
        <h4>Output:</h4>
        <div class="result">
            <?php
                $count = 1;

                while($count <= 5){
                    echo $count . "<br>";
                    $count++;
                }
            ?>
        </div>
    </div>

    <hr>

    <!-- For Loop -->
    <h2>4. For Loop</h2>

<pre>
for($i = 1; $i <= 5; $i++){
    echo "Number: " . $i . "&lt;br&gt;";
}
</pre>

    <div class="output">
        <h4>Output:</h4>
        <div class="result">
            <?php
                for($i = 1; $i <= 5; $i++){
                    echo "Number: " . $i . "<br>";
                }
            ?>
        </div>
    </div>

</div>

</body>
</html>