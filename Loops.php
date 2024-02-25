<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        echo "<h3>While Loop</h3><br>";
        $i = 0;
        while($i<=10){
            echo "$i<br>";
            $i++;
        }
        echo "<h3>For Loop</h3><br>";
        for($j=0;$j<=10;$j++){
            echo "$j<br>";
        }
        echo "<h3>Do-While Loop</h3><br>";
        $k = 0;
        do{
            echo "$k<br>";
            $k++;
        }while($k<=10);
    ?>
</body>
</html>