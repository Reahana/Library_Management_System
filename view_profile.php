<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		$address = $row['address'];
	}
?>

<?php include("header.php") ?>
    <title>User Profile</title>
    </head>
<body>

<div class="template bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
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
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span><marquee>This is Library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="container py-3 bg-white">
			<form>
				<div class="form-group mb-2">
					<label>Name:</label>
					<input type="text" class="form-control" value="<?php echo $name;?>" disabled>
				</div>
				<div class="form-group mb-2">
					<label>Email:</label>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
				</div>
				<div class="form-group mb-2">
					<label>Mobile:</label>
					<input type="text" class="form-control" value="<?php echo $mobile;?>" disabled>
				</div>
				<div class="form-group mb-2">
					<label>Address:</label>
					<textarea rows="3" cols="40" disabled="" class="form-control"><?php echo $address;?></textarea>
				</div>
			</form>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
<?php include("footer.php") ?>