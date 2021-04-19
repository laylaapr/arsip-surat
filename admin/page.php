	<?php
	if (isset($_GET['page'])){
	$page = $_GET['page'];
switch ($page){
	case 'default':
	include "default.php";
	break;
	
	case 'user':
	include "user/view.php";
	break;
	case 'add_user':
	include "user/add.php";
	break;
	case 'edit_user':
	include "user/edit.php";
	break;
	case 'delete_user':
	include"user/crud.php";
	break;
	
	case 'masuk':
	include "surat/view.php";
	break;
	
	case 'keluar':
	include "surat/keluar.php";
	break;
	
	case 'add_mail':
	include "surat/add.php";
	break;
	
	case 'delete_mail':
	include "surat/crud.php";
	break;
	
	case 'disposition':
	include "disposition/add.php";
	break;
	case 'view_disposition':
	include "disposition/view.php";
	break;
	case 'delete_disposition':
	include "disposition/crud.php";
	break;
	
	case 'logout':
	include "logout.php";
	break;
	
	default:
	echo"<center><h3>MAAF, HALAMAN TIDAK DITEMUKAN!</h3></center>";
	break;
	}
	}else{
	include "default.php";
	}
	?>	