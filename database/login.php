<?php
	require_once 'conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `id` = '$id' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['name']=$fetch['name'];
			$_SESSION['id']=$fetch['id'];
			$_SESSION['email']=$fetch['email'];
			$_SESSION['department']=$fetch['department'];
			$_SESSION['batch']=$fetch['batch'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='../student_home.html'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='../student_login.html'</script>";
		}
		
	}

?>