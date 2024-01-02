<?php 
    session_start();
?>
<?php include_once('inc/conn.php'); ?>

<?php
    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
        $email="";
        $password="";
        $msg ="";

        $email=input_varify($_POST['email']);
        $password=input_varify($_POST['password']);

        $query2 = "SELECT * FROM tbl_user WHERE email = '{$email}' AND Pwd='{$password}' LIMIT 1";

        $Showresult = mysqli_query($conn, $query2);
        
        if($Showresult){
            if(mysqli_num_rows($Showresult) == 1){
                $User = mysqli_fetch_assoc($Showresult);
                $_SESSION['User_Fname'] = $User['Fname'];
                $_SESSION['User_Lname'] = $User['Lname'];
                header("Location:admin.php");
            }
            else{
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong> Please check your Email or Password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                } 
            }
    }
      
    

    //inbuilt function 
    function input_varify($data){
        //remove empty space from user input
        $data=trim($data);

        //remove backslash from user input
        $data=stripcslashes($data);

        //convert special charcters to html entities
        $data=htmlspecialchars($data);

        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="Plugin/bootstrap.min.css">
    <script src ="plugin/jquery.min.js"></script>
    <script src ="plugin/bootstrap.min.js"></script>
    
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/sign_up.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
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
      
      <?php
if (isset($_SESSION['User_Fname'])){
  echo "
      
      
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
      
";
}else{
  echo'
      
      <a class="nav-link" href="sign_in.php">Sign In</a>
     
      <a class="nav-link" href="sign_up.php">Sign Up</a>
      
   
  ';
}

?>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card mt-4">
                 <div class="card-header" id="card-header">
                    <h4>Sign In Form</h4>
                 </div>
                 <div class="card-body" id="card-body" >
                    
                    <form action="sign_in.php" method="POST" autocomplete="off">

                    <?php  if(!empty($msg)){echo $msg;}  ?>

                        <div class="form-group">
                  
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your Email address</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Enter Your own Password</small>
                        </div>
                      </div>
                         <div class="card-footer" id="card-footer">
                         <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                        </div>
                     </form>   
               </div>
            </div>
        </div>
    </div>
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