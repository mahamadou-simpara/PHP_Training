<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable and Constant</title>
</head>
<body>
<?php
 // Variable 
 $a =5;
 $b =3;
 $c = "PHP5";
 echo $c .' '. '<br>';

 //Constant
 define('Name', 'Simpara') ;

 echo Name .' '. '<br>';
 //How to get the type of your variable
 echo gettype($a).' '. '<br>';
 echo gettype(Name).' '. '<br>';

 //Boolean
 $e = true;
 $f = false;
 echo gettype($e).' '. '<br>';

 echo "$c is the best among all programming"

 ?>


</body>
</html>