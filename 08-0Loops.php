<?php
//       while(true){
//           //do something:This is an infinite while loop.
//       }

//While loop with a counter
$counter=0;
while ($counter<10){
    echo "Counter is $counter<br>";
    $counter++;
}
$age=0;
$loop=true;
while($loop){
    echo "Age is $loop<br>";
    if($age>=10){
        $loop=false;
    }
    $age++;
}
//do while loop
$num=0;
do{
   echo "Number is $num<br>";
   $num++;
} while ($num<10);
//for loop
for($i=1;$i<10;$i++){
    echo "Customer number $i" .'<br>';
}

//for each loop.
$fruits=["Apple","Banana","Orange"];
foreach($fruits as $fruit){
    echo $fruit."<br>";
}

//iterating over associative arrays.
$person=['name'=>'Oscar','age'=>20,'hobbies'=>['reading','programming']];
foreach($person as $key=>$value){
    if($key==='hobbies') break;
    echo $key .'<br>';
}