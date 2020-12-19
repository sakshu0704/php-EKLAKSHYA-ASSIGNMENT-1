<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="stud.php" method="get">
    marks1<input type="text" name="marks1">
    marks2<input type="text" name="marks2">
    marks3<input type="text" name="marks3">
    <input type="submit" value="submit">
    </form>
    <?php

    $marks1=$_GET["marks1"];
    $marks2=$_GET["marks2"];
    $marks3=$_GET["marks3"];
    $avg=($marks1+$marks2+$marks3)/3;
    if(!$marks1==''||!$marks2==''||!$marks3==''){
        if($avg>=90){
            echo" A grade";
        }
     else if($avg>=80&&$avg<90){
         echo "B grade";
     }   
     else if($avg>=70&&$avg<80){
         echo"C grade";
     }
     else{
         echo "F grade not good ";
     }
    }
    ?>
</body>
</html>