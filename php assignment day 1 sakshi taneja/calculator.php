<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    $first_num =$_POST['first_num'];
    $second_num= $_POST['second_num'];
    $operator=$_POST['operator'];
    $result='';
    if(is_numeric($first_num)&& is_numeric($second_num)){
        switch($operator){
            case "Add":
                $result=$first_num+$second_num;
                break;
                case "subtract":
                    $result=$first_num-$second_num;
                    break; 
                case "Multiply":
                        $result=$first_num*$second_num;
                        break;  
                case "divide":
                        $result=$first_num / $second_num;
                            break;            
        }
    }
    ?>
    <body>
    <h1>PHP -MINI CALCULATOR</h1>
    <form action="calculator.php" method="post">
    <p><input type="number" name="first_num" id="first_num" required="required" 
    value="<?php echo $first_num;?>"/><b>First Number</b></p>
    <p><input type="number" name="second_num" id="second_num" required="required" 
    value="<?php echo $second_num;?>"/><b>Second Number</b></p>
    <p>
    <input readonly="readonly" name="result" value="<?php echo $result;?>"><b>Result</b></p>

    <input type="submit" name="operator" value="Add"/>
    <input type="submit" name="operator" value="subtract"/>
    <input type="submit" name="operator" value="Multiply"/>
    <input type="submit" name="operator" value="divide"/>

    </form>
   

</body>
</html>