<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php
    define('PI',3.14);//Constant

        echo "<h3>Data Types in PHP</h3><br>";
        echo "Integer : ";
        $varInt = 123;
        echo $varInt."<br>";
        echo "String : ";
        $varStr = "Saurabh Digambar Chorge";
        echo $varStr."<br>";
        echo "Float : ";
        $varFlo = 123.456;
        echo $varFlo."<br>";
        echo "Boolen<br>";
        $varBol  = true;
        echo var_dump($varBol)."<br>";
        echo "Array<br>";
        $varArr = array(1,23,4,5,6,7,8,9);
        echo var_dump($varArr)."<br>";
        echo "The value of PI is ".PI."<br>";
        echo "Object<br>";
    ?>
</body>
</html>