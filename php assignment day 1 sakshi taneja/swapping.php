<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="swapping.php" method="get">
    Enter first number<input type="text" name="num1">
    Enter second number<input type="text" name="num2">
    <input type="submit" value="swap">
    </form>
    <?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    echo" before swapping: the value of first number:$num1 and second number:$num2<br>";

    $tmp=$num1;
    $num1=$num2;
    $num2=$tmp;
    echo "after swapping: the value of first number:$num1 and second number:$num2";
    

    
    ?>
</body>
</html>