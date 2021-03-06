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
			<div class="header-top-area ptb-10 hidden-xs header-top-area-4">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-sm-5">
							<div class="header-top-right header-top-left-4">
								<p>FREE SHIPPING ON ORDERS OVER $49</p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-7 header-top-right-4">
							<div class="header-top-left">
								<ul>
                
										  
											  <li><a href="m_sign-in.php">Compare Products</a></li>
									
									<li><a href="m_sign-up.php">Create an account</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="header-bottom-area home-page-2 ptb-10" style="background-color:rgb(110,65,10)">
				<div class="container">
					<div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="logo logo2">
								<a href="m_index.php"><img src="img/logo/logo2.png" width="70%" height="50%" alt=""/></a>
							</div>
						</div>
						
						

						<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
							<div class="header-bottom-right-4-inner">
								<a href="#" style="color:#ffffff"><span class="lnr lnr-heart"></span></a>
							</div>
							<div class="header-bottom-right header-bottom-right-4">
								<div class="shop-cart shop-cart-empty">
									<a href="#" style="color:#ffffff"><span class="lnr lnr-cart"></span></a>
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
        </div>
		<!-- mainmenu-area-end -->

		<!-- slider-area-start -->  <!-- slider-area-end -->

		<!-- service-area-start -->   <!-- service-area-end -->
        
 <!-- sign-in-area-start -->

   <div class="x0" style="width:90%; margin-top:0.1%; padding:0.1%">
      <div class="x2" style="width:70%; margin-left:20%;margin-right:10%">
          
        <form action="setEmail.php" method="post" >
        <h3 style="font-size: 50%vw; text-align:center">Enter OTP received </h3><br><br>
      <h4 style="font-size: 15%vw;">OTP:</h4>
          		        <input type="text" pattern="[0-9]{6}" id="OTP" name="OTP" required    
 style="border-color:rgb(110,65,30);border-width:thin" size="20" required><br>
                  
          
           <center><button class="button" type="submit" style="margin-top:6%">Submit</button></center>
               </form>
        </div>
             

                                                      
     
    </div>
    <!-- sign-in-area-start -->
       
    <!-- contact-area-start -->
		<div class="contact-area ptb-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar_b-30">
						<div class="contuct-info text-center">
							<h4>Sign up for news & offers!</h4>
							<p>You may safely unsubscribe at any time</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-1 col-xs-12">
						<div class="search-box">
							<form action="#">
								<input type="email" placeholder="Enter your email address"/>
								<button><span class="lnr lnr-envelope"></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-area-end -->

        
        <!-- sign-in-area-start -->

   
        
   <!-- footer-area-start -->
		<center><div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:40%; margin-top:1%;padding:0.1%"  >
			<div class="container" >
				<div class="row" >
					

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30" style="margin-top:1%; padding:2%">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99); font-size:180%">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Contact us</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Site map</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">About us</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Specials</a></li>
									<li><a href="#" style="color:#ffffff; font-size:130%;line-height:160%">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div></center>
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
location.replace("emailOTP.php")
}
   
</script>  
        
       
 
      
        
    </body>
</html>
