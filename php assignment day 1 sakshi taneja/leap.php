<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isLeap($year)
    {
        return(date('L',mktime(0,0,0,1,1,$year))==1);
    }
    for($year=1991;$year<2016;$year++)
    {
        if(isLeap($year))
        {
            echo"$year:Leap year<br/>";
        }
        else{
            echo "$year:Not leap year<br/>";
        }
    }
    ?>
</body>
</html>