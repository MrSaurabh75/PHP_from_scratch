<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        $str = "My Name is Saurabh Digambar Chorge";
        echo $str."<br>";
        $len = strlen($str);
        echo "The length of string is ".$len."<br>";
        echo "The number of words in in a given string is ".str_word_count($str)."<br>";
        echo "The Reverse String is ".strrev($str)."<br>";
        echo "The position of word 'Saurabh' is ".strpos($str,"Saurabh")."<br>";
        echo "Replace a Word 'My' with 'His' <br>".str_replace("My","His", $str)."<br>";
    ?>
</body>
</html>