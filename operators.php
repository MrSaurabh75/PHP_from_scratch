<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
        $a = 12;
        $b = 56;
        // Arithmetic Operators
        echo "<h3>Arithmetic Operators</h3><br>";
        echo "The Value of $a + $b is ";
        echo $a+$b,"<br>";
        echo "The Value of $a - $b is ";
        echo $a-$b,"<br>";
        echo "The Value of $a * $b is ";
        echo $a*$b,"<br>";
        echo "The Value of $a / $b is ";
        echo $a/$b,"<br>";
        echo "The Value of $a % $b is ";
        echo $a%$b,"<br>";

        // Assignment Operators
        echo "<h3>Assignment Operators</h3><br>";
        $newa = $a;
        echo "The Value of new variable is ";
        echo $newa,"<br>";
        echo "The Value of += is ";
        echo $newa+=1,"<br>";
        echo "The Value of -= is ";
        echo $newa-=1,"<br>";
        echo "The Value of *= is ";
        echo $newa*=2,"<br>";
        echo "The Value of /= is ";
        echo $newa/=2,"<br>";

        // Comparison Operators
        echo "<h3>Comparison Operators</h3><br>";
        echo "Check $a = $b ";
        echo var_dump($a==$b),"<br>";
        echo "Check $a != $b ";
        echo $a!=$b,"<br>";
        echo "Check $a >= $b ";
        echo var_dump($a>=$b),"<br>";
        echo "Check $a <= $b ";
        echo var_dump($a<=$b),"<br>";

        // Increment-Decrement Operators
        echo "<h3>Increment-Decrement Operators</h3><br>";
        echo "Incrementing $a++ is ";
        echo $a++,"<br>";
        echo "Incrementing ++$a is ";
        echo ++$a,"<br>";
        echo "Decrementing $a-- is ";
        echo $a--,"<br>";
        echo "Decrementing --$a is ";
        echo --$a,"<br>";

        // Logical Operators
        echo "<h3>Increment-Decrement Operators</h3><br>";
        echo "<h4>and (&&)</h4><br>";
        $var1 = (true and true);
        echo var_dump($var1),"<br>";
        $var2 = (true and false);
        echo var_dump($var2),"<br>";
        $var3 = (false and true);
        echo var_dump($var3),"<br>";
        $var4 = (false and false);
        echo var_dump($var4),"<br>";
        echo "<h4>or (||)</h4><br>";
        $var5 = (true or true);
        echo var_dump($var5),"<br>";
        $var6 = (true or false);
        echo var_dump($var6),"<br>";
        $var7 = (false or true);
        echo var_dump($var7),"<br>";
        $var8 = (false or false);
        echo var_dump($var8),"<br>";
        echo "<h4>xor</h4><br>";
        $var9 = (true xor true);
        echo var_dump($var9),"<br>";
        $var10 = (true xor false);
        echo var_dump($var10),"<br>";
        $var11 = (false xor true);
        echo var_dump($var11),"<br>";
        $var12 = (false xor false);
        echo var_dump($var12),"<br>";


    ?>
</body>
</html>