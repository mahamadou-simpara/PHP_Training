<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <?php 
    $a = 0;
    $b = 0;

    if($a > $b){
        echo "$a is greater than $b ";
    }
    elseif ($a == $b) {
        echo "$a is equal $b ";
    }
    else
     {
        echo "$b is greater than $a ";
    }
    ?>
</body>
</html>