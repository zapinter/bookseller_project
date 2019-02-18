<?php
session_start();
include('server.php');
/* if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
} */
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: pages/login.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title> BookSeller </title>
		<link rel='stylesheet' type="text/css" href='css/main.css' />
	</head>
	<body>
	<!-- top navigation bar with pic and status -->
		<header>
			<div id = "content"><img src="images/logofinal.png"class="navbar_image"></div>
			<div> 
			<div class="container">
				<div class="navbar_inner">
					<a href="index.html" class="navbar_title"></a>
					<?php if (isset($_SESSION["username"])) : ?>
					<div class="navbar">
                      <div class="dropdown">
                        <button class="dropbtn" style = "flex=right">My Account 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="pages/profile.php">Profile</a>
    				      <a href="pages/account.php">Account Info</a>
    				      <a href="index.php?logout='1'" style="color: red;">Logout</a>
                        </div>
                      </div> 
                      <h3 style = "flex=right">Hello, <?php echo $_SESSION['name']; ?>!</h3>
                    </div>
				  	<?php else : ?>
				  	<div class="dropdownAcct">
				  		<a href = "pages/register.php"><button class="dropbtnAcct"> Sign up</button></a>
					</div>
				  	<?php endif ?>
				</div>
			</div>
			</div>
		</header>
	<!-- second navigation bar with tabs -->
	<div class="container">
	<nav style="position: sticky; position: -webkit-sticky;">
		<ul>
			<li><a href="#" class="active">Home</a></li>
			<li><a href="pages/search.php">Search</a></li>
			<li><a href="pages/sellBook.php">Sell Books</a></li>
		</ul>
	</nav>
	</div>
	<!-- Pane One -->
	<div class="paneOne">
		<a class = "logo" ><img src="images/logofinal.png"></a>
		<div id="searchBarWrap">
	        <input id="searchBar" type="text" name="searchbar" placeholder="Search Books..."/>
	        <button id="searchBtn"> <li><a href="pages/search.php"> Search</a></li></button>
	    </div>
	</div>
	
	</body>
</html>

