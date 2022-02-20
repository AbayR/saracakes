<?php
// Initialize the session
session_start();
require_once "config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sara Cakes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel = "icon" href = "cake.png" type = "image/x-icon">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body id="page-top">
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
<style>
body {
	padding: 0;
	margin: 0;
}
.container {
	position: relative;
	margin-top: 100px;
}
.container img {
	display: block;
	width: 100%;
}
nav {
	position: fixed;
	z-index: 10;
	left: 0;
	right: 0;
	top: 0;
	font-family: 'Montserrat', sans-serif;
	padding: 0 5%;
	height: 100px;
	background-color: #3e65da;
}
nav .logo {
	float: left;
	width: 40%;
	height: 100%;
	display: flex;
	align-items: center;
	font-size: 24px;
	color: #fff;
}
nav .links {
	float: right;
	padding: 0;
	margin: 0;
	width: 160%;
	height: 100%;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
nav .links li {
	list-style: none;
}
nav .links a {
	display: block;
	padding: 1em;
	font-size: 16px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
}
#nav-toggle {
	position: absolute;
	top: -100px;
}
nav .icon-burger {
	display: none;
	position: absolute;
	right: 5%;
	top: 50%;
	transform: translateY(-50%);
}
nav .icon-burger .line {
	width: 30px;
	height: 5px;
	background-color: #fff;
	margin: 5px;
	border-radius: 3px;
	transition: all .3s ease-in-out;
}
@media screen and (max-width: 768px) {
	nav .logo {
		float: none;
		width: auto;
		justify-content: center;
	}
	nav .links {
		float: none;
		position: fixed;
		z-index: 9;
		left: 0;
		right: 0;
		top: 100px;
		bottom: 100%;
		width: auto;
		height: auto;
		flex-direction: column;
		justify-content: space-evenly;
		background-color: rgba(0,0,0,.8);
		overflow: hidden;
		box-sizing: border-box;
		transition: all .5s ease-in-out;
	}
	nav .links a {
		font-size: 20px;
	}
	nav :checked ~ .links {
		bottom: 0;
	}
	nav .icon-burger {
		display: block;
	}
	nav :checked ~ .icon-burger .line:nth-child(1) {
		transform: translateY(10px) rotate(225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(3) {
		transform: translateY(-10px) rotate(-225deg);
	}
	nav :checked ~ .icon-burger .line:nth-child(2) {
		opacity: 0;
	}
	
}

</style>
	<input id="nav-toggle" type="checkbox">
  <a class="navbar-brand" href="/">
      <div class="logo-image">
            <img src="Saracakes.png" class="img-fluid">
      </div>
</a>
	<ul class="links">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about-section">About us</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#benefits">Benefits</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="reservation.php">Order</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacts</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
	</ul>
  <style>
    .logo-image{
    width: 90px;
    height: 90px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: -6px;
}
    </style>

	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>


    <!--banner-->
  <header class="masthead" style="background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase"><span>Saracake</span></div>
                <a href="#about-section"><span></span>Scroll</a>
                
            </div>
        </div>
    </header>
 
 
    <!---//banner-->


    <!--about us-->
    <section id="about-section">
    <div class="about-section">
        <style>

.about-section{
    background: url(assets/img/about.jpg) no-repeat left;
    background-size: 55%;
    background-color: #fdfdfd;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
        </style>
        <div class="inner-container">
            <h1>About us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
          
        </div>
    </div>
    </section>
    <!--//about us-->
     
        <!--benefits-->
        <section id="benefits">
        <div class="services-section">
      <style>
        .services-section{
  background: url(assets/img/benefits.jpg);
  background-size: cover;
  padding: 60px 0;
}
.inner-width{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
  overflow: hidden;
}
.section-title{
  text-align: center;
  color: #ddd;
  text-transform: uppercase;
  font-size: 30px;
}
.border{
  width: 160px;
  height: 2px;
  background: #82ccdd;
  margin: 40px auto;
}
.services-container{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.service-box{
  max-width: 33.33%;
  padding: 10px;
  text-align: center;
  color: #ddd;
  cursor: pointer;
}

.service-icon{
  display: inline-block;
  width: 70px;
  height: 70px;
  border: 3px solid #82ccdd;
  color: #82ccdd;
  transform: rotate(45deg);
  margin-bottom: 30px;
  margin-top: 16px;
  transition: 0.3s linear;
}
.service-icon i{
  line-height: 70px;
  transform: rotate(-45deg);
  font-size: 26px;
}
.service-box:hover .service-icon{
  background: #82ccdd;
  color: #ddd;
}
.service-title{
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.service-desc{
  font-size: 14px;
}

@media screen and (max-width:960px) {
  .service-box{
    max-width: 45%;
  }
}

@media screen and (max-width:768px) {
  .service-box{
    max-width: 50%;
  }
}

@media screen and (max-width:480px) {
  .service-box{
    max-width: 100%;
  }
}
      </style>
      <div class="inner-width">
        <h1 class="section-title">Benefits</h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-birthday-cake"></i>
            </div>
            <div class="service-title">Decor</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-apple-alt"></i>
            </div>
            <div class="service-title">Products</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-heart"></i>
            </div>
            <div class="service-title">Love</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-truck"></i>
            </div>
            <div class="service-title">Delivery</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-title">Price</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fas fa-smile"></i>
            </div>
            <div class="service-title">Mood</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!--//benefits-->

    <!-- gallery -->
    <section id="gallery">
    <div class="gallery-section">
        <style>
        .gallery-section{
  width: 100%;
  padding: 60px 0;
  background: #f1f1f1;
}

.inner-width{
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

.gallery-section h1{
  text-align: center;
  text-transform: uppercase;
  color: #333;
}

.border{
  width: 180px;
  height: 4px;
  background: #333;
  margin: 60px auto;
}

.gallery-section .gallery{
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: center;
}

.gallery-section .image{
  flex: 25%;
  overflow: hidden;
  cursor: pointer;
}

.gallery-section .image img{
  width: 100%;
  height: 100%;
  transition: 0.4s;
}

.gallery-section .image:hover img{
  transform: scale(1.4) rotate(15deg);
}

@media screen and (max-width:960px) {
  .gallery-section .image{
    flex: 33.33%;
  }
}

@media screen and (max-width:768px) {
  .gallery-section .image{
    flex: 50%;
  }
}

@media screen and (max-width:480px) {
  .gallery-section .image{
    flex: 100%;
  }
}

        </style>
      <div class="inner-width">
      <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Gallery</h2>
                </div>
        <div class="border"></div>
        <div class="gallery">

          <a href="assets/img/gallery/gal1.jpg" class="image">
            <img src="assets/img/gallery/gal1.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal2.jpg" class="image">
            <img src="assets/img/gallery/gal2.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal3.jpg" class="image">
            <img src="assets/img/gallery/gal3.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal4.jpg" class="image">
            <img src="assets/img/gallery/gal4.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal5.jpg" class="image">
            <img src="assets/img/gallery/gal5.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal6.jpg" class="image">
            <img src="assets/img/gallery/gal6.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal7.jpg" class="image">
            <img src="assets/img/gallery/gal7.jpg" alt="">
          </a>

          <a href="assets/img/gallery/gal8.jpg" class="image">
            <img src="assets/img/gallery/gal8.jpg" alt="">
          </a>

        </div>
      </div>
    </div>


  <script>
    $(".gallery").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery:{
        enabled: true
      }
    });
  </script>
  </section>
        <!--// gallery -->


    <!--our team-->
    <section id="team">
    <div class="team-section">
    <style>
      .team-section{
  background: #f1f1f1;
  text-align: center;
}
.inner-width{
  max-width: 1200px;
  margin: auto;
  padding: 40px;
  color: #333;
  overflow: hidden;
}
.team-section h1{
  font-size: 20px;
  text-transform: uppercase;
  display: inline-block;
  border-bottom: 4px solid;
  padding-bottom: 10px;
}
.pe{
  float: left;
  width: calc(100% / 3);
  overflow: hidden;
  padding: 40px 0;
  transition: 0.4s;
}
.pe:hover{
  background: #ddd;
}
.pe img{
  width: 120px;
  height: 120px;
}
.p-name{
  margin: 16px 0;
  text-transform: uppercase;
}
.p-des{
  font-style: italic;
  color: #3498db;
}
.p-sm{
  margin-top: 12px;
}
.p-sm a{
  margin: 0 4px;
  display: inline-block;
  width: 30px;
  height: 30px;
  transition: 0.4s;
}
.p-sm a:hover{
  transform: scale(1.3);
}
.p-sm a i{
  color: #333;
  line-height: 30px;
}
@media screen and (max-width:600px) {
  .pe{
    width: 100%;
  }
}
    </style>
    <div class="inner-width">
      <h1>Our team</h1>
      <div class="pers">


        <div class="pe">
          <img src="assets/img/team/person1.jpg" alt="">
          <div class="p-name">Someone</div>
          <div class="p-des">Designer</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="pe">
          <img src="assets/img/team/person2.jpg" alt="">
          <div class="p-name">Someone</div>
          <div class="p-des">Designer</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="pe">
          <img src="assets/img/team/person3.jpg" alt="">
          <div class="p-name">Somebody</div>
          <div class="p-des">Cook</div>
          <div class="p-sm">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

      </div>

    </div>
  </div>
  </section>




   <!--contact-->
    <section id="contact" style="background-image: url('assets/img/contact-us-background.jpg');background-size: cover;">
  <div class="containera">
     <div class="row">
       <div class="col-lg-6 m-auto">
          <div class="card mt-5">
             <div class="card-title">
             <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" action ="logged-in.php" name="contactForm" method="post">
                        <div class="form-row">
                            <div class="col col-md-6">
                            <div class="card-body">
                            <input type="text" name="name_message" placeholder="Name" class="form-control mb-2">
                 <input type="email" name="email_message" placeholder="email" class="form-control mb-2">
                 <textarea name="text_message" class="form-control mb-2" placeholder="Text"></textarea>
                 
                                
                                <input class="btn btn-primary btn-xl text-uppercase" type="submit" name="someAction" value="Send" />
                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        $username=$email=$text="";
        //$username=$_POST('name_message');
        $username = trim($_POST["name_message"]);
        
        $email = trim($_POST["email_message"]);
        
        $text = trim($_POST["text_message"]);

        if (!empty($username) && !empty($email) && !empty($text)){
            $sql = "INSERT INTO message(user,email,text_message)VALUES ('$username','$email','$text')";
            if (mysqli_query($link, $sql)) {
                echo '<script>alert("Message is send successfully");</script>';
            } else {
                echo "Error: " . $sql . "" . mysqli_error($link);
            }
        }
        
    }
    
    
    ?>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
    </script>
    </div>  
    </section>
    <!--footer-->
    <footer>
    <style>
    footer{
  background: #A0A0A0;
  padding: 50px 0;
}

.footer-container{
  max-width: 1000px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
}


.social-media{
  margin: 10px 0;
}

.social-media a{
  color: #001a21;
  margin-right: 25px;
  font-size: 22px;
  text-decoration: none;
  transition: .3s linear;
}

.social-media a:hover{
  color: #fc5c65;
}

.right-col h1{
  font-size: 26px;
}

.border{
  width: 100px;
  height: 4px;
  background: #fc5c65;
}

.newsletter-form{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.txtb{
  flex: 1;
  padding: 18px 40px;
  font-size: 16px;
  color: #293043;
  background: #ddd;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  min-width: 260px;
}

.btn{
  padding: 18px 40px;
  font-size: 16px;
  color: #f1f1f1;
  background: #fc5c65;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  margin-left: 20px;
  cursor: pointer;
  transition: opacity .3s linear;
}

.btn:hover{
  opacity: .7;
}

.page-content{
  min-height: 100vh;
  font-size: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

@media screen and (max-width:960px) {
  .footer-container{
    max-width: 600px;
  }
  .right-col{
    width: 100%;
    margin-bottom: 60px;
  }

  .left-col{
    width: 100%;
    text-align: center;
  }
}


@media screen and (max-width:700px){
  .btn{
    margin: 0;
    width: 100%;
    margin-top: 20px;
    }
}

    </style>
    <div class="audio">
<style>
.audio{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: auto;
    grid-gap: 10px;
    grid-template-areas:
    "status status status"
    "play pause restart";
}
#status{
    grid-area: status;
}
#play{
    grid-area: play;
}
#pause{
    grid-area: pause;
}
#restart{
    grid-area: restart;
}
</style>
    <div id="status" style="color:red; text-align: center; font-size: 20px;">Status: Loading</div>
    <button id="play" class="btn btn-primary">Play</button>
    <button id="pause" class="btn btn-primary">Pause</button>
    <button id="restart" class="btn btn-primary">Restart</button>
</div>
<script>
   $(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', 'hotel1.mp3');
    
    audioElement.addEventListener('ended', function() {
        this.play();
    }, false);
    
    audioElement.addEventListener("canplay",function(){
        $("#status").text("Status: Ready to play").css("color","green");
    });
    
    
    $('#play').click(function() {
        audioElement.play();
        $("#status").text("Status: Playing");
    });
    
    $('#pause').click(function() {
        audioElement.pause();
        $("#status").text("Status: Paused");
    });
    
    $('#restart').click(function() {
        audioElement.currentTime = 0;
    });
});
</script>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          <p class="rights-text">© 2021 Created By Razakov Abay All Rights Reserved.</p>
        </div>

        <div class="right-col">
          
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
            <input type="submit" class="btn" value="submit">
          </form>
        </div>
      </div>
    </footer>
    <!--//footer-->
   
   
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>

    
    <script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script>

</body>
</html>