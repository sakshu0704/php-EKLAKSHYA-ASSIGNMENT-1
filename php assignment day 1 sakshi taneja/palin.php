<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="palin.php" method="get">
    Enter a string:<input type='text'name='str'><br>
    <input type='submit' name='ok'>
    <input type='reset' name='Clear'>
    </form>
     <?php
     $string1=$_GET['str'];
     $stack=array();
     for($i=0;$i<strlen($string1);$i++)
     array_push($stack,$string1[$i]);
     for($i=0;$i<strlen($string1);$i++)
     if(array_pop($stack)!=$string1[$i])
     break;
     if($i==strlen($string1))
     echo "$string1 is palindrome:";
     else
     echo"$string1 is not palindrome:";
     ?>
</body>
</html>