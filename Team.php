<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta information-->
	<meta charset="uttf-8">  <!--run a browser correctly-->
	<meta http-equiv="X-UA-compatible" content="IE=edge"> <!-- run a update browser also -->
	<meta name="veiwpoint" content="width=device-width, initial-scale=1"> <!-- run a website in a correctly size-->

	<!--title for website -->
	<title>Hotel Management System</title>
	
	<!--favicon-->
	<link rel="shortuct icon" href="img/bed.png">

	<!--google font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- font-awesome-->
	<link rel="stylesheet"  href="css/font-awesome/css/font-awesome.min.css">

	<!-- bootstrap css -->
	<link rel="stylesheet"  href="css/bootstrap/bootstrap.min.css">

	<!--animate Css-->
	<link rel="stylesheet" href="css/animate/animate.css">

    <!-- magnific-popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">

      <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

       <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

	<!-- style Css-->
	<!--link rel="stylesheet" type="text/css" href="css/style.css">-->

	<style>
/*======================================================
          Default value:
          font-family  :Roboto condensed

          Greenish blue: #34c6d3 (buttons, icon, links,& background)
          steel gray   : #41464b  (Heading)
          Blue Bayoux  : #64707b  (paragraphs)
          white        : #fff     (text with black background)
          Black        : #000




  ======================================================*/

  html, body{
  	height: 100%;
  }

  body{

  	 font-family: "Roboto condensed", sans-serif;

  }
  h3 {
    color:#41464b;
  	text-transform: uppercase;
  }

  /*========================================
				Home
  ===========================================*/

  #home{
  	height: 100%;
  }
  
  #home-cover {
  	height: 100%;
  	background-image: url("img/background1.jpg");
  	background-repeat: no-repeat;
  	background-size: cover;
  	background-position: center;
  	background-attachment: fixed; 
  }

  #home-content-box {
  	width: 100%;
  	height: 100%;
  	display: table;
  }

  #home-content-box-inner {
  	display: table-cell;
  	vertical-align: middle;
  	text-align: center;
  }

  #home-heading h3 {
  	color: #fff;
  	font-size: 55px;
  	font-weight: 700;
  	margin:20px 0 20px 0;
  }

    /*========================================
				parallex
  ===========================================*/
   .bg-parallax{
   	background-repeat: no-repeat;
  	background-size: cover;
  	background-position: center;
  	background-attachment: fixed;
   }




  /*========================================
				Buttons
  ===========================================*/

  .btn-general {
  	border-width: 2px;
  	border-radius: 0;
  	padding:12px 26px 12px 26px;
  	font-size: 16px;
  	font-weight: 400;
  	text-transform: uppercase;
  }

  .btn-white {
  	border-color: #fff;
  	color: #fff;
  }

  .btn-white:hover,
  .btn-white:focus {
  	background-color: #fff;
  	color: #41464b0;
  }

  .btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 22px;
    padding: 3px 15px;
    border-radius: 0;
    display: none;
}

    /*========================================
				animation
  ===========================================*/

  #home-cover,
  #home-heading,
  #home-btn {
  	animation-duration: .5s;
  }

  #home-cover {
  	animation-delay: .1s;
  }

  #home-heading {
  	animation-delay: .5s;
  }

  #home-btn {
  	animation-delay: 1s;
  }

  /*====================================================
                       CONTACT
======================================================*/

footer {
    background-color: #41464b;
    padding-top: 30px;
    border-top: 5px solid rgba(0, 0, 0, 0.1);
}

#contact-left h3,
#contact-right h3 {
    color: #fff;
    font-size: 27px;
    font-weight: 700;
}

#contact-left p {
    color: #fff;
    margin-bottom: 30px;
}

#contact-info {
    background-image: url("img/world-map.png");
    background-repeat: no-repeat;
    background-size: contain;
}

address {
    color: #fff;
}
address strong { font-size: 16px; }
address strong,
#phone-fax-email strong {
    letter-spacing: 1px;
}

form .form-control {
    background: transparent;
    border-radius: 0;
    border-color: #fff;
    font-size: 17px;
    font-weight: 300;
    padding: 8px 16px;
    margin-bottom: 20px;
    color: #fff;
}

/*====================================================
                       CONTENT (Generic)
======================================================*/

.content-box {
    padding: 60px 0 60px 0;
}

.content-title h3 {
    font-size: 30px;
    font-weight: 700;
    text-align: center;
    margin: 0 0 30px 0;
}

.content-title-white h3 {
    color: #fff;
}

.content-title-underline {
    width: 30px;
    height: 3px;
    background-color: #34c6d3;
    margin: 0 auto 30px auto;
}

/*====================================================
                       TEAM
======================================================*/

.team-member {
    margin: 0 15px;
}

.team-member-info {
    padding: 10px 0 30px 0;
}

h4.team-member-name {
    font-size: 22px;
    font-weight: 700;
    letter-spacing: 1px;
    padding-top: 2px;
}

h4.team-member-designation {
    color: #34c6d3;
    font-size: 15px;
    font-weight: 700;
    font-style: italic;
    letter-spacing: 1px;
    margin-top: 5px;
}

/*====================================================
                       SOCIAL
======================================================*/

.social-list {
    padding-left: 0;
}

.social-list li {
    list-style: none;
    display: inline-block;
    width: 32px;
    height: 32px;
    margin-right: 6px;
    margin-top: 10px;
}

.social-icon i {
    font-size: 17px;
}

.icon-gray i {
    color: #64707b;
}

.icon-white i {
    color: #fff;
}

.social-icon i:hover {
    color: #34c6d3;
}




  /*====================================================
                       FOOTER
======================================================*/

#footer-bottom {
    background-color: rgba(0, 0, 0, 0.1);
    padding: 30px 0;
    margin-top: 60px;
}

#footer-copyright p {
    margin: 0;
    color: #fff;
}

#footer-menu {
    float: left;
    color: #fff;
    font-size: 16px;
    font-weight: 300;
}

#footer-menu ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

#footer-menu ul li {
    display: inline-block;
}

#footer-menu a {
    color: #fff;
    font-size: 16px;
    font-weight: 300;
    margin: 0 10px;
    text-decoration: none;
}

#footer-menu a:hover {
    color: #34c6d3;
}



/*====================================================
                       NAVIGATION
======================================================*/

.navbar {
    padding: 20px 0;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}
.vesco-top-nav {
    background: rgba(0, 0, 0, 0.7);
    padding: 7px 0;
}

.vesco-nav-wrapper {
    padding: 0 85px;
}

.navbar-nav {
    float: right;
}

.navbar-nav>li>a {
    color: #fff;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
}

.navbar-nav>li>a:hover,
.navbar-nav>li>a:focus {
    background: none;
    color: #34c6d3;
}

.navbar-toggle {
    background-color: rgba(0, 0, 0, 0.1);
    border: 1px solid #fff;
    border-radius: 0;
}

.navbar-toggle .icon-bar {
    background-color: #fff;
}

.navbar-collapse {
    max-height: none !important;
}

.vesco-top-nav ul.navbar-nav>li.active>a {
    color: #34c6d3;
}




</style>


</head>

	<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">

	    <header>
        <nav class="navbar  navbar-fixed-top" role="navigation">
        <!--<nav class="navbar navbar-fixed-top">-->

            <div class="container-fluid">

                <div class="vesco-nav-wrapper">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vesco-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>

                        <a class="navbar-brand" href="#home">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="vesco-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="Index.php">Home</a></li>
                            <li><a href="Rooms.php">Rooms</a></li>
                            <li><a href="Reservation.php">Reservation</a></li>
                            <li><a href="#">login</a></li>
                            <li><a href="Team.php">Team</a></li>
                            <li><a href="Gallery.php">Gallery</a></li>
                            <li><a href="About.php">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>

    </header>

		  <!--Home--> 
		<section id="home">

		<div id="home-cover" class="bg-parallax animated fadeIn">
			
		<div id="home-content-box">
			
		<div id="home-content-box-inner">
			
		<div id="home-heading" class="animated zoomIn">	
		<h3>Mangrani <br> Hotel Management Team! 
		</h3>	
		</div>
		<div id="home-btn" class="animated zoomIn">
		<a class="btn btn-lg btn-general btn-white" href="Reservation.php" role="button" 
			title="Reservation">SEE BELOW</a>	
		</div>

		</div>

		</div>

		</div>	
			

		</section>
     <!-- Team -->
    <section id="team">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Team </h3>
                <div class="content-title-underline"></div>
            </div>


            <div class="container">

                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">

                        <div id="team-members" class="owl-carousel owl-theme">
                            <div class="team-member">
                                <img src="img/team/f2.png" class="img-responsive" alt="team member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Manesh Mangrani </h4>
                                    <h4 class="team-member-designation">Manager</h4>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member">
                                <img src="img/team/team-2.jpg" class="img-responsive" alt="team member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Sara Smith</h4>
                                    <h4 class="team-member-designation">Reception</h4>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="img/team/n.png" class="img-responsive" alt="team member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Noman Khowaja</h4>
                                    <h4 class="team-member-designation">Co- Manager</h4>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="img/team/team-4.jpg" class="img-responsive" alt="team member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Robert Hinay</h4>
                                    <h4 class="team-member-designation">Maintance</h4>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="team-member">
                                <img src="img/team/team-5.jpg" class="img-responsive" alt="team member">
                                <div class="team-member-info text-center">
                                    <h4 class="team-member-name">Mike Tera</h4>
                                    <h4 class="team-member-designation">Food+</h4>
                                    <ul class="social-list">
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- End Content Box -->
    </section>
 
		<footer>
		        <div id="contact">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
                        <div id="contact-left">

                            <h3>HOTEL</h3>
                            <p>We believe in <strong>Simple</strong>, <strong>Clean</strong> & <strong>Modern</strong> Design Standards with Responsive Approach. Browse the amazing work of our company.</p>

                            <div id="contact-info">

                                <address>
                                    <strong>Headquarters:</strong><br>
                                    <p>221 Jockey Hollow, Suite 600<br>
                                    Smithtown, NY 11787</p>
                                </address>
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span> (91) 8974 56984 </span> <br>
                                        <strong>Fax:</strong><span>  (91) 66 8754 8978  </span> <br>
                                        <strong>Email:</strong><span>  Mangrani@vesco.com  </span> <br>
                                    </p>
                                </div>

                            </div>
                            <ul class="social-list">
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                        </div>
                    </div>
                     <div class="col-md-6">
                        <div id="contact-right">

                            <h3>Contact Us</h3>
                            <form method="POST" action="Index.php" name="sentMessage" id="contactForm">

                                <input type="text" name="name" placeholder="Full Name" class="form-control" id="name" required>
                                <input type="tel" name="phone" placeholder="phoneno" class="form-control" id="phone" required>
                                <input type="email" name="email" placeholder="Email-Address" class="form-control" id="email" required>

                              <input type="submit" name="sub" value="Send Now" class="btn btn-primary">

                            </form>

        <?php 
        $con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        ?>                    
                            
        
        <?php

        if(isset($_POST['sub']))
        {
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $approval = "Not Allowed";
          $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
          
          
          if(mysqli_query($con,$sql))
          echo"OK";
          
        }
        ?>
      </div>
    </div>
                </div>
            </div>

        </div>
		<div id="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<div id="footer-copyright">
						<p>Copyright &copy; 2018 All Rights Reserved by Mangrani</p>
					</div>	
					</div>

					<div class="col-md-6">
						<div id="footer-menu">
							<ul>
								<li><a href="Index.php">Home</a></li>
								<li><a href="Rooms.php">Rooms</a></li>
								<li><a href="Reservation.php">Reservation</a></li>
								<li><a href="#Home">Login</a></li>
								<li><a href="Team.php">Team</a></li>
								<li><a href="Gallery.php">Gallery</a></li>
								<li><a href="About.php">About</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>	
		 <a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
		</footer>  

		<!--jquery-->
		<script src="js/jquery.js"></script>


		<!-- bootstrap jss-->
		<script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script>

    <!-- magnific-popup JS -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- owl carousel JS -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- counter -->
    <script src="js/counter/jquery.waypoints.min.js"></script>
    <script src="js/counter/jquery.counterup.min.js"></script>

    <!-- easing -->
    <script src="js/easing/jquery.easing.1.3.js"></script>


    <!-- custom JS -->
    <script src="js/custom.js"></script>


	</body>
</html>
