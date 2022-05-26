<?php
require'config.php';
session_start();
if(empty($_SESSION['auth']))
{
	header("location:admin_login.php");
} 
 include('header.php');
?>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-4 m-auto mt-5">
				<div class= "card">
					<div class="card-header bg-primary">
						<h1 class="text-center"> Add Cohort</h1>	
					</div>
					<div class="card-body bg-warning">
						<form action="cohort_check.php" method="post">
							<div class="row mt-3">
							<label class="col-sm-3 col-form-label">Name</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="cohort_name">
							</div>	
							</div>
							<div class="row mt-5 mb-3">
							<div class="col text-center" class="btn btn-primary">
								<button name="submit" type="submit">Add</button>
							</div>
						</div>
							
						</form>
						
					</div>

					
				</div>
				
			</div>
			
		</div>
	</div>

</body>
</html>