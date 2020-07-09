<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>


<?php
  

// 8 types of variables: like in java --integer, float, boolean, null, array, object, +resource
// declaring variavles: starts with a letter, 

$name ='Alesya';
$age = 10;
$isWoman = true;

// printing variables:
echo $name . '<br>';
echo $age . '<br>';
echo $isWoman . '<br>';

// printing type of a variable:
echo gettype($name) . '<br>';
// pring the whole variable:
var_dump($name, $age, $isWoman);

// var checking:
var_dump(is_string($age));

// check is var is defined:
var_dump(isset($address));
var_dump(isset($name)) . '<br>';

// constant
define('pi', 3.14);
echo pi;
// check if const is defined:
defined('pi');

// php built in constant
// echo PHP_INT_MAX;

//  php numbers----------------------------------------------

$a = 5;
$b = 4;
$c = 1.2;

echo $a + $b;
echo $a - $b . '<br>';
// decrement
echo $a--;
echo --$a;
echo --$a . '<br>';
// number conversion
$strNumber = '12.21';
$number = (float)$strNumber;
var_dump($number) . '<br>';

// strings --------------------------------------
$theName = "Alesya";
$hello = "hello $name";
$hello2 = 'hello' . $name;
echo $hello . '<br>';
echo $hello2 . '<br>';

// string concatination
echo "Hello " . " Alesya";



?>


</body>
</html>