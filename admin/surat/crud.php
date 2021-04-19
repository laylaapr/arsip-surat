<?php
//error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		
		$id_type = $_POST['id_type'];
		$id_user = $_POST['id_user'];
		$incoming_at = $_POST['incoming_at'];
		$mail_code = $_POST['mail_code'];
		$mail_from = $_POST['mail_from'];
		$mail_to = $_POST['mail_to'];
		$mail_subject = $_POST['mail_subject'];
		$description = $_POST['description'];
		$tanggal = $_POST['mail_date'];
		
		$ekstensi_diperbolehkan	= array('pdf','jpg', 'jpeg');
			$nama = $_FILES['file_upload']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file_upload']['size'];
			$file_tmp = $_FILES['file_upload']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 50044070){			
					move_uploaded_file($file_tmp, 'surat/file/'.$nama);
					$query = mysqli_query($koneksi,"INSERT INTO mail set 
							id_type='$id_type', id_user='$id_user', 
							incoming_at='$incoming_at',mail_code='$mail_code', 
							mail_date='$tanggal', mail_from='$mail_from',
							mail_to='$mail_to',	mail_subject='$mail_subject', 
							description='$description', file_upload='$nama'");
					if($query){
						 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=add_mail' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
					}else{
						 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=add_mail' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Gagal! ulangi lagi</strong>
						</div>";
					}
				}else{
					 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=add_mail' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Gagal! size file besar karna lebih dari 2 Mb</strong>
						</div>";
				}
			}else{
					 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=add_mail' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Gagal! bukan file pdf</strong>
						</div>";
			}
		
		
		
}


if(isset($_GET['deleteid_mail']))
{
	
	$id   =  $_GET['deleteid_mail'];
	$sql = mysqli_query($koneksi," SELECT * FROM mail where id_mail='$id' ");
	$data = mysqli_fetch_array($sql);
	$namafile = $data['file_upload'];
	unlink('surat/file/'.$namafile);
	$del=mysql_query($koneksi,"DELETE from mail where id_mail='$id'");
		
		if($del)
		{
				
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses Hapus Success! </strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=masuk' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses hapus Gagal!</strong>
						</div>";
		}
		
		
		
}