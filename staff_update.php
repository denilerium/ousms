<?php 
 
require  "config.php";
if(isset($_POST['login']))
{  
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$mobileno=$_POST['sno'];
	$email=$_POST['seid'];
	$pass=$_POST['password'];
	$id=$_POST['staffid'];

	$query= $conn->prepare("update staffs set first_name ='$firstname', last_name ='$lastname', moblie_no ='$mobileno',email='$email',password='$pass' where id='$id'");
	$query->execute();
	header("location:staff_list.php");



}
?>