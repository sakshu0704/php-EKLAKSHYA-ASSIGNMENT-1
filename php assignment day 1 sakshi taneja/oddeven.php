<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num;
    for($num=1;$num<=100;$num++)
    {
        if($num%2==0)
        {
          echo $num."<br>";  
        }
        
    } 
    
    ?><br>
    <?php
    $num;
    for($num=1;$num<=100;$num++)
    {
        if($num%2==1)
        {
          echo $num."<br>";  
        }
        
    } 
    
    ?>
</body>
</html>