<?php
//create simple strings.
$hello = "Hello World!";
echo "Uganda is saying $hello";
echo "<br>";
echo  'Uganda is saying '.$hello.'<br>';
//String concatenation
echo 'hello'.' world!';
//String functions
$String ="Uganda is the Pearl of Africa.The Country is blessed with abundant natural beauty.";
echo  strlen($String).'<br>';
echo strtoupper($String).'<br>' ;
echo strtolower($String).'<br>';
echo trim($String).'<br>';
echo rtrim($String).'<br>';
echo ucfirst($String).'<br>';
echo lcfirst($String).'<br>';
echo ucwords($String).'<br>';
echo ucwords($String).'<br>';
$num3=123;
$num4=13898;

echo str_pad($num3,8,"0",STR_PAD_LEFT).'<br>';
echo str_pad($num4,8,"0",STR_PAD_LEFT).'<br>';
$longtext="
  The source of the nile.
  It's an amazing place.
  It's in the Pearl Of Africa.
  It's in Uganda.
  That's lake victoria.
";


echo  nl2br($longtext).'<br';











?>

