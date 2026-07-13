<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriended Programming Concepts</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 40px;
            color: #333;
        }
        h1{
            text-align: center;
            color: #0f4c81;
            margin-bottom: 30px;
        }
        .card{
            background: white;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,.12);
        }
        h2{
            color: #1565c0;
            border-left: 5px solid #1565c0;
            padding-left: 10px;
        }
        p{
            line-height: 1.7;
        }
        .output{
            margin-top: 15px;
            background: #eef7ff;
            padding: 15px;
            border-left: 5px solid #2196f3;
            border-radius: 8px;
        }
        .code-title{
            color: #444;
            font-weight: bold;
            margin-top: 15px;
        }
        .success{
            color: green;
            font-weight: bold;
        }
        .danger{
            color: red;
            font-weight: bold;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        }

        th{
            background:#1565c0;
            color:white;
            padding:10px;
        }

        td{
            border:1px solid #ddd;
            padding:10px;
        }

        tr:nth-child(even){
            background:#f9f9f9;
        }
    </style>
</head>
<body>

    <h1>PHP Object Oriented Programming (OOP)</h1>

    <!-- ========================================================= -->
    <div class="card">

    <h2>1. Object Functions</h2>

    <p>
    Object functions (methods) define the behavior of an object.
    Here we create a Student class that checks whether a student
    has honors based on GPA.
    </p>

    <?php

    class Student{

        public $name;
        public $major;
        public $gpa;

        function __construct($name,$major,$gpa){
            $this->name=$name;
            $this->major=$major;
            $this->gpa=$gpa;
        }

        function hasHonors(){

            if($this->gpa>=3.5){
                return true;
            }

            return false;
        }

    }

    $student1=new Student("Umaima","Software Engineering",3.8);
    $student2=new Student("Ali","Business",3.2);

    ?>

    <div class="output">

    <table>

    <tr>
    <th>Name</th>
    <th>Major</th>
    <th>GPA</th>
    <th>Honors</th>
    </tr>

    <tr>
    <td><?php echo $student1->name;?></td>
    <td><?php echo $student1->major;?></td>
    <td><?php echo $student1->gpa;?></td>
    <td>

    <?php
    echo $student1->hasHonors()
    ?
    "<span class='success'>Yes</span>"
    :
    "<span class='danger'>No</span>";
    ?>

    </td>
    </tr>

    <tr>
    <td><?php echo $student2->name;?></td>
    <td><?php echo $student2->major;?></td>
    <td><?php echo $student2->gpa;?></td>
    <td>

    <?php
    echo $student2->hasHonors()
    ?
    "<span class='success'>Yes</span>"
    :
    "<span class='danger'>No</span>";
    ?>

    </td>
    </tr>

    </table>

    </div>

    </div>

    <!-- ========================================================= -->

    <div class="card">

    <h2>2. Getter and Setter</h2>

    <p>

    A Getter retrieves private data while a Setter validates data
    before storing it. This helps achieve data encapsulation.

    </p>

<?php

class Movie{

    public $title;

    private $rating;

    function __construct($title,$rating){

        $this->title=$title;

        $this->setRating($rating);

    }

    function getRating(){

        return $this->rating;

    }

    function setRating($rating){

        if(
        $rating=="G" ||
        $rating=="PG" ||
        $rating=="PG-13" ||
        $rating=="R" ||
        $rating=="NR"){

            $this->rating=$rating;

        }
        else{

            $this->rating="NR";

        }

    }

}

$movie=new Movie("Avengers","PG-13");

?>

<div class="output">

<p>

<b>Movie :</b>
<?php echo $movie->title;?>

</p>

<p>

<b>Initial Rating :</b>

<?php echo $movie->getRating();?>

</p>

<?php

$movie->setRating("R");

?>

<p>

<b>Updated Rating :</b>

<?php echo $movie->getRating();?>

</p>

</div>

</div>

<!-- ========================================================= -->

<div class="card">

<h2>3. Inheritance</h2>

<p>

Inheritance allows one class to inherit properties and methods
from another class.

</p>

<?php

class Chef{

    function makeChicken(){

        echo "Chef makes Chicken.<br>";

    }

    function makeSalad(){

        echo "Chef makes Salad.<br>";

    }

    function makeSpecialDish(){

        echo "Chef makes BBQ Ribs.<br>";

    }

}

class ItalianChef extends Chef{

    function makePasta(){

        echo "Italian Chef makes Pasta.<br>";

    }

    function makeSpecialDish(){

        echo "Italian Chef makes Lasagna.<br>";

    }

}

$chef=new Chef();

$italianChef=new ItalianChef();

?>

<div class="output">

<h3>Chef</h3>

<?php

$chef->makeChicken();

$chef->makeSalad();

$chef->makeSpecialDish();

?>

<hr>

<h3>Italian Chef</h3>

<?php

$italianChef->makeChicken();

$italianChef->makePasta();

$italianChef->makeSpecialDish();

?>

</div>

</div>

<!-- ========================================================= -->

<div class="card">

<h2>Summary</h2>

<table>

<tr>

<th>Concept</th>

<th>Description</th>

</tr>

<tr>

<td>Class</td>

<td>A blueprint used to create objects.</td>

</tr>

<tr>

<td>Object</td>

<td>An instance of a class.</td>

</tr>

<tr>

<td>Constructor</td>

<td>Automatically initializes object values.</td>

</tr>

<tr>

<td>Method</td>

<td>A function inside a class.</td>

</tr>

<tr>

<td>Getter</td>

<td>Returns the value of a private variable.</td>

</tr>

<tr>

<td>Setter</td>

<td>Validates and updates private data.</td>

</tr>

<tr>

<td>Inheritance</td>

<td>Allows one class to inherit another class.</td>

</tr>

<tr>

<td>Method Overriding</td>

<td>Child class replaces the parent's implementation.</td>

</tr>

</table>

</div>

</body>
</html>