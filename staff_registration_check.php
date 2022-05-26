<?php 
 
require  "config.php";
if(isset($_POST['login']))
{  
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$mobileno=$_POST['sno'];
	$email=$_POST['seid'];
	$pass=$_POST['password'];
	$query=$conn->prepare("insert into staffs (first_name, last_name, moblie_no, email,password) values('$firstname','$lastname','$mobileno','$email','$pass')");
	$query->execute();
	header("location:staff_list.php");



}
?>
