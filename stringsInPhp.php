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
    ?>
</body>
</html>