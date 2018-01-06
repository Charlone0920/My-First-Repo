<?php
//print_r($_POST);

$user = $_POST['username'];
$pass = $_POST['password'];

if(strlen($user)==0 || strlen($pass)==0){
	// incoplete form data
	header("Location:form.php?error");
}else{
	//read the user
	echo"Welcome $user. I know your password! ";
}
?>