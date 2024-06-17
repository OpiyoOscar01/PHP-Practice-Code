<?php
      $a=5;
      $b=4;
      $c=1.3;
      $d=3;
       //Arithmetic operations.
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>';
//Assignment operator
 $a+=$b; echo $a. '<br>';
 echo $a-=$b;
 echo $a+=1;
 //increment operator
echo  $d++;
//decrement operator
var_dump(is_float(3));
var_dump(is_int(9.2));
echo is_numeric(23);
$x=null;
echo is_null($x);
//Type conversion
//eg1.Converting string to float.
$strNum='12.34';
$number=(float)($strNum);
var_dump($number);
$num2=(double)($strNum);
var_dump($num2);
//Number functions
echo 'pow(2,3)'.pow(2,3).'<br>';
echo 'round(2.7)'.round(2.9).'<br>';
echo 'round(2.7)'.round(2.1).'<br>';
echo    'ceil(2.8)'.ceil(2.8).'<br>';
echo "floor(2.8)".floor(2.8).'<br>';
echo 'sqrt(16)'.sqrt(16).'<br>';
//Formating numbers
$number1=126686860;
echo number_format($number1,2,',');

