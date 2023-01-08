<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

   <!-- swiper css -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  
   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
   <!-- custom css link -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
    <!-- header content -->
    <section class="header">
   
         <a href="home.php" class="logo">ArbaMinch Tour</a>

         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="destination.php">Destnation</a>
            <a href="book.php">Book</a>
         </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

    </section>

  <div class="heading" style="background: url(./images/bg.jpg) no-repeat">
    <h1>Book Now</h1>
  </div>

<!-- Book Section -->

<section class="booking">

  <h1 class="heading-title">Book Your Trip</h1>

  <form action="book_trip.php" method="post" class="book-trip">

     <div class="flex">
        <div class="inputbox">
          <span>Name:</span>
          <input type="text" placeholder="Enter Your Name" name="name">
    </div>
    <div class="inputbox">
         <span>E-mail:</span>
         <input type="email" placeholder="Enter Your Email" name="email">
    </div>
        
    <div class="inputbox">
        <span>Phone No:</span>
        <input type="number" placeholder="Enter Your Phone No." name="phone">
   </div>
   
   <div class="inputbox">
     <span>Address:</span>
     <input type="text" placeholder="Enter Your Adress" name="address">
   </div>
   
   <div class="inputbox">
     <span>Where To:</span>
     <input type="text" placeholder="Destination You Want To Go" name="location">
   </div>

   <div class="inputbox">
    <span>How Many Guests:</span>
    <input type="text" placeholder="Number Of Guests" name="guests">
  </div>
  
  <div class="inputbox">
    <span>Arrivals:</span>
    <input type="date"  name="arrival">
 </div>

 <div class="inputbox">
  <span>Leaving:</span>
  <input type="date"  name="leaving">
</div>
  
  </div>

  <input type="submit" value="submit" class="btn" name="send">
  </form>
</section>






















<!-- footer section -->

<section class="footer">
 
  <div class="box-container">

     <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
        <a href="destination.php"> <i class="fa fa-angle-right"></i>Destination</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
     </div>

     <div class="box">
        <h3>Extra Links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About Us</a>
        <a href="destination.php"> <i class="fa fa-angle-right"></i>Privacy Policy</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i>Terms Of Use</a>
    </div>

    <div class="box">
    <h3>Contact Info</h3>
        <a href="#"> <i class="fas fa-phone"></i>+251978645789</a>
        <a href="#"> <i class="fas fa-phone"></i>+251939876543</a>
        <a href="#"> <i class="fa fa-envelope"></i>arbaminchtour@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>Arba Minch, Ethiopia</a>
 </div>
    
   <div class="box">
    <h3>Follow Us</h3>
    <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
    <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
    <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
    <a href="#"> <i class="fab fa-linkedin"></i>Linkedin</a>
   </div>
  </div>

 
</section>   

















<!-- swiperjs -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Vanilla Js -->
<script src="./js/script.js"></script>
</body>
</html>