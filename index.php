<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin:40px;
        }

        .container{
            background:white;
            max-width:700px;
            margin:auto;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h1,h2{
            color:#2c3e50;
        }

        p{
            font-size:18px;
            margin:8px 0;
        }

        strong{
            color:#2980b9;
        }

        hr{
            margin:20px 0;
        }
    </style>
</head>
<body>

<div class="container">

<?php
    echo "<h1>Welcome to PHP Learning</h1>";
    echo "<hr>";
    echo "<h1>Introduction to PHP</h1>";

    echo "<p><strong>PHP (Hypertext Preprocessor)</strong> is a popular server-side scripting language used to create dynamic and interactive websites. Unlike HTML, which only displays static content, PHP can process data, interact with databases, manage user sessions, handle forms, and generate web pages dynamically.</p>";

    echo "<p>PHP code is executed on the <strong>server</strong>, and only the resulting HTML is sent to the user's browser. It is widely used in web development because it is easy to learn, open-source, and works well with databases such as MySQL.</p>";

    echo "<h2>Features of PHP</h2>";
    echo "<ul>";
    echo "<li>Easy to learn and use</li>";
    echo "<li>Open-source and free</li>";
    echo "<li>Runs on multiple operating systems (Windows, Linux, macOS)</li>";
    echo "<li>Can connect to databases like MySQL and PostgreSQL</li>";
    echo "<li>Supports object-oriented programming</li>";
    echo "<li>Used to build dynamic websites and web applications</li>";
    echo "</ul>";

    echo "<hr>";
    echo "<h2>PHP Example</h2>";


    // Variables
    $name = "Umaima Abdul Rauf";
    $age = 20;


    echo "<p>Hello, <strong>$name</strong>!</p>";
    echo "<p>You are <strong>$age</strong> years old.</p>";

    echo "<h2>String Functions</h2>";

    echo "<p><strong>Original String:</strong> $name</p>";
    echo "<p><strong>Lowercase:</strong> " . strtolower($name) . "</p>";
    echo "<p><strong>Uppercase:</strong> " . strtoupper($name) . "</p>";
    echo "<p><strong>String Length:</strong> " . strlen($name) . "</p>";
    echo "<p><strong>First Character:</strong> " . $name[0] . "</p>";
    echo "<p><strong>Last Character:</strong> " . $name[strlen($name)-1] . "</p>";
    echo "<p><strong>Replace:</strong> " . str_replace("Umaima", "Umi", $name) . "</p>";
    echo "<p><strong>Substring (0-6):</strong> " . substr($name, 0, 6) . "</p>";
    echo "<p><strong>Word Count:</strong> " . str_word_count($name) . "</p>";
    echo "<p><strong>Reverse:</strong> " . strrev($name) . "</p>";
    echo "<p><strong>Position of 'Abdul':</strong> " . strpos($name, "Abdul") . "</p>";
    echo "<p><strong>Repeat Name 3 Times:</strong> " . str_repeat($name . " | ", 3) . "</p>";
    echo "<p><strong>Trim Spaces:</strong> '" . trim("   $name   ") . "'</p>";

?>

</div>

</body>
</html>