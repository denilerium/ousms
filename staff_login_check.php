<?php
require 'config.php';
if(isset($_POST['login']))
{
	
	$userEmail = $_POST['email'];
	$passWord = $_POST['password'];

	
	$query = $conn->prepare("select * from staffs where email='$userEmail' and password='$passWord'");
	$query->execute();
	$staff = $query->fetch(PDO::FETCH_OBJ);
	if($staff){
		session_start();
		$_SESSION['auth'] = true;
		header("location:index.php");
	}else{
		header("location:staff_login.php?msg=Invalid login detail");
	}


}
else{
	header("location:home.php");
}


?>