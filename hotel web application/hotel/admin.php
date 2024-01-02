
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
   <link rel="stylesheet" href="css/index.css"> -->



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
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
     
   </nav>


   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->



<div class="container">
    <h1>Booked Rooms and Customer details from Database</h1>
    <table class="table table-boarder">
        <thead>
            <tr>
                <th> No  </th>
                <th> Name  </th>
                <th> Email  </th>
                <th> Phone  </th>
                <th> Address  </th>
                <th> Room  </th>
                <th> Guests  </th>
                <th> Arrivals  </th>
                <th> Leaving  </th>
                <th> Action  </th>
            </tr>
        </thead>
        <tbody>
            <!-----------connect with database------------>
        <?php
        $c=1;
        $con=mysqli_connect("localhost","root","","book_db"); 
        if ($con) {
            // echo "Connection Done";
        }else{
            echo "connection Failed";
        }      
        
        ////select query start here////
        $sel="SELECT * FROM book_form ";
        $query=$con->query($sel);
        while($row=$query->fetch_assoc()){

         
        ?>
            <tr><td><?php echo $c++;?> </td>
                <td><?php echo $row['name'];?> </td>
                <td><?php echo $row['email'];?> </td>
                <td><?php echo $row['phone'];?> </td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['room'];?></td>
                <td><?php echo $row['guests'];?> </td>
                <td><?php echo $row['arrivals'];?> </td>
                <td><?php echo $row['leaving'];?> </td>
                <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>

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

</body>
</html>