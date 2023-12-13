<?php
session_start();
?>
<head>

<title> Halaman Login </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
			<br/><br/>
			<h2>LOGIN ADMIN</h2>
			</div>
		</div>
	</div>
	<div class="row">
	
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
			<div class="panel panel-default">
		<div class="panel-body">
			<?php 
include 'koneksi.php';
//menangkap data yang dikirim dari form login

if(isset($_POST["login"])){//jika tombol login di klik
	$username=$_POST["username"];
	$password=md5($_POST["password"]);

	if($username!="" && $password!=""){
		
		// cek kecocokan username dan password
		$em = mysqli_query($con, "select * from user where password = '$password' AND username = '$username'");
		$data = mysqli_fetch_array($em);
		
		if(empty($data)) // username atau password salah
		{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
						Username atau password salah
					</div>";
		}
		else // username dan password cocok
		{	
			$_SESSION["username"]=$data["username"];
			$_SESSION["password"]=$data["password"];
			$_SESSION["nama"]=$data["nama"];
			
			// arahkan ke halaman index pasca login
			echo "<script> alert('selamat datang ".$_SESSION['nama']."'); window.location.href='index.php'; </script>";
		}
	}
	else
	{
		echo "<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismis='alert' aria-hiden='true'>&times;</button>
					Username atau password tidak boleh kosong!
				</div>";
	}
}
?>
		 <form action="" method="POST" enctype="multipart/form-data">
		 <br/>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-tag"></i>Username</span>
				<input type="text" name="username" class="form-control" placeholder="Silahkan Masukan Username"/>
			</div>
			
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i>Password</span>
				<input type="password" name="password" class="form-control" placeholder="Silahkan Masukan Password"/>
			</div>
			
			<center><button type="submit" class="btn btn-primary" name="login"> LOGIN </button></center>
		</form>
		
		</div>
	</div>
</div>
</div>
</div>
</body>