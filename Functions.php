<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
  <?php
  function printName(){
    echo "Saurabh Digambar Chorge<br>";
  }
  printName();
  echo "<h3>Write a program to print a multiplication table of a number</h3><br>";
  function table($num){
    for($i=1;$i<=10;$i++){
        echo $num * $i."<br>";
    }
  }
  table(5);
  ?>  
</body>
</html>