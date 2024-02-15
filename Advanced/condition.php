<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <?php include('header.php') ?>

    <?php 
    $a = 5;
    $b = 5;
    if($a > $b) {
        echo "$a is greater than $b";
    }elseif($b > $a) {
        echo"$b is greater than $a";
    }else{
        echo "$a is equal to $b";
    }
    ?>
<p>Switch<p>
<?php 
    $a = 5;
    switch($a) {
        case 0:
         echo "$a is equal to 0";
         break;
        case 5:
         echo "$a is equal to 5";
         break;
    }
    ?>
</body>
</html>