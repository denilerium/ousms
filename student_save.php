<?php 
 require  "config.php";
if(isset($_POST['login']))
{  
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$cohortid=$_POST['cohort_id'];
	$query=$conn->prepare("insert into students (student_name,mobile_no,email_id,gender,cohort_id) values('$name','$number','$email', '$gender',  '$cohortid')");
	$query->execute();
	header("location:student_list.php");



}