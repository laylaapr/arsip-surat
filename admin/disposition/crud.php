<?php
error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		$id_mail = $_POST['id_mail'];
		$id_user = $_POST['id_user'];
		$disposition_at = $_POST['disposition_at'];
		$description = $_POST['description'];
		$reply_at = $_POST['reply_at'];
		$notification = $_POST['notification'];
		$status = $_POST['status'];
		
					$query = mysqli_query($koneksi,"INSERT INTO disposition set 
							id_mail='$id_mail', id_user='$id_user', 
							disposition_at='$disposition_at',description='$description',
							reply_at='$reply_at',notification='$notification',status='$status'");
					if($query){
						 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
					}else{
						 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Gagal! ulangi lagi</strong>
						</div>";
					}
}

if(isset($_GET['id_disposition']))
{
	$id   =  $_GET['id_disposition'];
		$del=mysqli_query($koneksi,"DELETE from disposition where id_disposition='$id'");
		if($del)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses Hapus Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses hapus Gagal!</strong>
						</div>";
		}
		
		
		
}
?>