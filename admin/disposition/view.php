<div class="row">
	<div class="col-md-4">  
	</div>
	<div class="col-md-4">  
		<div class="page-header">
			<h3>Disposition</h3>
		</div>
		<?php
			$id = $_GET['id_disposition'];
			error_reporting(0);
			include "koneksi.php";

					$query = mysqli_query ($koneksi,"select * from disposition where id_disposition='$id' ");
					while ($row = mysqli_fetch_assoc($query))
					{
			?>
			
		
					<div class="form-group">
						<label>Disposition At</label>
						<input type="text" name="disposition_at" value="<?php echo $row['disposition_at']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" value="<?php echo $row['description']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Reply At</label>
						<input type="text" name="reply_at" value="<?php echo $row['reply_at']; ?>"  class="form-control" required>
					</div>
					<div class="form-group">
					<label>Notification</label>
					<input type="text" name="notification" value="<?php echo $row['notification']; ?>" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Status</label>
					<input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>" required>
					</div>
					
			 
	</div>
	<div class="col-md-4">  
	</div>
</div>

<?php }?>