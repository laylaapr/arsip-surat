<div class="row">
 <div class="col-md-4">  
  </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3>Tambah Admin Baru</h3>
  </div>
	<?php include_once "user/crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal">
   <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control">
   </div>
   <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
   </div>
   <div class="form-group">
    <label>Fullname</label>
    <input type="text" name="fullname" class="form-control">
   </div>
   <div class="form-group">
    <label>Level</label>
    <input type="text" name="level" class="form-control" value="Admin" readonly>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="add"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
	<button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>
