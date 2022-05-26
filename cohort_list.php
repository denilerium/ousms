<?php
require'config.php';
session_start();
if(empty($_SESSION['auth'])){
	header("location:login.php");
}
 include('header.php');

 $query=$conn->prepare('select * from cohort');
 $query->execute();
 $list=$query->fetchall(PDO::FETCH_OBJ);

?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mt-5 ml-auto m-auto p-0">
				<div class="card">
					<div class="card-header">
						<h1 class="text-center">Cohort List</h1>
					</div>
					<div class="card-body p-0">
						<table class= "table table-bordered text-center">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($list as $col) {?>
								<tr>
									<td><?php echo $col->name;?></td>
								</tr>
							<?php } ?>
							</tbody>
							
						</table>
						
					</div>	
					
					
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>