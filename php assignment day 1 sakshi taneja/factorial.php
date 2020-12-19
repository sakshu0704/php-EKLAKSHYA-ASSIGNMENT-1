<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="factorial.php" method="get">
    Enter the Number:<br>
    <input type="number"name="number">
    <input type="submit" name="submit"value="submit">
    </form>
    <?php
    if($_GET){
        $fact =1;
        $number =$_GET['number'];
       echo "Factorial of $number:<br>";
       for($i=1;$i<=$number;$i++){
           $fact=$fact*$i;
       } 
       echo $fact."<br>";
    }
    ?>
</body>
</html>