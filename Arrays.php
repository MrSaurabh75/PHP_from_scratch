<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <?php
        $lan = array("Python","PHP","NodeJS","C","C++");
        echo $lan[0]."<br>";
        echo $lan[1]."<br>";
        echo $lan[2]."<br>";
        echo $lan[3]."<br>";
        echo $lan[4]."<br>";
        // echo $lan[5]; gives error
        echo count($lan)."<br>";
    ?>
</body>
</html>