<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php
echo "<h1>Indexed Arrays</h1>";

//option one(array syntax)
$mixed1 = array('','');
//option two(array syntax)
$mixed1 = ['',''];


//indexed arrays
$mixed = array(45,false,'string','name',90.5);
// print_r($mixed);
echo "Item at position one is " .$mixed[0]."</br>";
echo "Item at position three is " .$mixed[2]."</br>";
echo "Item at the last position is " .$mixed[count($mixed)-1]."</br>";
echo "<hr />";


//nested/multidimentional array
$nested = ['Adrian',array('Rongai',array('codding'))];
print_r($nested);
echo "My name is ".$nested[0]."i come from ".$nested[1][0]." and my hobby is ".$nested[1][1][0];
echo "<hr />";





//associative arrays
//syntax
// $asoc = ["key1"=>"value 1","key2"=>"value 2"];(key1 is the name of the value ie holds the value)
$assoc = array("first_name"=>"Adrian","last_name"=>"Kamau","hobby"=>"Playing Music","best_site"=>"laracasts.com");
// echo "<pre>".print_r($assoc)."</pre>";
echo "My first name  ".$assoc['first_name'];





?>
</body>
</html>
