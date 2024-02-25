<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <?php
        echo "<h3>If-Else Statements</h3><br>";
        echo "<h5>Write a PHP program to check wheather the strings are equal or not</h5><br>";
        $str1 = "Saurabh";
        $str2 = "Saurabh";
        if($str1 == $str2){
            echo "Strings are equal<br>";
        }
        else{
            echo "Strings are not equal<br>";
        }
        echo "<h5>Write a PHP program to check wheather the result of student is pass or fail.</h5><br>";
        $marks = 67;
        if($marks >=35 && $marks <= 100){
            echo "Pass";
        }
        else if($marks <35){
            echo "Fail";
        }
        else{
            echo "Invalid Marks";
        }
        echo "<h5>Write a PHP program to check wheather the given number is zero, greater than zero or less than zero.</h5><br>";
        $var = -2;
        if($var == 0){
            echo "Number is equal to zero";
        }
        else if($var >= 0){
            echo "Number is greater than zero";
        }
        else if($var <= 0){
            echo "Number is less than zero";
        }
    ?>
</body>
</html>