<?php
$person=[
    'name'=>null
] ;
if(!isset($person['name'])){
     $person['name']="Unknown";
}  else{
       $person['name'];
}

echo "Your name is $person[name]".'<br>';

   $role='xx';
   switch($role){
       case 'admin':
           echo "Your role is $role\n";
           break;
       case 'user':
           echo "Your role is $role\n";
           break;
       default:
           echo "Not recognised by the system\n";
   }







?>