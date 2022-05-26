<?php
require  "config.php";
session_start();
if(empty($_SESSION['auth'])){
	header("location:login.php");
}
$id = $_GET['myid'];
$que = $conn->prepare("select * from students where student_id='$id'");
$que->execute();
$student = $que->fetch(PDO::FETCH_OBJ);


include ('header.php');

$query=$conn->prepare('select * from cohort');
$query->execute();
$cohort= $query->fetchall(PDO::FETCH_OBJ);

?>


<div class="container">
	<div class="row">
		<div class="col-sm-5 m-auto mt-5">
			<div class="card">
				<div class="card-header bg-primary">
					<h1 class="text-center text-white">Student Form</h1>
				</div>
				<div class="card-body p-0">
					<form action="student_update.php" method="post"> 
						<input  type="hidden" name="myid" value="<?php echo $id; ?>">
						<div class="p-3 bg-warning"> 
							<div class="mb-4 row">
								<label class="col-sm-3 col-form-label">Name</label>
								<div class="col-sm-9">
									<input type="text"  class="form-control" name="name"  value="<?php echo $student->student_name; ?>">
								</div>
							</div>

							<div class="mb-4 row">
								<label class="col-sm-3 col-form-label">Mobile No.</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="number" value="<?php echo $student->mobile_no; ?>">
								</div>
							</div>
							<div class="mb-4 row">
								<label  class="col-sm-3 col-form-label">Email Id</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" name="email" required value="<?php echo $student->email_id; ?>">
								</div>
							</div>
							<div class="row ">
								<div class="col ">
									<label name="gender">Gender</label>
									<div>
										<input type="radio" id="male" value="Male" name="gender" <?php echo $student->gender =="Male" ? "checked":"" ?> >
										<label >Male</label>
									</div>
									<div>
										<input type="radio" id="female" value="Female" name="gender" required <?php echo $student->gender == "Female" ? "checked":"" ?> >
										<label>Female</label>
									</div>
								</div>
								<div class="col">
									<label>Cohort</label>
									<select name="cohort_id" required>
										<option value="">Select</option>
										<?php foreach($cohort as $col)   {?>
											<option value="<?php  echo $col->id;?>"
												<?php echo $student->cohort_id == $col->id ? "selected":"" ?>><?php  echo $col->{"name"};?>
											</option> 
										<?php }?>
									</select>

								</div>
							</div>


							<div class="row mt-5">
								<div class="col text-center" class="btn btn-primary">
									<button class="btn btn-primary" name="login" type="submit">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</body>
				</html>