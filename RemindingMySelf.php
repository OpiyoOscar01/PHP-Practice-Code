<?php
$person = [
    'name' => null
];
if (!isset($person['name'])) {
    $person['name'] = "Unknown";
} else {
    $person['name'];
}

echo "Your name is $person[name]" . '<br>';

$role = 'xx';
switch ($role) {
    case 'admin':
        echo "Your role is $role\n";
        break;
    case 'user':
        echo "Your role is $role\n";
        break;
    default:
        echo "Not recognised by the system\n";
}

$age = 0;
$loop = true;
while ($loop) {
    echo "Age is $loop<br>";
    if ($age >= 10) {
        $loop = false;
    }
    $age++;
}


$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
foreach ($letters as $letter) {
    echo "Letter $letter" . '<br>';
}

$students = ['name' => "Oscar Opiyo", 'Program' => 'Bsc.Software Engineering', 'course' => ['BSE1203', 'BSE1390', 'BSE3412']];
foreach ($students as $key => $value) {
    if (is_array($value)) {
        $value = implode(", ", $value);
    }
    echo "$key: $value" . '<br>';
}

//Exploring the concepts of functions.

function totalAmount(...$amounts)
{
    $initial = 0;
    foreach ($amounts as $amount) {
        $initial += $amount;
    }
    return $initial;
}

;
$amounts = [23000, 27000, 2000];
$transprt = [3000];
$sum = totalAmount(...$amounts, ...$transprt);
echo "Your total cart bill is Ugx $sum" . '<br>';


function compute(...$scores)
{
    $sum = array_reduce($scores, function ($carry, $item) {
        return $carry + $item;
    }, 0);
    return number_format($sum / count($scores), 2);
}

$scores = [89, 78, 90, 88, 87, 85];
$computedScore = compute(...$scores);
echo "Your Average score is $computedScore %" . '<br>';
$number = 120003.3222200;
$formattedNum = number_format($number, 3);
echo $formattedNum;

echo "Php is very easy to learn.";

$string1 = "Hello";
echo substr($string1, 0, 3);
define("PI", 3.14);
echo PI . "<br>";
function myResult($x, $y)
{
    $result = $x + $y;
    return $result;
}

$computedValue = myResult(2, 3);
echo "The result of the computation is " . $computedValue . "<br>";

function myResult1($x, $y = 12)
{
    $result = $x + $y;
    return $result;
}

$computedValue = myResult1(2);
echo "The result 1 of the computation is " . $computedValue . "<br>";


// pass by value
function valGeek($num)
{
    $num += 2;
    return $num;
}

// pass by reference
function refGeek(&$num)
{
    $num += 10;
    return $num;
}

$n = 10;

valGeek($n);
echo "The original value is still $n \n";

refGeek($n);
echo "The original value changes to" . "<br>";
//Concepts of arrow functions.
//1.With reduce method.
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sum = array_reduce($numbers, fn($carry, $item) => $item + $carry);
echo $sum . "<br>";

$arr = [1, 2, 3, 4, 5, 6, 7];

$sum = array_reduce($arr, fn($carry, $item) => $carry + $item);
echo $sum;
//2.With map method.
$newArray = array_map(fn($n) => $n * 2, $numbers);
echo '<pre>';
var_dump($newArray);
echo '</pre>';
$evenNumber=array_filter($numbers,fn($val)=>$val%2==0);

echo '<pre>';
           var_dump($evenNumber);
echo '</pre>';

$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y;
//Type casting in php
$k=12;
$pp=(double)$y;
echo gettype($pp)."<br>";

class Fruits{
    public function  myValue(){
        return __CLASS__;
    }
}
    $banana=new Fruits();
 echo $banana->myValue();

?>