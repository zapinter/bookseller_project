<?php 
session_start(); 
include('server.php'); 

$db = mysqli_connect('localhost', 'root', 'root', 'bookseller');

?>

<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <title>Search Books</title>
        <link rel="stylesheet" href="../css/search.css">
        <!-- Essential styles -->
        <link rel="stylesheet" href="../css/assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../css/assets/plugins/font-awesome/css/font-awesome.css" type="text/css"> 

        <!-- Dlapak styles -->
        <link id="theme_style" type="text/css" href="../css/assets/css/style1.css" rel="stylesheet" media="screen">

        <!-- ../css/assets -->
        <link rel="stylesheet" href="../css/assets/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="../css/assets/plugins/owl-carousel/owl.theme.css">

        <!-- JS Library -->
        <script src="../css/assets/js/jquery.js"></script>
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

            <section class="hero">
                <div class="container text-center">
                    <h2 class="hero-title">Search Your Favorite Books Here!</h2>
                    <p class="hero-description hidden-xs">Or just you know, the books you need to buy for class /:</p>
                    <div class="row hero-search-box">
                        <form>
                            <div class="col-md-4 col-sm-4 search-input">
                                <input type="text" class="form-control input-lg search-first" placeholder="I'm feeling lucky...">
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                        <select class="form-control input-lg search-second">
                                            <option selected="">Title</option>
                                            <option>Author</option>
                                            <option>Seller</option>
                                            <option>ISBN</option>
                                        </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <button class="btn btn-custom btn-block btn-lg"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- code for seach feature -->
            <form action="searchbar.php" method="POST">
            <input type="text" name="search" placeholder="search">
            <button type="submit" name="submit-search"></button> </form>
            <h1>Front page</h1>
            <h2>all articles:</h2>
            <div class="article-container">
            	<?php 
            	   $sql = "SELECT * FROM books";
                    $result = mysqli_query($db , $sql);
                    $queryResults = mysqli_num_rows($result);
                    
                    if($queryResults > 0){
                        while ($row = mysqli_fetch_assoc()){
                            echo "<div>
                           <h3>" .$row['title']."</h3>
                           <p>" .$row['author']."</p>
                           <p>" .$row['ISBN']."</p>
                           <p>" .$row['price']."</p>
                          </div>";
                        }
                    }
            	   ?>
            	   </div>
            
            
            <section class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            
                                <div class="col-md-12">
                                    <div class="section-header">
                                        <h2>Featured</h2>
                                    </div>
                                    <div id="featured-products" class="owl-carousel owl-carousel-featured">
                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid featured-ads">
                                                    <a href="#">Featured Ads</a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="../css/assets/img/products/product-1.jpg" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                        <li class="item-location"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid premium-ads">
                                                    <a href="#">Featured Ads</a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="../css/assets/img/products/product-6.jpg" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4>Samsung Tab 3 V 116</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                        <li class="item-location"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-ads-grid highlight-ads">
                                                <div class="item-img-grid">
                                                    <img alt="" src="../css/assets/img/products/product-7.jpg" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4>Sony Experia Z2 LTE</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                        <li class="item-location"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid hot-ads">
                                                    <a href="#">4 more!!!</a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="../css/assets/img/products/product-1.jpg" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                        <li class="item-location"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-badge-grid hot-ads">
                                                    <a href="#"> 1 Left!!!</a>
                                                </div>
                                                <div class="item-img-grid">
                                                    <img alt="" src="../css/assets/img/products/product-1.jpg" class="img-responsive img-center">
                                                </div>
                                                <div class="item-title">
                                                    <a href="detail.html"><h4>Lenovo A326 Black 4GB RAM</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="category.html">Electronics</a> , <a href="category.html">Smartphone</a></li>
                                                        <li class="item-location"><a href="category.html"><i class="fa fa-map-marker"></i> Manchester</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="item-price-grid pull-left">
                                                        <h3>$ 100</h3>
                                                        <span>Negotiable</span>
                                                    </div>
                                                    <div class="item-action-grid pull-right">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Save Favorite" class="btn btn-default btn-sm"><i class="fa fa-heart"></i></a></li>
                                                            <li><a href="detail.html" data-toggle="tooltip" data-placement="top" title="Show Details" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
             
                    </div>
                </div>
            </section>
            

<!-- Essentials -->
<script src="../css/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../css/assets/plugins/owl-carousel/owl.carousel.js"></script>
<script src="../css/assets/plugins/counter/jquery.countTo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // ===========Featured Owl Carousel============
        if ($(".owl-carousel-featured").length > 0) {
            $(".owl-carousel-featured").owlCarousel({
                items: 3,
                lazyLoad: true,
                pagination: true,
                autoPlay: 5000,
                stopOnHover: true
            });
        }

        // ==================Counter====================
        $('.item-count').countTo({
            formatter: function (value, options) {
                return value.toFixed(options.decimals);
            },
            onUpdate: function (value) {
                console.debug(this);
            },
            onComplete: function (value) {
                console.debug(this);
            }
        });
    });
</script>
</body>
</html> 
