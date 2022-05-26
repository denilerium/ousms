
<?php
require 'config.php';
session_start();
if(empty($_SESSION['auth'])){
	header("location:login.php");
}
$id = $_GET['staffid'];
$que = $conn->prepare("select * from staffs where id='$id'");
$que->execute();
$staff = $que->fetch(PDO::FETCH_OBJ);

include ('header.php');
?>
	 <div class="container">
	<div class="row">
          <div class="col-sm-5 m-auto mt-5">
	     <div class="card">
		<div class="card-header bg-primary">
	          <h1 class="text-center text-white">Staff Registration</h1>
	       </div>
		   <div class="card-body p-0">
		      <form action="staff_update.php" method="post"> 
		      	<input  type="hidden" name="staffid" value="<?php echo $id; ?>">
		        <div class="p-3 bg-warning"> 
	                <div class="mb-3 row">
			           <label class="col-sm-3 col-form-label">Name</label>
		                  <div class="col md-4">
                          <input type="text" class="form-control" name="fname" placeholder="First name" value=<?php echo $staff->first_name; ?> >
                          </div>
                          <div class="col md-4">
                          <input type="text" class="form-control" name="lname" placeholder="Last name" value=<?php echo $staff->last_name; ?> >
                          </div>
                    </div>
                    <div class="mb-3 row">
			           <label class="col-sm-3 col-form-label">Mobile no.</label>
		                  <div class="col-sm-9">
	        	          <input type="number" class="form-control" name="sno" value=<?php echo $staff->moblie_no; ?> >
		                  </div>
		            </div>
	                <div class="mb-3 row">
			           <label  class="col-sm-3 col-form-label">Email-Id</label>
			              <div class="col-sm-9">
			              <input type="email" class="form-control" name="seid" 
			              value=<?php echo $staff->email; ?> >
          		          </div>
          	        </div>
          	        <div class="mb-3 row">
					    <label  class="col-sm-3 col-form-label">Password</label>
						   <div class="col-sm-9">
								<input type="password" class="form-control" name="password" required value=<?php echo $staff->password; ?> > 
								</div>
					</div>
          	        
                    <div class="row">
			            <div class="col text-center" class="btn btn-primary">
				         <button class="btn btn-primary" name="login" type="submit">Submit</button>
	                </div>
	            </div>
	       </div>
	  </form>
	  

</body>
</html>