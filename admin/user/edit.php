
<?php
$id = $_GET['id_user'];
error_reporting(0);
include "koneksi.php";

		$query = mysqli_query ($koneksi,"select * from user where id_user='$id' ");
		while ($row = mysqli_fetch_assoc($query))
		{
?>
<div class="row">
 <div class="col-md-4">  
  
 </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3>Edit Admin Baru</h3>
  </div>
	<?php include_once "user/crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal">
  <input type="hidden" name="id" value="<?php echo $row['id_user']; ?>" class="form-control">
   <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control">
   </div>
   <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control">
   </div>
   <div class="form-group">
    <label>Fullname</label>
    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control">
   </div>
    
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
 
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>

<?php }?>
