<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- cdn path for font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
     integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

     <!-- custom css file  -->
     <link rel="stylesheet" href="css/main.css">

</head>
<body>

     <!-- header section starts here -->
     <div class="header">

<a href="index.php" class="logo" >
    <img src="img/main-logo.png" alt="">
 </a>
<div id="menu-btn" class="fas fa-bars"></div>

<nav class="navbar">
    <ul>

        <li><a href="index.php">home</a></li>
        <li><a href="admin/index.php">Admin</a></li>

        <!-- here we have our dropdown menu -->
        <li><a href="login.php"> 	
            Login
        </a>
        </li>

        <!-- here we also have another drop down menu -->
        <li><a href="registration.php">Register
         </a>
        </li>

        <li><a href="contact.php">contact</a></li>
        
    </ul>
</nav>
</div>
<!-- header section ends here -->

    <!-- contact section starts here -->
    <section class="contact">

        <div class="icon-container">

            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>our number</h3>
                <p>+123-456-7890</p>
                <p>+111-222-3333</p>
            </div>

            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>our email</h3>
                <p>praptimangade@gmail.com</p>
                <p>saloni_j@gmail.com</p>
                <p>arya_gaik@gmail.com</p>
                <p>jemini@gmail.com</p>
                
                
            </div>

            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>GPPune, maharastra</p>
                <p>SPPU Pune 411016, shivajinagar</p>
            </div>

        </div>

        <div class="row">

            <form action="">
                <h3>get in touch</h3>
                <input type="text" name="" id="" class="box" placeholder="Enter your name">
                <input type="number" name="" id="" class="box" placeholder="Enter your number">
                <input type="email" name="" id="" class="box" placeholder="Enter your email">
                <textarea name="" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
                <input type="submit" name="" value = "send message" id="" class="btn">
            </form>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.780518220193!2d73.82937827488588!3d18.538817882558313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf7ac9514abb%3A0x11d0cebbb7eb6392!2sGovernment%20Polytechnic%2C%20Pune!5e0!3m2!1sen!2sin!4v1682933514118!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>
    <!-- contact section ends here -->

 <!-- footer section starts here -->
 <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>explore</h3>
                <a href="index.php"> <i class="fas fa-arrow-right"></i>home </a>
                <a href="admin/index.php"> <i class="fas fa-arrow-right"></i>Admin </a>
                <a href="login.php"> <i class="fas fa-arrow-right"></i>Login </a>
                <a href="registration.php"> <i class="fas fa-arrow-right"></i>Register </a>
                <a href="contact.php"> <i class="fas fa-arrow-right"></i>contact </a>
            </div>
            <div class="box">
                <h3>categories</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Room with 2 member</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Room with 4 member</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Room with 6 member </a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>my account </a>
                <a href="#"> <i class="fas fa-arrow-right"></i>feedback </a>
                <a href="#"> <i class="fas fa-arrow-right"></i>help center</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>certification </a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i>twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i>linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i>pinterest </a>
                <a href="#"> <i class="fab fa-github"></i>github </a>
            </div>
        </div>
        <div class="credit"> © Copyright <span>Dormitory Booking</span> | all rights are reserved</div>
    </section>
    <!-- footer scetion ends here -->
    
</body>
<script src="js/script.js"></script>
</html>