<?php
	require_once 'conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `admin` WHERE `id` = '$id' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['name']=$fetch['name'];
			$_SESSION['id']=$fetch['id'];
			$_SESSION['email']=$fetch['email'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='../admin_home.html'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='../admin_login.html'</script>";
		}
		
	}

?>