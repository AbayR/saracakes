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
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel = "icon" href = "cake.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
<a class="navbar-brand" href="logged-in.php">
      <div class="logo-image">
            <img src="Saracakes.png" class="img-fluid">
      </div>
</a>
<style>
    .logo-image{
    width: 90px;
    height: 90px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: -6px;
}
    </style>
	<ul class="links">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="logged-in.php">Home</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about-section">About us</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#benefits">Benefits</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="reservation.php">Order</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacts</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
	</ul>
	<label for="nav-toggle" class="icon-burger">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</label>
</nav>
<!--landing page-->
<div class="container-fluid padding" style="margin-top:200px">
	<div class="row padding">
		<div class="col-lg-6">
			<h2>About healthy foods</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			<br>
			<a href="logged-in.php" class="btn btn-primary">Learn more</a>
		</div>
		<div class="col-lg-6">
    <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://images.pexels.com/photos/1857157/pexels-photo-1857157.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://images.pexels.com/photos/959079/pexels-photo-959079.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://images.pexels.com/photos/1005406/pexels-photo-1005406.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
		</div>
	</div>
</div>

</div>

<style>
  /* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1000000s;
  animation-name: fade;
  animation-duration: 10000s;
}

@-webkit-keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}
</style>
<script>
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
 <!-- gallery -->
 <section id="gallery">
    <div class="gallery-section">
        <style>
        .gallery-section{
  width: 100%;
  padding: 0px 0;
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
  height: 2px;
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
                    <h2 class="text-uppercase section-heading">Menu</h2>
                </div>
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
   
		<div class="col-lg-12 text-center" style="padding: 1px; margin-bottom:20px;">
																<button class="btn btn-success" onclick=" window.open('https://forms.gle/AHThcmD2BmDWYUT76','_blank')"> Order</button>
                                                            </div>
                                                        </div>
		
		
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="reservation/js/jquery.hislide.js" ></script>
		<script>
			$('.slide').hiSlide();
		</script>
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
  margin: 20px 0;
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
    <div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category of cake">
    <ul id="myMenu">
      <li><a href="logged-in.php">Butter Cake</a></li>
      <li><a href="#">Pound Cake</a></li>
      <li><a href="#">Sponge Cake</a></li>
      <li><a href="#">Genoise Cake</a></li>
      <li><a href="#">Biscuit Cake</a></li>
      <li><a href="#">Angel Food Cake</a></li>
      <li><a href="#">Chiffon Cake</a></li>
      <li><a href="#">Baked Flourless Cake</a></li>
      <li><a href="#">Unbaked Flourless Cake</a></li>
    </ul>
  </div>
  
</div>

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
<style>
  /* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 30%;
}

.left h2 {

  padding-left: 8px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}

</style>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-media">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          <p class="rights-text">&copy; 2021 Created By Razakov Abay All Rights Reserved.</p>
        </div>

        <div class="right-col">
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Enter Your Email">
			  <a href='index_back.php'><input type="submit" class="btn" value="submit"> </a>
			  
      
          </form>
        </div>
      </div>
    </footer>
    <!--//footer-->
    </body>
    </html>

    
