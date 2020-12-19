<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arms.php" method="get">
    Enter a number:<input type="number" name="number">
    <input type="submit" value="submit">
    </form>
     <?php
    if($_GET)
    {
        $_GET['number'];
        $a=$number;
        $sum=0;

        while($a!=0){
            $rem =$a%10;
            $sum =$sum+($rem*$rem*$rem);
            $a =$a/10;

        }
        if($number ==$sum){
            echo "yes $number is armstrong number";
        }else
        {
            echo "$number is not an armstrong number";
        }
    }

    ?>
</body>
</html>