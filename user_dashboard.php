<?php
	session_start();
	function get_user_issue_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$user_issue_book_count = 0;
		$query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_issue_book_count = $row['user_issue_book_count'];
	}
	return($user_issue_book_count);
}
?>
<?php include("header.php") ?>
    <title>User Dashboard</title>
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
	<div class="row" style="min-height: 52vh">
	<div class="col-md-4"></div>
		<div class="col-md-4 ">
			
			<div class="card bg-white" style="width: 300px">
				<h5 class="card-header">Issued Books:</h5>
				<div class="card-body">
					<p class="card-text">No. of Issued Books: <?php echo get_user_issue_book_count();?> </p>
					<a href="view_issued_book.php" class="btn btn-danger" >View Issued Books</a>
				</div>
			</div>
		
		</div>
		
		<div class="col-md-4"></div>
	</div>
<?php include("footer.php") ?>