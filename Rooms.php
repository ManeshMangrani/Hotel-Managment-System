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

	<!-- style Css-->
	<!--link rel="stylesheet" type="text/css" href="css/style.css" media="all">-->

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
.price-list ul {
    padding: 0px;
    list-style: none;
}
.price-gd-top {
    text-align: center;
    position: relative;
}
.price-gd-top h4 {
    font-size: 1.5em;
    color: #fff;
    padding: 0.4em 1em;
    background: #0f2453;
    font-weight: 300;
    position: absolute;
    top: 9.6em;
    right: 0em;
}
.price-selet h3 {
    padding: 0.2em 0em 0em 0em;
    font-size: 1.7em;
    float: left;
    margin-left: 20px;
}
.price-selet h3 span {
    color: #ef0404;
    font-size: 31px;
    margin-right: 5px;
}
.price-gd-bottom {
    background: #fff;
    text-align: center;
    padding: 1.8em 0em 1em;
}
.price-gd-top img {
    width: 100%;
}
.price-list ul li {
    padding: 0.5em 0em;
    font-size: 0.9em;
    color: #2b2b2b;
    display: inline-block;
}
.price-selet {
    padding: 1em 0em;
    text-align: center;
    background: #fff;
}
.price-selet a {
    font-size: 1.1em;
    color: #fff;
    display: block;
}
.price-selet a {
    font-size: 0.9em;
    color: #000000;
    display: inline-block;
    padding: 0.5em 2em;
    background: #ffce14;
    text-decoration: none;
    border: 2px solid #ecbf11;
}
.price-block {
    box-shadow: 0px 0px 2px 1px rgba(0,0,0,0.15);
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
}
.price-block:hover,.w3layouts-pricing:hover,.w3-agileits-vpn-grid:hover {
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
    z-index: 1;
}

h3.title-w3-agileits {
    font-size: 3em;
    color: #FFF;
  font-weight: 300;
    letter-spacing: 3px;
    margin-bottom: 1em;
    text-align: center;  
  text-transform: capitalize;
  font-family:'Oswald', sans-serif;
}
.title-black-wthree{
  color:#0f2453!important;
}

.contact-w3ls,.advantages,.banner-bottom ,.w3l-visitors-agile,.plans-section,.team{
  padding: 100px 0px;
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
                            <li><a  href="#home">Home</a></li>
                            <li><a  href="Rooms.php">Rooms</a></li>
                            <li><a  href="Reservation.php">Reservation</a></li>
                            <li><a  href="#">login</a></li>
                            <li><a  href="Team.php">Team</a></li>
                            <li><a  href="Gallery.php">Gallery</a></li>
                            <li><a  href="About.php">About</a></li>
                            <li><a  href="#contact">Contact</a></li>
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
        <h3>Mangrani <br> Hotel Rooms and prices! 
        </h3>   
        </div>
        <div id="home-btn" class="animated zoomIn">
        <a class="btn btn-lg btn-general btn-white"
            title="Reservation">See Below</a> 
        </div>

        </div>
	
		</div>


		</div>

		</section>
              <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
                 <div class="container">
               < <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
                        <div class="priceing-table-main">
                 <div class="col-md-3 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                        <img src="img/r1.jpg" alt=" " class="img-responsive" />
                            <h4>Deluxe Room</h4>
                        </div>
                        <div class="price-gd-bottom">
                               <div class="price-list">
                                    <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    
                                     </ul>
                            </div>
                            <div class="price-selet">   
                                <h3><span>$</span>320</h3>                      
                                <a href="Reservation.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                        <img src="img/r2.jpg" alt=" " class="img-responsive" />
                            <h4>Luxury Room</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                    <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>220</h3>
                                <a href="Reservation.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                        <img src="img/r3.jpg" alt=" " class="img-responsive" />
                            <h4>Guest House</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>180</h3>
                                <a href="Reservation.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid wthree lost">
                    <div class="price-block agile">
                        <div class="price-gd-top ">
                            <img src="img/r4.jpg" alt=" " class="img-responsive" />
                            <h4>Single Room</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span> 150</h3>
                                <a href="Reservation.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
     <!--// rooms & rates -->
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
								<li><a href="#Home">Home</a></li>
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

		<!-- custom js-->
		<script src="js/custom.js"></script>

		<!-- bootstrap jss-->
		<script src="js/bootstrap/bootstrap.min.js"></script>


	</body>
</html>
