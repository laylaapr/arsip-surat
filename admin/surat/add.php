<div class="row">
	<div class="col-md-4">  
	</div>
	<div class="col-md-4">  
		<div class="page-header">
			<h3>Tambah Surat Baru</h3>
		</div>
		<div>
			<?php include "surat/crud.php"; ?>
		</div>
	
		
			<form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
					<div class="form-group">
					<label>Mail type</label>
					<select class="selectpicker form-control" name="id_type">
						<option value="1" >Surat Masuk</option>
						<option value="2" >Surat Keluar</option>
					</select>
					</div>
						
					<div class="form-group">
						<label>Id User</label>
						<input type="text" name="id_user" value="<?php $id_user = $_SESSION['id_user'] ; echo "$id_user" ; ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Incoming At</label>
						<input type="text" name="incoming_at" class="form-control" placeholder="Please entry format date yyyy-mm-dd hh:mm:ss" required>
					</div>
					<div class="form-group">
						<label>Mail Code</label>
						<input type="text" name="mail_code" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Mail Date</label>
						<input type="text" name="mail_date"  class="form-control" placeholder="Please entry format date yyyy-mm-dd" required>
					</div>
					<div class="form-group">
					<label>Mail From</label>
					<input type="text" name="mail_from" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Mail To</label>
					<input type="text" name="mail_to" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Mail Subject</label>
					<input type="text" name="mail_subject" class="form-control" required>
					</div>
					<div class="form-group">
					<label>Description</label>
					<input type="text" name="description" class="form-control" required>
					</div>
					<div class="form-group">
						<label>File Uploud</label>
						<input type="file" name="file_upload" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="add"> <span class="glyphicon glyphicon-floppy-disk"> Add</span></button>
						<button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
					</div>
			</form>
	</div>
	<div class="col-md-4">  
	</div>
</div>
