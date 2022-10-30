<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['name'])){
		header('location:student_login,html');
	}
?>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Course Material Archive</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <hr style="border-top:1px dotted #ccc;" />
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>WELCOME:</h1>
            <?php
				require'database/conn.php';
				$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `name`='$_SESSION[name]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
				echo "<h3 class='text-success'>"."Name:".$fetch['name']."</h2>";
                echo "<h3 class='text-success'>"."ID:".$fetch['id']."</h2>";
                echo "<h3 class='text-success'>"."Email:".$fetch['email']."</h2>";
                echo "<h3 class='text-success'>"."Batch:".$fetch['batch']."</h2>";   
                echo "<h3 class='text-success'>"."Department:".$fetch['department']."</h2>";
			?>
        </div>
    </div>
</body>

</html>