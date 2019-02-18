<?php 
session_start(); 
include('server.php'); 
global $name; 
global $username;
global $email;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<!-- top navigation bar with pic and status -->
	<header>
		<div id = "content"><img src="../images/logofinal.png"class="navbar_image"></div>
		<div> 
		<div class="container">
			<div class="navbar_inner">
				<a href="index.php" class="navbar_title"></a>
				<div class="dropdownAcct">
			  		<a href = "register.php"><button class="dropbtnAcct"> Sign up</button></a>
				</div>
			</div>
		</div>
		</div>
	</header>
		
<!-- second navigation bar with tabs -->
	<div class="container">
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
<div class="headerReg">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" class = "formPad">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
</body>
</html>

