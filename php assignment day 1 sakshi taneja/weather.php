<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="weather.php" method="get">
  <select name="choice">
  <option value="Winter">Winter</option>
  <option value="summer">Summer</option>
  <option value="Rainy">Rainy</option>
  <option value="windy">Windy</option>
  </select>
  <input type="submit" value="Suggest">

  </form>
  <?php
   $choice= $_GET["choice"];
   switch($choice){
       case 'Winter':
        echo "Hot soup and sleep";
        break;
        case 'summer':
            echo "Enjoy icecream";
            break;
         case 'Rainy':
             echo "Hot coffee with Samosa";
                break;
        case 'windy':
         echo "Enjoy playing";
             break;
         default:
            echo' Choose a choice';


        }  
    ?>
</body>
</html>