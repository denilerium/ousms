<?php 
 require  "config.php";
if(isset($_POST['login']))
{  
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$cohortid=$_POST['cohort_id'];
	$myid=$_POST['myid'];

	$query = $conn->prepare("update students set student_name='$name', mobile_no='$number', email_id='$email', gender='$gender', cohort_id='$cohortid' where student_id='$myid'");

	
	$query->execute();
	header("location:student_list.php");



}