<?php
//Variable declaration
$name="Oscar Opiyo";
$Age=23;
$height=3.87;
$isMale=true;
$Salary=null;
//printing the variables
echo  $name.'<br>';
echo $Age.'<br>'   ;
echo $height.'<br>';
echo $isMale.'<br>';
echo $Salary.'<br>';
//Type of the variable
echo  gettype($name).'<br>';
echo  gettype($Age).'<br>';
echo gettype($height).'<br>';
echo gettype($isMale).'<br>';
echo gettype($Salary).'<br>';
   //Print all information about the variable
var_dump($name);
var_dump($Age);
var_dump(
    $Salary
);
//Changing variable type or name.
$name=true;
echo  $name;
$Salary="Ugx 23000000";
echo $Salary. '<br>';
//Variable checking functions.
var_dump(is_bool($name));
var_dump(is_string($Salary)).'<br>';
echo  is_string($Salary);
//Check if variable is defined.
echo  isset($Salary). '<br>';
echo isset($address).'<br>';

var_dump(isset($school));
//Working with constants.
define('pi',3.14);
echo pi;
var_dump(pi);
defined('pi');
//Php built in constants
echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';
echo  PHP_INT_SIZE.'<br>';

echo "I's amazing really";


