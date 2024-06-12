<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script> <!-- GSAP link -->
    <title>Document</title>
</head>
<body>

    <header class="header">
        <a href="#" class="logo">BlueWaveTech</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="product.php">Product</a>
            <a href="contact.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <div class="nav-bg"></div>

    <div class="product-card-container">
        <!-- Product Card 1 -->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/p1.jpg" alt="white">
                <img class="blue" src="images/p2.webp" alt="blue">
                <img class="black" src="images/p3.jpg" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">iPhone 13 pro max</span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">680$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>

        <!-- Other product cards can be added similarly with unique content -->

        <!--Produkti 2-->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/p4.jpg" alt="white">
                <img class="blue" src="images/p5.jpg" alt="blue">
                <img class="black" src="images/p6.webp" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">Smart watch pro</span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">900$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>


          <!--Produkti 3-->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/p7.webp" alt="white">
                <img class="blue" src="images/p8.jpg" alt="blue">
                <img class="black" src="images/p9.jpg" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">Samsung Note 10 </span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">1680$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>


          <!--Produkti 4-->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/p10.webp" alt="white">
                <img class="blue" src="images/p11.jpeg" alt="blue">
                <img class="black" src="images/p12.avif" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">Samsung Tv</span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">500$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>


          <!--Produkti 5-->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/13.jpg" alt="white">
                <img class="blue" src="images/p14.jpeg" alt="blue">
                <img class="black" src="images/p15.jpg" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">Digital Camera</span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">250$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>

          <!--Produkti 6-->
        <div class="product-card">
            <div class="logo-cart">
                <div class="back">
                    <i class="fi fi-sr-angle-left"></i>
                    <span>back</span>
                </div>
                <i class="fi fi-rr-shopping-cart"></i>
            </div>
            <div class="main-images">
                <img class="white active" src="images/p17.jpg" alt="white">
                <img class="blue" src="images/p18.jpg" alt="blue">
                <img class="black" src="images/p19.jpg" alt="black">
            </div>
            <div class="show-details">
                <span class="show_name">Watch</span>
            </div>
            <div class="color-price">
                <div class="color-option">
                    <span class="color">color</span>
                    <div class="circles">
                        <span class="circle white active" data-color="white"></span>
                        <span class="circle blue" data-color="blue"></span>
                        <span class="circle black" data-color="black"></span>
                    </div>
                </div>
                <div class="price">
                    <span class="price_num">130$</span>
                </div>
            </div>
            <div class="button">
                <button>Add to cart</button>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.product-card').forEach(card => {
            const circles = card.querySelectorAll('.circle');
            const images = card.querySelectorAll('.main-images img');

            circles.forEach(circle => {
                circle.addEventListener('click', () => {
                    card.querySelector('.circle.active').classList.remove('active');
                    circle.classList.add('active');

                    const color = circle.getAttribute('data-color');
                    images.forEach(img => {
                        if (img.classList.contains(color)) {
                            img.classList.add('active');
                        } else {
                            img.classList.remove('active');
                        }
                    });
                });
            });
        });

        gsap.from(".logo-cart",
        {
            opacity: 0,
            duration: 2,
            delay: 1,
            y: -25,
            ease: "expo.out",
            stagger: 0.2,
        });

        gsap.from(".main-images",
        {
            opacity: 0,
            duration: 2,
            delay: 1,
            y: -25,
            ease: "expo.out",
            stagger: 0.2,
        });

        gsap.from(".show_name",
        {
            opacity: 0,
            duration: 2,
            delay: 1.5,
            y: -25,
            ease: "expo.out",
            stagger: 0.2,
        });

        gsap.from(".color-price",
        {
            opacity: 0,
            duration: 1.8,
            delay: 1.8,
            y: -25,
            ease: "expo.out",
            stagger: 0.2,
        });

        gsap.from(".button",
        {
            opacity: 0,
            duration: 2,
            delay: 2,
            y: 25,
            ease: "expo.out",
            stagger: 0.2,
        });
    </script>
</body>
</html>
