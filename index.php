<?php 
session_start();
if(empty($_SESSION['auth'])){
	header("location:login.php");
}
include'header.php';
require 'config.php';

//Total students query
$query1 = $conn->prepare('select count(student_id) as totalStudents from students');
$query1->execute();
$query1 = $query1->fetch(PDO::FETCH_OBJ);
$totalStudents = $query1->totalStudents;

//get male students count
$query2 = $conn->prepare('select count(student_id) as totalMale from students where gender="Male"');
$query2->execute();
$query2 = $query2->fetch(PDO::FETCH_OBJ);
$totalmaleStudents = $query2->totalMale;

//get female students count
$query3 = $conn->prepare('select count(student_id) as totalFemale from students where gender="Female"');
$query3->execute();
$query3 = $query3->fetch(PDO::FETCH_OBJ);
$totalFemaleStudents = $query3->totalFemale;

//Get cohort wise data
$query3 = $conn->prepare('SELECT count(b.student_id) as total, a.name FROM `cohort` a LEFT JOIN students b on a.id=b.cohort_id GROUP by b.cohort_id');
$query3->execute();
$corohts = $query3->fetchAll(PDO::FETCH_OBJ);


?>
<div class="container">
	<h1>Student managment report:</h1>
	<div class="row mt-5">
		<div class="col-sm-4">
			<div class="box_border">
				<h4>Total Students</h4>
			<h2><?php echo $totalStudents; ?></h2>
			</div>
			
		</div>
		<div class="col-sm-4">
			<div class="box_border">
				<h4>Total Male Students</h4>
			<h2><?php echo $totalmaleStudents;?></h2>
			</div>
		</div>
		<div class="col-sm-4 ">
			<div class="box_border">
				<h4>Total Feale Students</h4>
			<h2><?php echo $totalFemaleStudents;?></h2>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<h2>Cohort wise students</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Cohort Name</th>
					<th>Students</th>
				</tr>
			</thead>
			<tbody>
				<?php
foreach ($corohts as $row) {?>
	<tr>
		<td><?php echo $row->name;?></td>
		<td><?php echo $row->total;?></td>
	</tr>
<?php }
				?>
			</tbody>
		</table>
	</div>
</div>