<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=$_GET["length"];
    $num2=$_GET["width"];
    $areares=$_GET["areares"];
    $area=0;
    if($num1==''&&$num2==''&&$num3==''){
        ?>
        <form action="area.php" method="get"><br>
        length,radius,height<input type="number" name="length"><br>
        width,base<input type="number" name="width"><br>
        areares:<br>
        <input type="radio" name="areares" value="triangle">triangle<br>
        <input type="radio" name="areares" value="circle">circle<br>
        <input type="radio" name="areares" value="rectangle">rectangle<br>
        <input type="radio" name="areares" value="square">square<br>
         <input type="submit" value="calculatearea">
         </form>
         <?php }
         if(!$num1==0){
             if($areares=='triangle'){
                 $area=0.5*$num1*$num2;
                 echo "area of triangle with height $num1 and base $num2 is $area";

             }
             else if($areares=='circle'){
                 $area=($num1**2)*(22/7);
                 echo "area of circle with radius $num1 is $area";
             }
             else if($areares=='square'){
                 $area=$num1*$num1;
                 echo "area of square with length $num1 is $area";
             }
             else{
                 $area=$num1*$num2;
                 echo "area of rectangle with length $num1 is $area";
             }
         }
   ?>
</body>
</html>