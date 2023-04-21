<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Library Management System</title>
</head>
<body> -->
<?php include("header.php") ?>
<div class="template bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is Online Library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row ">
		<div class="col-md-4 " id="side_bar" style="background-color:lightblue;">
			<h5 class="pt-3" style="color:blue">Library Timing</h5>
			<ul class="pl-5">
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 8:00 PM</li>
				<li class="timing">(Friday off)</li>
			</ul>
			<h5 style="color:green">What we provide ?</h5>
			<ul>
				<li>Full furniture</li>
				<li>Free Wi-fi</li>
				<li>News Papers</li>
				<li>Discussion Room</li>
				<li>RO Water</li>
				<li>Peacefull Environment</li>
			</ul>
		</div>		
		<div class="col-md-8 bg-white " id="main_content">
			<div class="container">
				<h3 class="pt-5 pb-3 text-center">User Login Form</h3>
				<form action="" method="post">
					<div class="form-group ">
						<label  for="name">Email ID:</label>
						<input type="text" name="email" class="form-control col-md-8" required>
					</div>
					
					<div class="form-group">
						<label for="name">Password:</label>
						<input type="password" name="password" class="form-control" required>
					</div> <br>
					<button type="submit" name="login" class="btn btn-primary">Login</button>
				</form>
			</div>
			<?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
			
	</div>
	<footer class="py-1  bg-dark text-center">			
        <p class=" text-white">Created By <a  href="#">Amanda Reahana Gomes</a> | &copy; 2023 All rights reserved.</p>
	</footer>
</div>
	<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>