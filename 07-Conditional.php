<?php
$age=25;
//if condition
if($age==25){ echo "You are 25" .'<br>';
}
//else statement
if($age<25){
    echo "You are still young".'<br>';
}  else{
    echo "You are old enough".'<br>';
}
$salary=1000;
//if condtion1 and condition2
if($age<25 && salary<1000){
    echo "You are young and not so rich!".'<br>';
} else{
    echo "You are old and also rich!" .'<br>';
}
//if condtion1 and condition2
if($age==25 || salary==1000){
    echo "You are just got lucky!".'<br>';
}     else{
    echo "You were not lucky enough to become wealthy!" .'<br>';
}
//else if statements
$age=18;
if($age>18){
    echo "You are above 18 years." .'<br>';
} elseif ($age==18){
    echo "You are 18" .'<br>';
}   else{
    echo "You are less than 18 years." .'<br>';
}
// ternary if
echo $age<20?  "You are young.".'<br>' : "You are old." .'<br>';
   //eg2
//Note:We can also have nested ternary operator
$salary=500000;
echo $salary< 500000?"You are a low income earner" .'<br>': "You may be a high income earner" .'<br>';
//Null coalescing operator
$myage=$age?$age:12;      //This will evaluate to  true.
echo $myage .'<br>';
$address=isset($address)?$address:"We shall consider the current location." .'<br>';
echo $address;
//Null coalsecing assignment operator since PHP 7.4
       $person=[
           'name'=>'Mark'
       ] ;
       if(!isset($person)){
           $person['name']="Anonymous";
       }   else{
           $person['name'];
       }

       echo $person['name'] .'<br>';
       //short hand way
$person['name']??="Anonymous";
echo $person['name'] .'<br>';
//switch statements
$role='admin';
switch ($role){
    case 'admin':
        echo "You are admin".'<br>';
        break;
        case 'user':
            echo "You are user".'<br>';
            break;
    default:
        echo "You are not recognised with any role." .'<br>';
}