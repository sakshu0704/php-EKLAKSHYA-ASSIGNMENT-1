<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="reverse.php" method="get">
    Enter a string:<input type="text" name="string">
    <input type="submit" value="submit">
    </form>
   
     <?php
      $string = $_GET["string"];
      if(!$string==''){
       $rev= strrev($string);
       echo "reverse of $string is $rev" ;  
      }
      ?>
</body>
</html>