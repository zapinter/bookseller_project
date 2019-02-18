<?php 
session_start(); 
include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Log In yeah</title>
<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<!-- top navigation bar with pic and status -->
	<header>
		<div class="containernav">
			<div class="navbar_inner">
			<a><img src="../images/logofinal.png"class="navbar_image"></a>
				<a href="../index.php" class="navbar_title"></a>
				<div class="dropdownAcct">
			  		<a href = "register.php"><button class="dropbtnAcct"> Sign up</button></a>
				</div>
			</div>
		</div>
	</header>
	<!-- second navigation bar with tabs -->
	<div class="containernav">
	<nav style="position: sticky; position: -webkit-sticky;">
		<ul>
			<li><a href="../index.php" class="active">Home</a></li>
			<li><a href="search.php">Search</a></li>
			<li><a href="sellBook.php">Sell Books</a></li>
		</ul>
	</nav>
	</div>
		
		
<!-- register section -->
<div class = "paneOne">
<div class="headerLog">
  	<h2>Login</h2>
  </div>
	
  <form method="post" action="Login.php" class = "formPad">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign Up</a>
  	</p>
  </form>
  </div>
</body>
</html>
