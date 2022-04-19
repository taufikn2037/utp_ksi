<?php 
require 'koneksi.php';

if (isset($_POST["login"]) ) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	

$user = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	

	$cek = mysqli_num_rows($user);
 

if($cek > 0){
 
	$data = mysqli_fetch_assoc($user);
 
	
	if($data['level']=="admin"){
 
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		
		header("location:admin.php");
 
	
	}else if($data['level']=="user"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		
		header("location:user.php");
 
	
	}}


$error = true;
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php if(isset($error)) : ?>
	<p style="color: red;text-align: center;font-size: 30px;font-style: italic;
	">*username/password salah</p>
	<?php endif; ?>

<div class="container">
	<h1>Login</h1>
	<form action="" method="post">
		
                <label for="username">Username</label><br>
                <input type="text" name="username"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password"><br>

                <button type="submit" name="login">Log in</button>
            </form>
        </div>
</body>
</html>