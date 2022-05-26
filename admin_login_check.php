<?php
 require 'config.php';
 if(isset($_POST['login']))
  {
	
	$userName = $_POST['username'];
	$passWord = $_POST['password'];
	$query = $conn->prepare("select * from admins where user_name='$userName' and password='$passWord'");
	$query->execute();
	$admin = $query->fetch(PDO::FETCH_OBJ);
	if($admin){
	session_start();
		$_SESSION['auth'] = true;
		
    		header("location:index.php");
	}else{
    		header("location:admin_login.php?msg=Invalid login detail");
	}


}
else{
	header("location:admin_login.php");
}


?>
