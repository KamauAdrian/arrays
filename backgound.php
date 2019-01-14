<?php
// $back_colour=array('#000000','#000000','#FFF000','#675AD3','#156DE1') ;
$back_colour=
[
["colour"=>"#000000"],
["colour"=>"#FFF000"],
["colour"=>"#AD3245"],
["colour"=>"#675AD3"],
["colour"=>"#156DE1"],

] ;
$colourpicker = $back_colour[rand(0,count($back_colour)-1)];
// print_r($colourpicker);
$background=$colourpicker['colour'];
// echo $background."<br />";

?>
<!DOCTYPE html>
<html>
<head>
	<title>background</title>
</head>
<body style="background-color: <?php echo $background;?>">
<h1>Changinging the background colour randomly</h1>

</body>
</html>