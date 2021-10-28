<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard- Catagories</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
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
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E8F6EF">
	<div class="container-fluid">
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link " >Dashboard</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Book</a>
				<div class="dropdown-menu">
					<a href="add_book.php" class="dropdown-item">Add New Book</a>
					<a href="manage_book.php" class="dropdown-item">Manage Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Category</a>
				<div class="dropdown-menu">
					<a href="add_cat.php" class="dropdown-item">Add New Category</a>
					<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Author</a>
				<div class="dropdown-menu">
					<a href="add_author.php" class="dropdown-item">Add New Author</a>
					<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav>
<br>
	<span><marquee>This is Library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from category";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['cat_name'];?></td>
							<td>
							<button class="btn btn-warning" name=""><a style="text-decoration:none ; color:black"href="edit_cat.php?cid=<?php echo $row['cat_id'];?>">Edit</a></button>
								<button class="btn btn-danger" name=""><a style="text-decoration:none ; color:white" href="delete_cat.php?cid=<?php echo $row['cat_id'];?>">Delete</a></button>
							</td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
	<script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>