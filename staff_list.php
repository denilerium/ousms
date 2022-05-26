<?php
require('config.php');
session_start();
if(empty($_SESSION['auth'])){
    header("location:login.php");
}
include ('header.php');

$query=$conn->prepare('select * from staffs');
$query->execute();
$result=$query->fetchall(PDO::FETCH_OBJ);

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-12 p-0 m-auto mt-5">
            <div class="card">
                 <div class="card-header">
                 <h1 class="text-center">Staff List</h1>
                 </div>
            <div class="card-body p-0"> 
  <table class="table table-bordered">
      <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Mobile No</th>
              <th>Email Id</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
      </thead>   
            <tbody>
               <?php foreach($result as $col)   {?>
                 <tr>
                   <td> <?php  echo $col->first_name;?></td>
                   <td> <?php  echo $col->last_name;?></td>
                   <td> <?php  echo $col->moblie_no;?></td>
                   <td> <?php  echo $col->email;?></td>
                   <td> <?php  echo $col->{"password"};?></td>
                   <td><a href="staff_edit.php?staffid=<?php echo $col->id; ?>"class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> </a>
            </tr>
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