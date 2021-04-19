<?php
#error_reporting(0);
include "koneksi.php";
//tambah data
if(isset($_POST['add']))
{
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$level = $_POST['level'];
		$sql = mysqli_query ( $koneksi," INSERT INTO user set username='$username', fullname='$fullname', password='$password', level='$level' ");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses tambah Success!</strong>
						</div>";
		}
}

//tambah edit
if(isset($_POST['edit']))
{
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		$sql = mysqli_query ( $koneksi," UPDATE  user set username='$username', fullname='$fullname', password='$password' where id_user ='$id ' ");

		if($sql)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses edit Success!</strong>
						</div>";
		}
}
//tambah delete
if(isset($_GET['deleteid_user']))
{
	$id   =  $_GET['deleteid_user'];
		$del=mysqli_query($koneksi,"DELETE from user where id_user='$id'");
		if($del)
		{
				 echo" <div class='alert alert-success alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses Hapus Success!</strong>
						</div>";
		}else
		{
				 echo" <div class='alert alert-danger alert-dismissable'>
						  <a href='index.php?page=user' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						  <strong>Proses hapus Gagal!</strong>
						</div>";
		}
		
		
		
}
?>