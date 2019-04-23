<?php
session_start();
?>


<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign-In</title>
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
		

			<div class="header-bottom-area home-page-2 ptb-10 " style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">

						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="menu scnd-fix">
								
									
								
								
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="m_u_index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
							</div>
						</div>

						
							
							</div>	
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->
		<!-- mainmenu-area-start -->
		
            

		<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
          
			<div class="container">
                
				<div class="row">
                    
					<div class="col-md-12" >
                        
						<div class="mobile-menu">
                              
							<nav id="mobile-menu">
                                 
                                
								<ul>
                                    
                                  <li><a href="m_u_index.php" >Home</a></li>
                                    
               	<li><a href="#">
						<?php 
						error_reporting(0); 
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
							echo '<span>'.$username.' </span>';					
                    
						?></a>
                                    <ul>
											  <li><a href="m_account.php">My Account</a></li>
                                        <li><a href="m_cart.php">My Cart</a></li>
											  
                                              <li><a href="logout.php">Log Out</a></li>
										  </ul>
					</li>	

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href="m_u_chocolate.php">Chocolate</a></li>
                      <li><a href="m_u_lollipop.php">Lollipop</a></li>
                      <li><a href="m_u_cake.php">Cake</a></li>
                     
                   </ul></li>

               
                  <li><a href="m_u_service.php" >Customer Service</a></li>
                                    
                            <li><a href="m_u_about.php">About Us</a></li>
                                    
									<li><a href="m_u_contact.php">Contact Us</a></li>
                 
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div><br><br><br>
		<!-- mainmenu-area-end -->
 <!--start-content-->
<!--order strored in database-->
	<div class="products">
		<!--storing feedback in database-->
		<?php 
		include 'connection.php';
		if (isset($_GET['mycart']) && isset($_GET['mycart'])){
			$mycart = $_GET['mycart'];
		}		
		if (isset($_GET['userid']) && isset($_GET['userid'])){
			$id = $_GET['userid'];
		}		
		$sql = "SELECT * FROM products WHERE p_id = $mycart";
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}	
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
					$p_name = $row['p_name'];
					$p_image = $row['p_image'];
					$p_price = $row['p_price'];
				}
			}		
			$sql = "Insert into cart (c_u_id,c_name,c_p_id,c_image,c_price) values ($id,'$p_name',$mycart,'$p_image',$p_price)";
			$result = mysqli_query($conn,$sql) or mysqli_error($conn);
			echo '<span style="color:rgb(110,65,30);text-align:center;"><h4><center style="color:rgb(110,65,30)"> Product added to your cart successfully </center></h4></span>'; 
          echo '</div>
											<br>	<center><a class="item_add" font-size="30px" href="m_cart.php"><button class="button">Go to Cart</button></a></center>	
                                                 
															
											</div>';
			echo '<br><br><br><h4><center style="color:rgb(110,65,30)">Go Back To Category-> <a href="m_u_chocolate.php">Chocolate</a> / <a  href="m_u_lollipop.php">Lollipop</a> / <a  href="m_u_cake.php">Cake</a></center></h4>';
      
			?>
		<!--storing complete-->
</div>
	</div><br><br><br><br>
<!-- //products -->
	 

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

if (screen.width > 699) {
location.assign("addcart.php")
}

    </script>  
      
        
    </body>
</html>