<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Book-Zach</title>
<link rel='stylesheet' href='../css/bookPage.css' />
<style>


</style>
</head>
<body>
<!-- top navigation bar with pic and status Hello world!-->
	<header>
    <div class="containernav">
    	<div class="navbar_inner">
    	<a><img src="../images/logofinal.png"class="navbar_image"></a>
    		<a href="../index.php" class="navbar_title"></a>
    		<div class="dropdownAcct">
    	  		<button class="dropbtnAcct">My Account</button>
    				  <div class="dropdownAcct-content">
    				    <a href="pages/profile.php">Profile</a>
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

<!-- things needed: title, image, price(SELLER), ISBN, Author, Publisher, Edition, Description -->

<div class="column">
<h3>Title</h3>
<h3>Author</h3>
<img src="../images/textbook_bookpage.jpg" alt="book goes here" width="300" height="400">
</div>

<div class="column">
<h3>Edition</h3>
<h3>ISBN number</h3>
<h3>Publisher</h3>
<p>Short description of the book</p>
<a class="button" href="../pages/checkOut.jsp" style="vertical-align:middle"><span>Click to purchase book</span></a>
</div>

</body>
</html>