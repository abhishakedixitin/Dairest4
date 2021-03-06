<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place Dairest icon in the url location -->
        <link rel="icon" href="img/logo/logo1.png" />

		    <!-- google-font -->
		    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		    <!-- all css here -->
		    <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		    <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		    <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		    <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		    <!-- nivo-slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
		    <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		    <!--linearicons css -->
        <link rel="stylesheet" href="css/linearicons-icon-font.min.css">
		    <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		    <!-- style css -->
		    <link rel="stylesheet" href="style1.css">
		    <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
    </head>

    <body>
		<header>
           
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
                       

						<div class="col-lg-3 col-md-4 col-sm-5">
							<div class="header-top-right header-top-left-4">
								<p>WELCOME TO THE CANDY LAND!</p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                                 
                 
                                   
								<li class="click_menu"><a href="#">
						<?php 
						error_reporting(0); 
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>'.$username.' </span>';					
                    
						?><i class="fa fa-angle-down"></i></a>
                                    <ul class="click_menu_show">
											  <li><a href="account.php">My Account</a></li>
											 <li><a href="cart.php">My Orders</a></li>
											  
                                              <li><a href="logout.php">Log Out</a></li>
										  </ul>
					</li>	
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

				<div class="header-bottom-area home-page-2 ptb-10 " style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">
 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="menu scnd-fix">
								
									
								
								
							</div>
						</div>
					

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="u_index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>

						
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-empty">
									<a href="cart.php" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

	<!-- mainmenu-area-start -->
		<div class="mainmenu-area home-page-2 mainmenu-area-4" id="main_h" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="mainmenu hidden-xs" style="color:rgb(110,65,30)">
							<nav>
								<ul style="color:rgb(110,65,30)">
                                     <li><a href="u_index.php" >Home</a></li>
                                    
                 

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href="u_chocolate.php">Chocolate</a></li>
                      <li><a href="u_lollipop.php">Lollipop</a></li>
                      <li><a href="u_cake.php">Cake</a></li>
                     
                   </ul>

               
                  <li><a href="u_about.php" >About Us</a></li>

									<li><a href="u_contact.php">Contact Us</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- mainmenu-area-end -->

<br><br> 
		<!-- mainmenu-area-end -->
 <!--start-content-->
        <!-- products -->
        <div class="products">
            <div class="container" >
                <div class="products-grids"style="margin-left:220px;">
                    <div class="col-md-8 products-single">
                        <div class="col-md-5 grid-single">
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php
                                    include 'connection.php';
                                    $product_id = $_GET['p'];
                                   
                                    
                                    $sql = " SELECT * FROM products WHERE p_id=$product_id";
                                    if (!$conn) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0)
                                    {
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo '
									<li data-thumb="'.$row['p_image'].'">
										<div class="thumb-image" > <img src="'.$row['p_image'].'" data-imagezoom="true" class="img-responsive" alt=""/> </div>
									</li>
									</ul>
									</div>
									';
                                            ?>
                                         
                                            <?php
                                            echo '
									</div>	
									<div class="col-md-7 single-text" >
									<div class="details-left-info simpleCart_shelfItem" style="margin-left:70px;">
										<h3>'.$row['p_name'].'</h3>
										
										
										<div class="price_single">
										<span class="actual item_price"><h3>$ '.$row['p_price'].'</h3></span>	
										</div>
									<br><br>	<h3 class="quick">Description:</h3>
										<p class="quick_desc">'.$row['p_description'].'</p>
											<br>
											<div class="clearfix"> </div>
											<div class="single-but item_add">
											<div class="quick-add-to-cart">
										
	
										</div>
												<a class="item_add" href="addcart.php?mycart='.$row['p_id'].'&userid='.$id.'"><button class="button">Add to Cart</button></a>	
                                                 
															
											</div>
										</div>
									</div>
									';
                                            $_SESSION['p_id'] = $row['p_id'];
                                        }
                                    }
                                    ?> 
                                    <div class="clearfix"></div>
                            
      
    </div>  </div>  </div>
                        </div>
                    </div>
                </div>
            </div>
                
                
                
          
        </div>
<br><br><br>


   <!-- contact-area-start -->
		<div class="contact-area ">
			
				
					 <img src="img/banner/2.png" style="width:100%; height:150px;" alt="hello">
					
    </div>
		

	
    
    <div><center>		<p style="color:#ffffff;background-color:rgba(240,128,128,0.99)">DEVELOPED BY TEAM 16</p></center></div>



		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- scrolly js -->
        <script src="js/jquery.scrolly.js"></script>
		<!-- magnific-popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
		<!--  countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- nivo.slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
        
        
      <script type="text/javascript">

if (screen.width <= 699) {
location.assign("m_u_single.php")
}

    </script>  
      
        
    </body>
</html>