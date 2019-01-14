<?php


//create an indexed array with the following values: nairobi,kampala,lagos,tokyo,mumbai,london,shangai,bueno aires
//using foreach loop print the values seperated by a comma.
//sort the array then print the values to the browser.
//Add the corresponding countries now in an associative array: Print this out using the country as the key $city is in $country


$cities=array('Nairobi','Kampala','Lagos','Mumbai','London','Shangai','Bueno Aires');
// print_r($city);

sort($cities);

foreach ($cities as $city) {

	echo $city.",  ";
}
echo "<hr />";

$new = [
["country"=>"Kenya","city"=>"Nairobi"],
["country"=>"Uganda","city"=>"Kampala"],
["country"=>"Nigeria","city"=>"Lagos"],
["country"=>"India","city"=>"Mumbai"],
["country"=>"Britain","city"=>"London"],
["country"=>"Chaina","city"=>"Shangai"],
["country"=>"Agentina","city"=>"Bueno Aires"],
];
$all  = $new;
print_r($all);
$cityname = $all['city'];
$countryname = $all['country'];
echo $cityname." is in ".$countryname;






?>
