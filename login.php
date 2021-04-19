<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
	session_start();
	error_reporting(0);
    include 'admin/koneksi.php';
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = ($_POST['password']);
		
		$tampil = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");
		if (!$tampil){
		echo mysqli_error();
		}
		$cekuser = mysqli_fetch_array($tampil);
		$jumuser = mysqli_num_rows($tampil);
		
		$USERNAME = $cekuser['username'];
		$STATUS   = $cekuser['level'];
		$USER   = $cekuser['id_user'];
		
		if($jumuser > 0 ){
		session_start();
			$_SESSION['username'] = $USERNAME;
			$_SESSION['password'] = $PASSWORD;
			$_SESSION['level']    = $STATUS;
			$_SESSION['id_user']    = $USER;
			
			echo "<script>
			alert('Data Valid!');
			window.location.href='admin/'
			</script>";
		}else	
		{
			echo "<script>
			alert('Data Tidak Valid');
			</script>
			";
		}
	}
    ?>
        
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
				
				<div class="form-group">
					<input type="hidden" class="form-control" name="level" value="<?php echo "Admin"; ?>" >
				</div>
                <input type="submit" class="btn btn-block btn-custom-green" name="submit" value="LOGIN" />
                
                <div class="text-center forget">
                    <p>Forgot Password ?</p>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>