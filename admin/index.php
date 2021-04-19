<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
	echo "<script>
			alert('Anda Bukan Admin!');
			window.location.href='../login.php'
			</script>";
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Pengarsipan Surat</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="../js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?page=default">DATA SURAT</a>
        </div>
		<div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?page=default">HOME</a></li>
            <li><a href="<?php $status = $_SESSION['level']; if($status != 'superadmin') { echo "#";} 
			else { echo "index.php?page=user";}?>">USER</a></li>
            <li class="dropdown">
              <a href="index.php?page=masuk" class="dropdown-toggle" data-toggle="dropdown">SURAT<b class="caret"></b></a>
              <ul class="dropdown-menu">
				<li><a href="index.php?page=masuk">SURAT MASUK</a></li>
				<li><a href="index.php?page=keluar">SURAT KELUAR</a></li>
              </ul>
            </li>
			<li><a href="index.php?page=add_mail">Tambah Surat</a></li>
			<li><a href="index.php?page=logout">LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
        

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
	<div id="headerwrap">
	    <div class="container">
			<div class="row" id="isipage">
				<div class="col-md-12 ">
				<?php include_once "page.php"; ?>		
				</div>
				 
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

	<!-- *****************************************************************************************************************
	 SERVICE LOGOS
	 ***************************************************************************************************************** -->
	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 				<div class="col-md-4">
 					
 				</div>		 				
	 		</div>
	 	</div><! --/container -->
	 </div><! --/service -->
	 
	<!-- *****************************************************************************************************************
	 PORTFOLIO SECTION
	 ***************************************************************************************************************** -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/retina-1.1.0.js"></script>
	<script src="../js/jquery.hoverdir.js"></script>
	<script src="../js/jquery.hoverex.min.js"></script>
	<script src="../js/jquery.prettyPhoto.js"></script>
  	<script src="../js/jquery.isotope.min.js"></script>
  	<script src="../js/custom.js"></script>

  </body>
</html>
