<?php
require  "config.php";
if(isset($_POST['submit']))
{  
	$name=$_POST['cohort_name'];
	$query=$conn->prepare("insert into cohort (name) values('$name')");
	$query->execute();
   header("location:cohort_list.php");

}
?>
