<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$i=0;
		for ($i=1;$i<=6;$i++){
			echo "<h$i>Hello World!</h$i>";
		}
	?>
	<?php
		$arr=array("Volvo","BMW","Toyota");
		foreach ($arr as $cars) {
			echo "$cars <br/>";
		}
	?>
</body>
</html>