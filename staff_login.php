<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Staff Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 m-auto mt-5">
				<div class="card">
					<div class="card-header bg-primary ">
						<h1 class="text-center text-white">Staff Login</h1>
					</div>
					<div class="card-body p-0">
						<form action="staff_login_check.php" method="post"> 
							<div class="p-3 bg-warning  "> 
								<div class="mb-3 row">
									<label class="col-sm-4 col-form-label">Email</label>
									<div class="col-sm-8">
										<input type="text"  class="form-control" name="email" required>
									</div>
								</div>
								<div class="mb-5 row">
									<label  class="col-sm-4 col-form-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control" name="password" required>
									</div>
								</div>
								<div class="row">
									<div class="col text-center">
										<button class="btn btn-primary" name="login" type="submi">login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>




		</body>
		</html>