<?php
$back_colour=[
["colour"=>"#999999"],
["colour"=>"#FF0000"],
["colour"=>"#AD3245"],
["colour"=>"#675AD3"],
["colour"=>"#156DE1"],
["colour"=>"#0000FF"],
["colour"=>"#00FF00"],
["colour"=>"#C0C0C0"]

] ;

$colourpicker = $back_colour[rand(0,count($back_colour)-1)];
// print_r($colourpicker);

$background=$colourpicker['colour'];

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.jokes{
		
			border: 1px solid black;
			margin: 12px auto;
			padding: 20px auto;
			width: 50%;
			height: 50%;
			text-align: center;
		}
	</style>
	<title>Random quote generator</title>
	<link rel="stylesheet" type="text/css" href="css/customs.css">
</head>
<body>
<h1>Generate a random quote every time the browser window reloads</h1>
<?php


// echo "<pre>";
// print_r($background);
// echo "</pre>";

$jokes = [
	["joker"=>"Ephra","joke"=>"Knock knock,<br /> who's there?<br />lettuce. lettuce who?<br /> lettuce in.It's cold out here"],
	["joker"=>"Hodari","joke"=>"Knock knock,<br /> who's there?<br /> kanga. kanga who?<br /> actually it's kangaroo"],
	["joker"=>"Tasha","joke"=>"Knock knock,<br /> who's there?<br />Dozen. Dozen who?<br /> Dozen anyone want to let me in"],
	["joker"=>"jeff","joke"=>"Knock, Knock.<br />Who’s there?<br />Leaf!Leaf who?<br />Leaf the house, you’re not the owner anymore!"],
	["joker"=>"Kevo","joke"=>"Knock, knock!<br />Who’s there?<br />Spell! spell who<br /> W-H-O"],
	["joker"=>"Adrian","joke"=>"Knock, knock!<br />Who’s there?<br />Opportunity!That is impossible.<br /> Opportunity doesn’t come knocking twice!"],
	["joker"=>"Claire","joke"=>"Knock knock.<br />Who's there?<br />Beats.Beats who?<br />Beats me."],
	["joker"=>"martin","joke"=>"Knock knock.<br />Who's there?<br />urine.urine who?<br />Urine trouble if u dont open"],
	["joker"=>"Barbra","joke"=>"Knock knock.<br />Who's there?<br />Icy.Icy who?<br />You see me do you need glasses or something"],
	["joker"=>"Collins","joke"=>"Knock knock.<br />Who's there?<br />Snow.Snow who?<br /> Snow point pretending you dont know me"],
	["joker"=>"Mark","joke"=>"Knock knock.<br />Who's there?<br />Mikey.Mikey who?<br />Mikey got lost, Open up"],
	["joker"=>"Felister","joke"=>"Knock knock.<br />Who's there?<br />Ken.Ken who?<br />Ken i come in"],
	["joker"=>"Zack","joke"=>"Knock knock.<br />Who's there?<br />Alex.Alex who?<br />Alexplain everything once am in"]

];
$jokepicker = $jokes[rand(0,count($jokes)-1)];
// echo "<hr />";
// print_r($jokepicker);
// echo "<hr />";


$jokerName= $jokepicker['joker'];
$jokeDesc= $jokepicker['joke'];

// echo $jokerName;
// echo $jokeDesc;

?>

<blockquote>
	<div class="container jokes" style="background-color: <?php echo $background;?> ">
		<strong><?php echo"&quot;" .$jokeDesc."&quot;"?></strong>
		<br /><i><?php echo"".$jokerName;?></i>
	</div>
	
</blockquote>


</body>
</html>