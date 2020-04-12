<?php require_once("includes/db.php");?>
<?php require_once("includes/function.php");?>
<?php require_once("includes/session.php");?>
<?php $sqp = $_GET["id"]; ?>
<?php 
	if(isset($_POST["submit"]))
	{
			global $connectionDB;

			$sql ="DELETE FROM posts WHERE id='$sqp'"; 

			$Execute=$connectionDB -> query($sql);
			if($Execute)
			{
				$_SESSION["SuccessMessage"]="Record deleted Successfully.";
				Redirect_to("post.php");
			}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Post</title>
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
		<a href="Basic.php" class="navbar-brand " >PIYUSH.COM</a>


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
				<a href="ManageAdminqq.php" class="nav-link">Manage Admins</a>
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
<div style="height: 70px "></div>
<header class=" py-3" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="color: orange"> <i class="far fa-edit"></i><b> Delete Post</b></h2>
			</div>
		</div>
	</div>
	
</header>

<section class="container">
	<div class="row" >
		<div class=" offset-lg-1 col-lg-10 ">
			
			<div>
				<?php echo ErrorMessage();?>
				<?php echo SuccessMessage();?>

				<?php 
				global $connectionDB;
				$sql ="SELECT * FROM posts WHERE id='$sqp'";
				$stmt =$connectionDB->query($sql);
				while($DataRows =$stmt->fetch())
				{
					$updatetitle    = $DataRows["title"];
					$updatecategory = $DataRows["category"];
					$updateimage    = $DataRows["image"];
					$updatepost     = $DataRows["post"];
				}
				?>
			</div>
			<form class="" action="deletepost.php?id=<?php echo $sqp; ?>" method="POST" enctype="multipart/form-data">
				<div class="card bg-dark text-white">
					
					<div class="card-body ">
						<div class="form-group">
							<label for="Posttitle" style="color: yellow"> Post Title:</label>
							<input disabled class="form-control" type="text" name="ctgtitle" id="Posttitle" placeholder="TYPE YOUR POST HERE" value="<?php echo $updatetitle;?>">
						</div>
						<div class="form-group">
							<span style="color: yellow" >Existing Category:</span>
							<div style="height:5px;"></div>
							<span class="form-control"> <?php echo $updatecategory;?> </span>
							<br>
						</div>

						<div class="form-group">
							<label for="Postarea" style="color: yellow"> Post:</label>
							<textarea disabled class="form-control" id="Postarea" name="Postdesc" rows="10">
								<?php echo $updatepost; ?>
							</textarea>
						</div>
						<div class="form-group">
							<span style="color: yellow" >Existing Image:</span>
							<img src="picture/<?php echo $updateimage;?>" wdith="100px" height="100px;">
							<br>
						</div>
						<div class="row" >
							<div class="col-lg-6 ">
								<button type="submit" class="btn btn-warning btn-block" name="back" style="color:black">Back to Dashboard</button>
							</div>
							<div style="height: 45px;"></div>
							<div class="col-lg-6">
								<button type="submit" class="btn btn-danger btn-block" name="submit" style="color:black">Delete Post</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<div style="height: 30px"></div>
<!-- END MAIN BODY-->


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