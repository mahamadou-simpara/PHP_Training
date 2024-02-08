<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

    // Indexed Table
    $array = array('Simpara', 'Toure', 'Cisse', 'Keita');

    echo $array[0] .''. '<br>';// Will Display Simpara;
    
    //Associative Table
    $array2 = array(
        "Name" => "Simpara",
        "FirstName" => "Mahamadou",
        "Age" => 20,
        "City" => "Bamako"
    );

    echo $array2["FirstName"];


    var_dump(5.5);
    ?>
</body>
</html>