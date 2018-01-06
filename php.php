<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Hello World</title>
</head>
<body>
	<?php
	echo "Hello World";
	$x=5;
	$y=10;
	
	function myTest()
	{
	global $x,$y;
	$y = $x + $y;
	}
	
	myTest(); //run function
	echo$y; //output
	echo '<br />';
	print_r($GLOBALS);
	echo '<br />';
	$txt1 = "Hello World";
	$txt2 = "1234";
	echo "$txt1 $txt2";
	for($x=0;$x<7;$x++)
	{
			echo "<h$x>Hello World</h$x>";
	}
	{
	$arr = array("one","two","three");
	foreach($arr as $value){
		echo "Value".$value."<br />";
	}
	}
	
	{
	$cars = array("Volvo","BMW","Toyota");
	foreach($cars as $cars1){
		echo "Cars".$cars1."<br />";
	}
	}
	
	
	?>
</body>
</html>