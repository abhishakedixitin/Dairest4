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
                                 
											  
									
									<li><a href="sign-in.php">Sign In / Register</a></li>
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
								<a href="index.php"><img src="img/logo/logo2.png" width="300px" height="100px" alt="" /></a>
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
                                     <li><a href="index.php" >Home</a></li>
                                    
                 

                  <li><a href="#">Category</a>
                    <ul>
                      <li><a href="chocolate.php">Chocolate</a></li>
                      <li><a href="lollipop.php">Lollipop</a></li>
                      <li><a href="cake.php">Cake</a></li>
                     
                   </ul>

               
                  <li><a href="about.php" >About Us</a></li>

									<li><a href="contact.php">Contact Us</a></li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- mainmenu-area-end -->
 <!--start-content-->

    <!-- sign-up-area-start -->

     <div class="x0" style="width:1300px; margin-top:0.000001px; padding:0.00001px">
      <div class="x2" style="width:700px; margin-left:200px;margin-right:100px">
          <form action="acct_created.php" method="post">
        <h1 style="font-size: 50%vw; text-align:center">Sign Up</h1><br>
        <h4 style="font-size: 15%vw">Username:</h4>
		    <input type="text" id="name" pattern="^[A-Za-z0-9_]{6,15}$" name="user_name" style="border-color:rgb(110,65,30);border-width:thin" size="30" required title="Username can contain UpperCase or LowerCase alphabet or number, and should be 6-15 characters long"> <br><br>
          
          <h4 style="font-size: 15%vw">Email Id:</h4>
          <input type="email" id="mail" name="user_email" style="border-color:rgb(110,65,30);border-width:thin" size="30"  required>
       <br><br> <h4 style="font-size: 15%vw">Password:</h4>
		    <input type="password" id="passw" name="user_password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" style="border-color:rgb(110,65,30);border-width:thin" size="30" required title="Password should contain atleast one UpperCase & one LowerCase alphabet, one digit/SpecialChar, and minimum 8 characters long">	<br>
          
          <br> <h4 style="font-size: 15%vw">Mobile:</h4>
		        <input type="tel" pattern="\d{3}\d{3}\d{4}" id="mobile" name="user_mobile" style="border-color:rgb(110,65,30);border-width:thin" size="30" required title="Format: XXXXXXXXXX">    
<br><br>
         <center> <button class="button" type="submit">Sign Up</button></center><br><br>
              
              </form>
       <center> <h5 style="color:blue; padding-top:2%;font-size: 5%vw">Already a Member?
		      <button class ="button" type="submit" onclick= "window.location.href='sign-in.php'">Sign In Here!</button>
           </h5></center>
              
		  </div>
        
     <div class="x1" style="float:right">
        <figure>
          <img src="img/logo/mumu.png" style="width:60%vw; height:60%vw;" alt="">
        </figure>
      </div>
    </div>
    <!-- sign-up-area-end -->

   		<!-- contact-area-start -->
		<div class="contact-area ">
			
				
					 <img src="img/banner/2.png" style="width:100%; height:150px;" alt="hello">
					
    </div>
		<!-- contact-area-end -->

		<!-- footer-area-start -->
		<div class="footer-area footer-area-4 ptb-80" style="background-color:rgb(110,65,30); width:100%; height:50%"  >
			<div class="container" >
				<div class="row" >
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-logo">
								<a href="#"><img src="img/logo/logo2.png" width="200px" height="50px" alt="" /></a>
							</div>
							<p style="color:#ffffff">We devote to provide you the best shopping experience with sweets and treats.</p><br>
				

						</div>	
					</div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

          <div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
          </div>

					<div class="col-lg-2 col-md-3 hidden-sm col-xs-12 mar_b-30">
						<div class="footer-wrapper">
							<div class="footer-title">
								<a href="#"><h3 	style="color:rgba(240,128,128,0.99)">useful links</h3></a>
							</div>
							<div class="footer-wrapper">
								<ul class="usefull-link" >
									<li ><a href="contact.php" style="color:#ffffff">Contact us</a></li>
									
									<li><a href="about.php" style="color:#ffffff">About us</a></li>
									
									<li><a href="service.php" style="color:#ffffff">Customer service</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
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
location.assign("m_sign-up.php")
}

    </script>  
      
        
    </body>
</html>