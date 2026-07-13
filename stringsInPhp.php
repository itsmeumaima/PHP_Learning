<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
</head>
<body>
    <h1>Strings In PHP</h1>
    <h3>Declaring Strings</h3>
    <?php
    $text = "PHP is a powerful server-side scripting language for making dynamic and interactive Web pages.";
    echo "The sample string is: <br> $text";

    echo "<h3>Concatenation In Strings</h3>";
    echo "<p>Concatenation means joining strings together.</p>";
    echo "<p>PHP uses the . (dot) operator.</p>";

    $first = "PHP is a powerful server-side scripting language for making dynamic and interactive Web pages.";
    $second = "PHP is widely-used, open-source and free.";

    echo $first . " " . $second;

    echo "<p>PHP also uses the .= (dot) operator for concatenation.</p>";
    $first .= " PHP is widely-used, open-source and free.";
    echo $first;

    echo "<h3>Trimming In Strings</h3>";
    echo "<h5>Sometimes strings contain unwanted spaces. trim() -> Removes spaces from both sides.</h5>";
    echo "Original Text is :<pre>    Hello PHP   </pre><br>";
    $text = "   Hello PHP     ";
    echo "The trimmed text is : " . trim($text);

    echo "<h5>ltrim() -> Removes spaces from the left sides.</h5>";
    echo "Original Text is :<pre>    Hello PHP   </pre><br>";
    $text = "   Hello PHP   ";
    echo "The trimmed text is : " . ltrim($text);
    
    echo "<h5>rtrim() -> Removes spaces from the right sides.</h5>";
    echo "Original Text is :<pre>    Hello PHP   </pre><br>";
    $text = "   Hello PHP   ";
    echo "The trimmed text is : ".rtrim($text);

    echo "<h3>Removing Slashes and Other Harmful Characters</h3>";
    echo "<h5>1. stripslashes()</h5>";
    echo "It helps to remove backslashes.<br>";
    $text = "I\\'m learning PHP";
    echo "Original Text is :$text <br>";
    echo "The updated text is : ".stripslashes($text);

    echo "<h5>2. htmlspecialchars()</h5>";
    echo "It used to converts special HTML characters into safe entities to prevent Cross-Site Scripting (XSS).<br>";
    $text = "<script>alert('Hack');</script>";
    echo "The htmlspecialchars output is : ".htmlspecialchars($text);

    echo "<h5>3. strip_tags()</h5>";
    echo "It used to removes HTML tags.<br>";
    $text = "<h1>Hello</h1>";
    echo "The updated text is : ".strip_tags($text);

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
</body>
</html>