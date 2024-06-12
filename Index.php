<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
	
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>
<body>
	

	<header class="header">
        <a href="#" class="logo">BlueWaveTech</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="about.php">About</a>
            <a href="product.php">Product</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <div class="nav-bg"></div>

    <div class="parallax-container">
        <img src="images/I1.png" class="parallax-image" data-speed="2" style="top: 10%; left: 15%;" alt="Image 1">
        <img src="images/I2.png" class="parallax-image" data-speed="3" style="top: 10%; left: 40%;" alt="Image 2">
        <img src="images/I3.png" class="parallax-image" data-speed="4" style="top: 55%; left: 30%;" alt="Image 3">
        <img src="images/I4.png" class="parallax-image" data-speed="5" style="top: 20%; left: 80%;" alt="Image 4">
        <img src="images/I5.png" class="parallax-image" data-speed="2" style="top: 40%; left: 10%;" alt="Image 5">
        <img src="images/I6.png" class="parallax-image" data-speed="3" style="top: 60%; left: 60%;" alt="Image 6">
        <img src="images/I7.png" class="parallax-image" data-speed="4" style="top: 80%; left: 10%;" alt="Image 7">
        <img src="images/I8.png" class="parallax-image" data-speed="5" style="top: 50%; left: 80%;" alt="Image 8">
        <header class="hero-section">
      <h1>The Marketplace for the <br>Best <span>Tech equipments</span></h1>
      <button id="B1">EXPLORE</button>
      </header>
    <div id="gallery"></div>
    </div>

<section class="category" data-aos="fade-up">
   <h3 class="heading">Category</h3>
   <div class="swiper category-slider">
      <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="img/icon-1.png" alt="">
      <h3>laptop</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="img/icon-2.png" alt="">
      <h3>tv</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="img/icon-3.png" alt="">
      <h3>camera</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="img/icon-4.png" alt="">
      <h3>phone</h3>
   </a>

   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="img/icon-5.png" alt="">
      <h3>watch</h3>
   </a>

    <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="img/icon-6.png" alt="">
      <h3>keyboard</h3>
   </a>

    </div>
      
      <div class="swiper-pagination"></div>
   </div>
</section>

<div class="container">

   

    <div class="products-container"  data-aos="flip-down">
 
       <div class="product" data-name="p-1">
          <img src="img/w1.png" alt="">
          <h3> Sony XR-A95K</h3>
          <div class="price">200€</div>
       </div>
 
       <div class="product" data-name="p-2">
          <img src="img/w2.jpeg" alt="">
          <h3>Razer Pro Type Ultra</h3>
          <div class="price">129€</div>
       </div>
 
       <div class="product" data-name="p-3">
          <img src="img/w3.png" alt="">
          <h3>TCL QM8</h3>
          <div class="price">300€</div>
       </div>
    </div>
   
</div>



<h3 class="heading-2">New arrivals</h3>

<div class="container1" data-aos="zoom-in-up">
    <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/I6.png">
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Capture every moment with stunning clarity and precision.</p>
                    <button class="Btn1" onclick="triggerToast(this)">
                        Order
                        <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                    </button>
                </div>
                <div id="toast" class="toast-message">
                    <i class="bi bi-check-circle"></i><span> Order processed!!</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/A1.png">
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Stay connected anytime, anywhere with our latest smartphone.</p>
                    <button class="Btn1">
                        Order
                        <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="images/A2.png">
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p>Experience immersive entertainment like never before with our state-of-the-art TV technology.</p>
                    <button class="Btn1">
                        Order
                        <svg class="svgIcon" viewBox="0 0 576 512"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
       
</div>


<section class="footer">
        <div class="box-container1" data-aos="zoom-in">
    
            <div class="box1">
                <h3>Our Location</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i>New York</a>
                
            </div>
    
            <div class="box1">
                <h3>Quick access</h3>
                <a href="index.html"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="produktet.html"> <i class="fas fa-arrow-right"></i>Products</a>
                <a href="contact.html"> <i class="fas fa-arrow-right"></i>Contact</a>
                
            </div>
    
    
            <div class="box1">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +383 44 323 105</a>
                <a href="#"> <i class="fas fa-envelope"></i>ecommerce@gmail.com </a>
            </div>
            
        </div>

    
    </section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript" src="script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>


</body>
</html>