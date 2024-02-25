<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays With Loops</title>
</head>
<body>
    <?php
        $table = array(2,3,4,5,6,7,8,90);
        echo "<h3>With While Loop</h3><br>";
        $i = 0;
        while($i<count($table)){
            echo "$table[$i]<br>";
            $i++;
        }
        echo "<h3>With For Loop</h3><br>";
        for($j=0;$j<count($table);$j++){
            echo "$table[$j]<br>";
        }
        echo "<h3>With Do-While Loop</h3><br>";
        $k=0;
        do{
            echo "$table[$k]<br>";
            $k++;
        }while($k<count($table));
        echo "<h3>With Foreach Loop</h3><br>";
        foreach($table as $value){
            echo "$value<br>";
        }
        echo "<h3>Printing array in reverse</h3><br>";
        for($m=count($table);$m>0;$m--){
            echo "$table[$m]<br>";
        }
    ?>
</body>
</html>