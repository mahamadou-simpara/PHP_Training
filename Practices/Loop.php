<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP</title>
</head>
<body>

<?php 
include('Exo1.php')
?>

<?php 
// While
    echo "Loop While" . '<br>';
    $nbr = 5;
    $limit = 11;
    $init = 0;
    while ($init < $limit){
        echo "$nbr * $init = " . ($nbr * $init). '<br>';
        $init++;
    }

    echo "Loop do While" . '<br>';
    // While
    $nbr = 5;
    $limit = 11;
    $init = 0;
    do{
        echo "$nbr * $init = " . ($nbr * $init). '<br>';
        $init++;
    }
    while ($init < $limit);

    echo "Loop for" . '<br>';

    for($i = 0; $i <= 10; $i++){
        $num = 8;
        echo "$num * $i = " . ($num * $i) . '<br>';
    };



    $names = array('Simpara', 'Toure', 'Cisse', 'Diallo');
    
    foreach($names as $name){
        echo $name . '<br/>';
    }

    $prices = array('tomoto' => 23, 'Apple' => 50, 'grape' => 40);

    foreach($prices as $name => $price){
        echo "$name => $price " . '<br/>';
    }
?>
</body>
</html>