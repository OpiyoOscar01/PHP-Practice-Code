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

$students=['name'=>"Oscar Opiyo",'Program'=>'Bsc.Software Engineering','course'=>['BSE1203','BSE1390','BSE3412']];
foreach ($students as $key=>$value){
    if(is_array($value)){
        $value=implode(", ",$value);
    }
    echo "$key: $value" . '<br>';
}

   //Exploring the concepts of functions.

     function totalAmount(...$amounts){
    $initial=0;
    foreach ($amounts as $amount){
        $initial+=$amount;
         }
    return $initial;
     }  ;
$amounts=[23000,27000,2000];
$transprt=[3000];
   $sum=totalAmount(...$amounts,...$transprt);
echo "Your total cart bill is Ugx $sum".'<br>';


function compute(...$scores){
    $sum = array_reduce($scores, function($carry, $item){
        return $carry + $item;
    }, 0);
    return number_format($sum / count($scores),2);
}

$scores = [89, 78, 90, 88, 87, 85];
$computedScore = compute(...$scores);
echo "Your Average score is $computedScore %" . '<br>';
$number=120003.3222200;
$formattedNum=number_format($number,3);
echo $formattedNum;

echo "Php is very easy to learn."

?>