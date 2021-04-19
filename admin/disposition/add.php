<div class="row">
	<div class="col-md-4">  
	</div>
	<div class="col-md-4">  
		<div class="page-header">
			<h3>Disposition</h3>
		</div>
		<div>
			<?php include "disposition/crud.php"; ?>
		</div>
	
		<?php
			$id = $_GET['id_mail'];
			error_reporting(0);
			include "koneksi.php";

					$query = mysqli_query ($koneksi,"select * from mail where id_mail='$id' ");
					while ($row = mysqli_fetch_assoc($query))
					{
			?>
			<form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
					<div class="form-group">
					<label>Id Mail</label>
					<input type="text" name="id_mail" value="<?php echo $row['id_mail']; ?>" class="form-control" >
					</div>
						
					<div class="form-group">
						<label>Id User</label>
						<input type="text" name="id_user" value="<?php $id_user = $_SESSION['id_user'] ; echo "$id_user" ; ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Disposition At</label>
						<input type="text" name="disposition_at" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Reply At</label>
						<input type="text" name="reply_at"  class="form-control" required>
					</div>
					<div class="form-group">
					<label>Notification</label>
					<input type="text" name="notification" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Status</label>
					<input type="text" name="status" class="form-control" required>
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

<?php }?>