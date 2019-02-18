<?php 
session_start(); 
include('server.php'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<?php  if (isset($_SESSION['username'])) : ?>
		<title> <?php echo $_SESSION['name']; ?> </title>
		 <?php endif ?>
		<link rel='stylesheet' href='../css/profile.css' />
	</head>
	<body>
	<!-- top navigation bar with pic and status -->
	<?php 
      session_start(); 
    
      if (!isset($_SESSION['username'])) {
      	$_SESSION['msg'] = "You must log in first";
      	header('location: login.php');
      }
      if (isset($_GET['logout'])) {
      	session_destroy();
      	unset($_SESSION['username']);
      	header("location: login.php");
      }
    ?>
	
    <header>
    <div class="containernav">
    	<div class="navbar_inner">
    	<a><img src="../images/logofinal.png"class="navbar_image"></a>
    		<a href="../index.php" class="navbar_title"></a>
    		<div class="dropdownAcct">
    	  		<button class="dropbtnAcct">My Account</button>
    				  <div class="dropdownAcct-content">
    				    <a href="pages/profile.php">Profile</a>
    				    <a href="pages/shoppingCart.php">Shopping Cart</a>
    				     <a href="index.php?logout='1'" style="color: red;">Logout</a>
    					  </div> 
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
	<!-- Pane One -->
	
	</body>
</html>

