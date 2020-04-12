<!DOCTYPE html>
<html>
<head>
	<title>Documets</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/st1.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
</head>
<body><!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container" >
		<a href="Basic.php" class="navbar-brand ">PIYUSH.COM</a>


		<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbarcol">
				<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" style="text-align: center" id="Navbarcol">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="MyProfile.php" class="nav-link"><i class="fas fa-user text-success"></i> My Profile</a>
			</li>
			<li class="nav-item">
				<a href="Dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item">
				<a href="Post.php" class="nav-link">Post</a>
			</li>
			<li class="nav-item">
				<a href="Categories.php" class="nav-link">Categories</a>
			</li>
		
			<li class="nav-item">
				<a href="ManageAdmin.php" class="nav-link">Manage Admins</a>
			</li>
			<li class="nav-item">
				<a href="Comments.php?php=1" class="nav-link">Comments</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="Logout.php" class="nav-link">Logout</a>
			</li>
		</ul>
		</div>
	</div>
	
</nav>
<div class="container">
	<div style="height: 40px"></div>
	<div class="row">
		
		 <div class="col-md-12">
         	<h1><i class="fas fa-blog" style="color:#27aae1;"></i> Blog Posts</h1>
         </div>
		<div class="col-lg-3 mb-2">
			<a href="post.php" class="btn btn-primary btn-block"><i class="fas fa-edit"></i>Add new post</a>
		</div>
		<div class="col-lg-3 mb-2">
			<a href="Categories.php" class="btn btn-info btn-block">Add new categories</a>
		</div>
		<div class="col-lg-3 mb-2">
			<a href="Admins.php" class="btn btn-warning btn-block">Add new admin</a>
		</div>
		<div class="col-lg-3 mb-2">
			<a href="Comments.php" class="btn btn-success btn-block">Approve comment</a>
		</div>
	</div>
</div>
<div id="backg">

</div>
<!--FOOTER-->
<footer class="bg-dark text-white">
	
	<div class="container">
		<div class="row">
			<div class="col">
			<p class="lead text-center " style="color: white">Theme by|<b>Piyush Ghosh</b>| &copy;---- All rights reserved</p>
		</div>
	</div>
	</div>
</footer>

















<script src="https://kit.fontawesome.com/be3873b2bb.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>