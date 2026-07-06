<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Classes and Objects</title>

        <style>
            body{
                font-family:Arial, sans-serif;
                background-color:#f4f4f4;
                margin:0;
                padding:20px;
            }

            .container{
                max-width:800px;
                margin:auto;
                background:white;
                padding:20px;
                border-radius:10px;
                box-shadow:0px 0px 10px rgb(0,0,0,0.2);
            }

            h1{
                color:#2c3e50;
                text-align:center;
            }
            h2{
                color:#34495e;
            }

            .output{
                background:#ecf0f1;
                padding:15px;
                border-left: 5px solid #3498db;
                margin-top:20px;
                border-radius: 5px;
                line-height:1.8;

            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Classes and Objects in PHP</h1>

            <h2>Introduction</h2>
            <p>
                A <strong>Class</strong> is a blueprint for creating objects.
                It contain properties (variables) and methods (functions).
            </p>

            <p>
                An <strong>Object</strong> is an instance of a class.
                Multiple objects can be created from the same class.
            </p>

            <div class="output">
                <?php
                class Student{
                    var $name;
                    var $age;
                    var $department;

                    public function setData($name, $age, $department){
                        $this->name = $name;
                        $this->age = $age;
                        $this->department = $department;
                    }

                    public function getData(){
                        echo "Name: " . $this->name . "<br>";
                        echo "Age: " . $this->age . "<br>";
                        echo "Department: " . $this->department . "<br>";
                    }
                }
                $student1 = new Student();
                $student1->setData("Ali",21,"Computer Science");

                $student2 = new Student();
                $student2->setData("Sara",22,"Mathematics");

                echo "<h3>Student 1 Details:</h3>";
                $student1->getData();

                echo "<h3>Student 2 Details:</h3>";
                $student2->getData();

                ?>
            </div>
        </div>
    </body>
</html>