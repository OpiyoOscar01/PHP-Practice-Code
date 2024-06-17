<?php
//Functions are reusable piece or block of code.
//creating function
function hello()
{
   echo "Hello world.This is Oscar the senior dev." .'<br>';
}

hello();
hello();
hello();
//function with string as an argument
function myName($name){
    echo "My name is $name" .'<br>';
}
myName("John Doe");
myName("Oscar Smith");
myName("John Hannington");
//function to sum two numbers
function sum($a,$b){
    return
        $a+$b;
}
echo sum(3,7) .'<br>';
echo sum(9.7,8) .'<br>';

//function taking many arguments
function numSum(...$numbers){
                   $sum=0;
foreach ($numbers as $num) {
 $sum+=$num;
}
    return $sum;

}

echo numSum(3,7,10,4,9) .'<br>';
//or
function numSum2(...$numbers){

    return   array_reduce($numbers,function($sum,$num){
        return $sum+=$num;
    });
}
echo numSum2(3,7,10,4,9,8) .'<br>';
 