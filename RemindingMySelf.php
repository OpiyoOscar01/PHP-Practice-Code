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



?>