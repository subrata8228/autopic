<?php require_once("includes/db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/st1.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
</head>
<body><!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
	<div class="container" >
		<a href="Basic.php" class="navbar-brand ">PIYUSH.COM</a>


		<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbarcol">
				<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" style="text-align: center" id="Navbarcol">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="#" class="nav-link"><i class="fas fa-user text-success"></i> Home</a>
			</li>
			<li>
				<a href="#" class="nav-link">About us</a>
			</li>
			<li class="nav-item">
				<a href="blog.php" class="nav-link">Blog</a>
			</li>
			<li>
				<a href="#" class="nav-link">Contect us</a>
			</li>
		
			<li class="nav-item">
				<a href="#" class="nav-link">Feature</a>
			</li>
			
		</ul>
		<ul class="navbar-nav ml-auto">
			<form class="form-inline d-none d-sm-block" action="blog.php" method="GET">
				<input class="form-control " type="text" name="Search" placeholder="Search Here" vlaue="">
				<button  class="btn btn-primary" name="searchbutton" >Go</button>
			</form>
		</ul>
		</div>
	</div>
	
</nav>
<div style="height:70px;"></div>
<div class="container">
	<div class="row">
		<div class="col-sm-8" style="min-height: 40px;">
			<?php

				if(isset($_GET["searchbutton"]))
				{
					$Search = $_GET["Search"];
					$sql = "SELECT * FROM posts WHERE 
							datetime LIKE :search OR 
							title 	 LIKE :search OR 
							category LIKE :search OR 
							post     LIKE :search";

					$stmt = $connectionDB -> prepare($sql);
					$stmt -> bindValue(':search','%'.$Search.'%');
					$stmt -> execute();

				}	
				else
				{
					$sql ="SELECT * FROM posts ORDER BY id DESC";
					$stmt= $connectionDB->query($sql);
				}	

				while($DataRows=$stmt->fetch())
				{
					$Id 	   =$DataRows["id"];
					$Datetime  =$DataRows["datetime"];
					$Title 	   =$DataRows["title"];
					$Catergory =$DataRows["category"];
					$Author    =$DataRows["author"];	
					$Image     =$DataRows["image"];
					$Post      =$DataRows["post"];
			 ?>

			 <div class="card" style="background:black;margin-bottom: 10px;">
			 	<div class="card-body" style="color:white">
			 		<img src="picture/<?php echo htmlentities($Image)?>" style="max-height: 450px" class="img-fluid card-img-top" s>
			 		<h3 class="card-title"><?php echo htmlentities($Title); ?></h3>
			 		<small class="text-muted">Written by <?php echo htmlentities($Author); ?> on <?php echo htmlentities($Datetime); ?></small>
			 		<span style="float:right" class="badge">comments 20</span>
			 		<hr>
			 		<p class="card-text">
			 			<?php 
			 				if(strlen($Post)>70)
			 				{
			 					$Post = substr($Post,0,70)."...";
			 				}
			 				echo $Post;
			 			?>
			 		</p>
			 		<a href="fullpost.php?id=<?php 	echo $Id; ?>" style="float:right">
			 			<span class="btn btn-info">Read more >></span>
			 		</a>
			 	</div>
			 </div>
			 <?php } ?>
		</div>
		<div class="col-sm-4" style="min-height: 40px;background:green">
			
		</div>
	</div>
</div>
<div style="height:15px;"></div>
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