<?php

require 'config.php';
session_start();
if(empty($_SESSION['auth'])){
  header("location:login.php");
}
include ('header.php');

$query=$conn->prepare('select * from students');
$query->execute();
$result= $query->fetchall(PDO::FETCH_OBJ);


?>
<div class="container">
  <div class="row">
          <div class="col-sm-12 col-12 p-0 m-auto mt-5">
            <div class="card">
              <div class="card-header">
              <h1 class="text-center">Student List</h1>
            </div>
       <div class="card-body p-0"> 
  <table class="table table-bordered">
      <thead>
           <tr>
             <th>Name</th>
             <th>Mobile No</th>
             <th>Email Id</th>
             <th>Gender</th>
             <th>Action</th>
           </tr>
      </thead>   
       <tbody>
         <?php foreach($result as $col)   {?>
            <tr>
              <td> <?php  echo $col->student_name;?></td>
              <td> <?php  echo $col->mobile_no;?></td>
              <td> <?php  echo $col->email_id;?> </td>
              <td> <?php  echo $col->gender;?></td>
              <td><a href="student_edit.php?myid=<?php echo $col->student_id; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
                   <a href="student_delete.php?delid=<?php echo $col->student_id; ?>"  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>