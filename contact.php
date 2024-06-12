<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    </header>
    <div class="nav-bg"></div>
    <section class="contact" data-aos="zoom-in-up">
        <div class="row">
            <div class="image" data-aos="zoom-in-right">
                <img src="images/tech3.png" alt="">
            </div>
            <form action="contact_response.php" method="post">
            	<h3 id="c3">Contact</h3>
                <div class="input-box">
                    <input type="text" id="emri" name="yourName" placeholder="Emri...">
                    <input type="text" id="mbiemri" name="yourSurname" placeholder="Mbiemri...">
                    <input type="email" id="email" name="yourEmail" placeholder="Email...">
                    <input type="number" id="nrtel" name="yourPhone" placeholder="Numri telefonit...">
                </div>
                <textarea placeholder="Mesazhi juaj këtu..." name="message" id="area" cols="30" rows="10"></textarea>
                <input type="submit" class="button1"  value="Dërgo" onclick="valido()">
            </form>
        </div>
    </section>
    
    <?php
include "pixijs1.php";
?>




    <br>
    <br>

    



    <script type="text/javascript" src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
    
</body>
</html>