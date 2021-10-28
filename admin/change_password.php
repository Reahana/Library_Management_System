<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard-Profile</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
			<span class="welcome"><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span>
			<span  class="welcome"><strong>Email: <?php echo $_SESSION['email'];?></strong></span>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is Library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="container">
			<form action="update_password.php" method="post">
				<div class="form-group mb-3">
					<label>Enter Current Password:</label>
					<input type="password" name="old_password" class="form-control">
				</div>
				<div class="form-group mb-3">
					<label>Enter New Password:</label>
					<input type="password" name="new_password" class="form-control">
				</div> <br>
				<button type="submit" name="update" class="btn btn-warning">Update Password</button>
			</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
	<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>