<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Hello World</title>
</head>
<body>
<form action = "dashboard.php" method = "post">
<h1>Login</h1>
<?php
if( isset($_GET['error']) ){

}
?>
<p>Username:
<br/><input type = "text" name = "username" /></p>
<p>Password:
<br/><input type = "password" name = "password" /></p>
<p>
<input type = "submit" value = "Login" />
<input type = "reset" value = "clear" />
</p>
</form>
</body>
</html>