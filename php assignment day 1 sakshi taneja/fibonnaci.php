<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function printFibonacci($num)
    {
        $first =0;
        $second=1;
        echo "Fibonacci series";
        echo $first.''.$second.'';
        for($i=2;$i<$num;$i++){
            $third =$first +$second;
            echo $third;
            $first =$second;
            $second =$third;
        }


    }
    printFibonacci(6);
    ?>
</body>
</html>