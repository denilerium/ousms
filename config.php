<?php
$hostname="localhost";
$dbname ="school_db";
$userName="root";
$dbPass="";

try{
	  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $userName, $dbPass);
	  //echo "Connect-Successfully";

}
catch(PDOException $e){
	echo $e->getMessage();
}
?>