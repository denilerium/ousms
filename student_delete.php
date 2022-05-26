<?php
require 'config.php';
session_start();
if(empty($_SESSION['auth'])){
  header("location:login.php");
}

$id = $_GET['delid'];
$data = $conn->prepare("delete from students where student_id='$id'");
$data->execute();
header('location:student_list.php');
  ?>