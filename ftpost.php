<?php require_once("includes/db.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Posts</title>
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
		<a href="Basic.html" class="navbar-brand " >PIYUSH.COM</a>


		<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbarcol">
				<span class="navbar-toggler-icon"></span>
		</button>


		<div class="collapse navbar-collapse" style="text-align: center" id="Navbarcol">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="MyProfile.php" class="nav-link"><i class="fas fa-user text-success"></i> My Profile</a>
			</li>
			<li>
				<a href="Dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item">
				<a href="Post.php" class="nav-link">Post</a>
			</li>
			<li>
				<a href="Categories.php" class="nav-link">Categories</a>
			</li>
		
			<li class="nav-item">
				<a href="ManageAdmin.php" class="nav-link">Manage Admins</a>
			</li>
			<li>
				<a href="Comments.php" class="nav-link">Comments</a>
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

<!-- START MAIN BODY-->
<div style="height: 50px "></div>
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

<section class="container py-2 mb-4">
		<div class=row>
			<div class="col-md-12" style="overflow-x:auto" >
			<table class="table" border="5">
			<thead class="thead-dark">
				<tr >
              		<th>#</th>
              		<th>Title</th>
              		<th>Category</th>
              		<th>Date&Time</th>
              		<th>Author</th>
              		<th>Banner</th>
              		<th>Comments</th>
              		<th>Action</th>
              		<th>Live Preview</th>
            	</tr>
        	</thead>
            <?php 
            	global $connectionDB;
            	$sql ="SELECT * FROM posts";
            	$stmt = $connectionDB ->query($sql);
            	while ($DataRows = $stmt->fetch()) 
            	{
            		$Id   	   = $DataRows["id"];
            		$DateTime  = $DataRows["datetime"];
            		$PostTitle = $DataRows["title"];
            		$Category  = $DataRows["category"];
            		$Admin     = $DataRows["author"];
            		$Image     = $DataRows["image"];
            		$Posttext  = $DataRows["post"];
             ?>
             <tbody>
             <tr> 
             		<td><?php echo $Id ;?></td>
            		<td>
            			<?php 
            				if(strlen($PostTitle)>10) 
            				{
            					$PostTitle = substr($PostTitle,0,10)."..";
            					
            				}
            				echo $PostTitle;
            			 ?>	
            		</td>
            		<td><?php echo $Category;?></td>
            		<td><?php echo $Admin;?></td>
            		<td><?php echo $DateTime;?></td>
            		<td><img src="picture/<?php echo $Image;?>" width="80px" heigth="80px"</td>
            		<td>Comments</td>
            		<td>
            			<a href="editpost.php?id=<?php echo $Id;?>"><span class="btn btn-warning">Edit</span></a>
            			<a href="deletepost.php?id=<?php echo $Id;?>"><span class="btn btn-danger">Delete</span></a>
            		</td>
            		<td>
            			<a href="fullpost.php?id=<?php echo $Id;?>"><span class="btn btn-primary">Live preview</span></a>
            		</td>
             </tr>
         	</tbody>
             <?php } ?>
			</table>
		</div>
	</div>
</section>
<!--FOOTER start-->

<footer class=" bg-dark text-white ">
	
	<div class="container">
		<div class="row">
			<div class="col">
			<p class="lead text-center " style="color: white">Theme by|<b>Piyush Ghosh</b>| &copy;---- All rights reserved</p>
		</div>
	</div>
	</div>
</footer>
<!--FOOTER-end-->



















<script src="https://kit.fontawesome.com/be3873b2bb.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
