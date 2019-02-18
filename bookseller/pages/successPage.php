<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>BookSeller - Buy Succeed</title>
        <link rel='stylesheet' href='../css/succeed.css' />
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
    <div class="paneOne">
                <!--Selling Form-->
                <br>
                <h1>Buy Succeed!</h1>
				<div id="main">
		<div id="up">
			<span style="color:#BDBCBF;">ORDER PLACED</span>
			<span style="color:#BDBCBF;">Purchase Success!</span>
		</div>
		<div id="down">
			<table style="width:100%;">
				<tr>
					<td width=10%>
						<img src="../images/Book.jpg" width=150/>
					</td width=50%>
					<td width=40%>			
						<span style="color:#3183CC;">The Fox Mug Book</span>
						<span style="color:#BDBCBF;">by: Bullshit Author </span>
						<span style="color:black;">Sold By: Jane Doe'</span>
						<span style="color:red;">$9.44</span>
					</td>
					<td>
						<a class="btn" href="">Return/Report Book</a><br>
						<a class="btn" href="">Contact Seller</a>
					</td>
				</tr>
			</table>
		</div>
	</div>


    </div>
    
    </body>
</html>

