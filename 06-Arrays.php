<?php
/*
//create array
$fruits=["Apple","Banana","Orange"];
//print  array
var_dump($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//Get array element by index
echo  $fruits[1];
//Setting array at a given index
$fruits[3]="Mangoes";
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//Check if array has element at a given index.
echo  isset($fruits[3]).'<br>';//evaluates to true.
echo var_dump(isset($fruits[9]));//evaluates to false(0);
//Append an element to an array.
$fruits[]='Pineapples';
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//Length of array
echo count($fruits);
//Add element at the end of an array.
array_push($fruits,"Guavas");
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//remove an element at the end of an array
array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//Add an element at the beginning of the array
array_unshift($fruits,"Water melon");
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//remove an element from yhe beginning of an array.
array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
//Combine array elements into array string.
echo implode(' ',$fruits);
//print array elements into strings
echo print_r($fruits);
//Check if element exist in an array
echo in_array("apple",$fruits);//Evaluates to true;
//search element index in an array
echo array_search("mangoes",$fruits);
//Merge two arrays
$veges=array("Boo","Otigo");
$CombineArrays=array_merge($fruits,$veges);
echo "<pre>";
var_dump($CombineArrays);
echo "</pre>";
//Or use spread operator
$newArray=[...$fruits,...$veges];
echo "<pre>";
var_dump($newArray
);
echo "</pre>";

//Sorting array elements
sort($newArray);
var_dump($newArray
);
//sorting in reverse order
rsort($newArray);
var_dump($newArray
). '<br>';

//Filter methode with arrays.  (takes array then callback)
$digits=[1,2,3,3,4,5,6,7,8,9];
$even=array_filter($digits,function($digt){
   return $digt%2==0;
});
var_dump($even).'<br>';
echo '<br>';

$odd=array_filter($digits,function($digt){
    return $digt%2!=0;
});
var_dump($odd).'<br>';
  //Array Map (callback,array)
$squares = array_map(fn($value)=>$value*$value,$digits);
echo '<pre>';
var_dump($squares);
echo '</pre>';

//Reduce method of array.
echo array_reduce($digits,fn($firstVal,$nextVal)=>$firstVal+$nextVal);
*/
//Associative arrays  (Objects in PHP)
$person=['name'=>'Oscar','age'=>23,'uni'=>'Makerere'];
echo $person['name'].'<br>';
echo $person['age'].'<br>';
echo  $person['uni'].'<br>';
$person['channel']='OscarCode';
echo  $person['channel'].'<br>';
echo    isset($person['channel']).'<br>';
echo   isset($person['address']).'<br>';
//Printing the keys of the array
  var_dump(array_keys($person)).'<br>';
//printing the values of the array
  var_dump(array_values($person)).'<br>';

  //Sorting associative arrays
ksort($person);//sorting by keys.

krsort($person);//sorting by keys in reverse order;
asort($person);//sorting by values in ascending order;
arsort($person);//sorting by values in reverse order.
//Two dimensional arrays (i.e array of objects)
$toDoItems=[
    ['item1'=>'Wash','status'=>'True/false'],
    ['item1'=>'Wash','status'=>'True/false'],
    ['item1'=>'Wash','status'=>'True/false']
]  ;

echo '<pre>';
var_dump($toDoItems);
echo '</pre>';
/*

$letters = ['A', 'E', 'Q', 'K', 'B'];
$numbers = [11, 2, 3, 43, 15];
echo array_search(4, $numbers);
$alphanumeric = array_merge($numbers, $letters);
echo '<pre>';
var_dump($alphanumeric);
echo '</pre>';
$AlphaNumeric = [...$numbers, ...$letters];
echo '<pre>';
var_dump($AlphaNumeric);
echo '</pre>';
sort($alphanumeric);
echo '<pre>';
var_dump($alphanumeric);
echo '</pre>';
rsort($alphanumeric);
echo '<pre>';
var_dump($alphanumeric);
echo '</pre>';
$values = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$even = array_filter($values, function ($value) {
    return $value % 2 == 0;
});
echo '<pre>';
var_dump($even);
echo '</pre>';
$odd = array_filter($values, function ($value) {
    return $value % 2 != 0;
});
echo '<pre>';
var_dump($odd);
echo '</pre>';
$squares = array_map(function ($value) {
    return pow($value, 2);
}, $values);

echo '<pre>';
var_dump($squares);
echo '</pre>';

$cubes=array_map(function($value){return pow($value,3);},$values);
                                                             echo '<pre>';

          var_dump($cubes);
echo
'</pre>';
     $sum=array_reduce($values,fn($sum,$value)=>$sum+$value,0);
     echo $sum.'<br>';

     //Objects in php i.e associative arrays.
$student=['name'=>'Mike','college'=>'CoCis','age'=>23];
echo $student['name'].'<br>';
echo '<pre>';
            var_dump(array_keys($student));
echo '</pre>';
echo '<pre>';
var_dump(array_values($student));
echo '</pre>';
ksort($student);//sorting by keys.

echo '<pre>';
var_dump(array_keys($student));
echo '</pre>';
krsort($student);//sorting by keys in reverse order;

echo '<pre>';
var_dump(array_keys($student));
echo '</pre>';
asort($student);//sorting by values in ascending order;
echo '<pre>';
var_dump(array_values($student));
echo '</pre>';
arsort($student);
echo '<pre>';
var_dump(array_values($student));
echo '</pre>';

$toDoItems=[
    ['item1'=>'Wash','status'=>'True/false'],
    ['item1'=>'Wash','status'=>'True/false'],
    ['item1'=>'Wash','status'=>'True/false']
]  ;

echo '<pre>';
var_dump($toDoItems);
echo '</pre>';

echo $toDoItems[0]['item1'].'<br>';

*/



