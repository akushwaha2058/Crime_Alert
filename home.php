<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

   <a href="home.php" class="logo">CrimeAlert</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="notification.php">CrimeAlert</a>
      <a href="userlogin.php">User Login <i class="fa fa-user"></i></a>
      <a href="official_login.php">Offical Login <i class="fa fa-user"></i></a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home">
 <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/front.jpg) no-repeat">
            <div class="content">
               <span>Have a Complaint?</span>
               <h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
               <a href="registration.php" class="btn">Sign up!</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide.jpg) no-repeat">
            <div class="content">
            <span>Have a Complaint?</span>
               <h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
               <a href="registration.php" class="btn">Sign up!</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/home-slide1.jpg) no-repeat">
            <div class="content">
            <span>Have a Complaint?</span> 
               <h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
               <a href="registration.php" class="btn">Sign up!</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/crime.png" alt="">
         <h3>CrimeAlert</h3>
      </div>

      <div class="box">
         <img src="images/file.png" alt="">
         <h3>File Complaint</h3>
      </div>

      <div class="box">
         <img src="images/view.png" alt="">
         <h3>View Complaint</h3>
      </div>

      <div class="box">
         <img src="images/police.png" alt="">
         <h3>Police Investigation</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/abou-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>The Crime alert system which is a Web application designed in PHP  which aims to provide crime management solutions such as filing of FIR  and checking its status accessible to everyone</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->



<section class="home-login">

   <h1 class="heading-title"> Login </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-a.jpg" alt="">
         </div>
         <div class="content">
            <h3>User Login</h3>
            <p>User must login to file complain.</p>
            <a href="userlogin.php" class="btn">Login!</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-b.jpg" alt="">
         </div>
         <div class="content">
            <h3>Police Login</h3>
            <p>Police must login to take action!</p>
            <a href="policelogin.php" class="btn">Login!</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-c.jpg" alt="">
         </div>
         <div class="content">
            <h3>Offical Login</h3>
            <p>Incharge/Headquater must login to acees information</p>
            <a href="official_login.php" class="btn">Login!</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="notification.php" class="btn">Crime Alert</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Register For free</h3>
      <p>Register to be a member and file a complain easily from your home!<br>Save Your Time!</p>
      <a href="register.php" class="btn"> Signup now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="help.php"><i class="fas fa-angle-right"></i> Help</a>
         <a href="contact.html"> <i class="fas fa-phone"></i> Telephone Directory</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="feedback.php"> <i class="fas fa-angle-right"></i> Feedback</a>
         <a href="Privacypolicy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +01-4567989 </a>
         <a href="#"> <i class="fas fa-phone"></i> +01-4432598 </a>
         <a href="#"> <i class="fas fa-envelope"></i> akushwaha2058@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kalaiya, Nepal </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/amrita.kushwaha.528/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/AmritaK63581036/"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/amrita.kushwaha.528/"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit">  <span>Crime Alter 2022</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>