<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc9d3996ec.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="navbar">
       <div class="nav-logo col-2">
         <img src="images/logo.png" alt="logo">


       </div>
       <div class="nav-heading col-5">
       <h3>Mononguru Coaching Center</h3>
       <p>We Provide Quality Eduaction</p>


       </div>
    <div class="navbar-menu col-5"> 
    <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About-us</a></li>
    <li><a href="#">Contact</a></li>
    
    <li><a href="#">Login</a>
        <div class="sub-menu">
		
            <form action="" method="post">
			<ul>
            
              <li><input type="submit" name="admin_login" value="Admin Login"></li><br>
               <li><input type="submit" name="student_login" value="Student Login"></li>
            </ul>
            </form>
		
        
        </div>
            <?php
                 if(isset($_POST['admin_login'])){
                     header("Location: admin_login.php");
                 }
                 if(isset($_POST['student_login'])){
                    header("Location: student_login.php");
                }

            ?>
          
        
          
     </li>
    </ul>      
 </div>
</div>
<!-- banner -->
<section class="banner">
    <div class="container">
       <div class="banner-menu">
        <h1>Mononguru Coaching Center</h1>
        <p>We Provide Quality Eduaction</p>
        <input type="buttom" class="btn1" value="About us">
        <input type="buttom" class="btn2" value="Contact us">
        </div>

</div>
</section>
<!-- why choose us -->
<section class="choose">
    <h1>Why Choose Us</h1>
    <div class="container">
        <div class="choose-menu">
            <div class="icon-one">
                <i class="fas fa-school"></i>
                <h3>Coaching Campus</h3>
                <p>The diversification and expansion of the School through adoption of new and topically relevant
                courses .</p>
            </div>
            <div class="icon-two">
                <i class="fas fa-laptop"></i>
                <h3>Computer Education</h3>
               <p>Computers have taken over a major part of human activities and enabled people to have more leisure by reducing classes.</p>
            </div>
            <div class="icon-three">
                <i class="fas fa-music"></i>
                <h3>Music</h3>
           <p>Training of Vocal as well as instrumental music is provided according to the
                taste and interest of the students from Std. 
               </p>
            </div>
            <div class="icon-four">
                <i class="fas fa-flask"></i>
                <h3>Science Laboratory</h3>
               <p>The school has a well equipped laboratory of Physics, Chemistry, Biology, Computer Science.</p>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <h1>Gallery</h1>
    <div class="container">
        <div class="gallery-image">
            <img src="images/img-01.jpg" alt="img1" class="img-01">
            <img src="images/img-02.jpg" alt="img2" class="img-02">
            <img src="images/img-03.jpg" alt="img3" class="img-03">
        </div>
    </div>
</section>
<section class="footer1">
    <div class="container">
        <div class="footer1-content">
            <div class="content-01">
                <h1>About Us</h1>
                <p>Mononguru Coaching Center was established in 2020 in Dhaka.We are working with Positive Attitued.</p>
                <input type="buttom" value="Read More" class="btn3">
            </div>
            <div class="content-02">
                <h1>About</h1>
                <ul>
                    <li>About School</li>
                    <li>Director Message</li>
                    <li>Principal Message</li>
                    <li>Our Motto</li>
                </ul>
            </div>
            <div class="content-03">
                <h1>Academics</h1>
                <ul>
                    <li>Admission Procedure</li>
                    <li>Sports Corner</li>
                    <li>Library</li>
                    <li>Dimensions Of Coaching Center</li>
                    
                </ul>
            </div>
            <div class="content-04">
                <h1>Social Links</h1>
                <i class="fa fa-facebook" ></i>
                <i class="fa fa-twitter" ></i>
                <i class="fa fa-instagram" ></i>
            </div>
        </div>
        
    </div>
</section>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-content1">
                <p>Copyright © All Rights Reserved</p>
            </div>
            <div class="footer-content2">
                <p>Designed by Mohiuddin&Sohel</p>
            </div>
        </div>
            
    
    </div>
</footer>
</body>
</html>