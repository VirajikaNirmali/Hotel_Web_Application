<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">HotelCAPEGalle.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href='sign_in.php'>Admin</a>
      <a href='sign_up.php'>Sign Up</a>
      
      <!-- <?php
if (isset($_SESSION['User_Fname'])){
  echo "
      
      <li class='nav-item'>
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
      </li>
";
}else{
  echo'
      <li class="nav-item">
      <a class="nav-link" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
   
  ';
}

?> -->
   </nav>


   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Our room Packeges</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Junior Suite</h3>
            <p>Sleeps 4 | 2 Queen<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>
            Breakfast Included
            Deposit Required
            $634.40
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
          <div class="content">
            <h3>Luxury Villa</h3>
            <p>Sleeps 3 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
            Deposit Required
            $719.34
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Master Suite</h3>
            <p>Sleeps 3 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
            Deposit Required
            $747.65
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Premier Villa</h3>
            <p>Sleeps 3 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
            Deposit Required
            $794.84
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Prestige Villa</h3>
            <p>Sleeps 3 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
            Deposit Required
            $870.34
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Grand Villa</h3>
            <p>Sleeps 4 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
            Deposit Required
            $918.57
            Per Night
            Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Pool Villa</h3>
            <p>Sleeps 2 | 1 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>reakfast Included
            Deposit Required
            $1,012.95
            Per Night
            Excluding Taxes & Fee</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Duplex Pool Villa</h3>
            <p>Sleeps 6 | 2 King<br></p><h2><u>Bed & Breakfast Rate</u></h2>
            <p>Breakfast Included
               Deposit Required
               $1,883.28
               Per Night
               Excluding Taxes & Fees</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      

      

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->
















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94-779917404 </a>
         <a href="#"> <i class="fas fa-envelope"></i> capehotel@gmail.com</a>
         <a href="#"> <i class="fas fa-map"></i> 123,Galle,Sri Lanka. </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-whatsapp"></i> WhatsApp </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>
   </div>

   <div class="credit"> created by <span> Virajika Nirmali </span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>