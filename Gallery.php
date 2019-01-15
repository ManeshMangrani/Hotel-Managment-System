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

  <link rel="stylesheet" href="css/swipebox.css">

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

/*-- Gallery Section --*/
#portfolio p {
  line-height: 1.8em;
  margin: 25px 0 0 0;
  font-size:1.1em;
  color: #ffffff;
  font-weight: 300;
}
.gallery-section h3{
   margin: 0;
  color: #ffffff;
  font-size: 36px;
  font-weight: 500;
  letter-spacing: 18px;
}
.gallery-grid {
  padding: 0;
}
.gallery1 {
position:relative;
}
.gallery1 .textbox {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
    background-color: rgba(15, 36, 83, 0.62);
}
.gallery1:hover .textbox {
  -webkit-transform: scale(1);
  transform: scale(1);
}
.gallery-grid img{
    width:100%;
}

.textbox {
-webkit-transition: all 0.7s ease;
transition: all 0.7s ease;
text-align:center;
}
.textbox h4 {
    font-size: 2em;
    color: #FFF;
    margin-top: 3.5em;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 5px;
}
.textbox p {
     font-size: 26px !important;
    color: #fff;
    margin: 6px 0 0 0!important;
    padding: 3px 0;
}
.gallery-grids {
  margin-top: 50px;
}
/*-- //Gallery Section --*/

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
		<h3>Mangrani <br> Hotel Management Gallery! 
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
    <!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
     <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g1.jpg" class="swipebox"><img src="img/g1.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g2.jpg" class="swipebox"><img src="img/g2.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g3.jpg" class="swipebox"><img src="img/g3.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g4.jpg" class="swipebox"><img src="img/g4.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g5.jpg" class="swipebox"><img src="img/g5.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
          </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g6.jpg" class="swipebox"><img src="img/g6.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
             </div>
           </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g6.jpg" class="swipebox"><img src="img/g7.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
             </div>
           </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g6.jpg" class="swipebox"><img src="img/g8.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
             </div>
           </a>
        </div>
          <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g9.jpg" class="swipebox"><img src="img/g9.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g10.jpg" class="swipebox"><img src="img/g10.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g4.jpg" class="swipebox"><img src="img/g4.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
          <a href="img/g2.jpg" class="swipebox"><img src="img/g2.jpg" class="img-responsive" alt="/">
            <div class="textbox">
            <h4>MANGRANI</h4>
              <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
            </div>
        </a>
        </div>
        <div class="clearfix"> </div>
</section>
<!-- //gallery -->
<br><br><br><br><br>

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

		<!-- custom js-->
	<!--	<script src="js/custom.js"></script>-->

  <script>
    /*====================================================
                        NAVIGATION
====================================================*/
// Show/Hide transparent black navigation
$(function () { 

    $(window).scroll(function () {

        if ($(this).scrollTop() < 50) {
            // hide nav
            $("nav").removeClass("vesco-top-nav");
            $("#back-to-top").fadeOut();

        } else {
            // show nav
            $("nav").addClass("vesco-top-nav");
            $("#back-to-top").fadeIn();
        }
    });
});
    
  </script>

		<!-- bootstrap jss-->
		<script src="js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script> 
          <script type="text/javascript">
            jQuery(function($) {
              $(".swipebox").swipebox();
            });
          </script>
<!-- //gallery popup -->


  
  <div class="arr-w3ls">
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	</body>
</html>