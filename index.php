<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitory Booking !</title>

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


    <!-- home section starts here -->
    <section class="home">
        <div class="image">
            <img src="img/home-banner.svg" alt="">
        </div>
        <div class="content">
            <div class="cities">
                <img src="img/cities.png" alt="">
            </div>
            <h3>Book your Room Now !</h3>
            <p>
                Book and customize your rooms as you want to!
            </p>
            <a href="login.php" class="btn">get started</a>
        </div>
    </section>
    <!-- home section ends here -->

    <!-- categories section starts here -->
    <section class="category">
        <a href="comfroom.html" class="box">
            <img src="img/room.svg" alt="">
            <h3>Comfortable Rooms</h3>
        </a>
        <a href="comhygiene.html" class="box">
            <img src="img/washroom.svg" alt="">
            <h3>Complete Hygeine</h3>
        </a>
        <a href="healthyfood.html" class="box">
            <img src ="img/food.svg" alt="">
            <h3>Healthy Food</h3>
        </a>
        <a href="clandlib.html" class="box">
            <img src="img/comlab.svg" alt="">
            <h3>ComLab & Library</h3>
        </a>
        <a href="annualfun.html" class="box">
            <img src="img/functions.svg" alt="">
            <h3>Annual Functions</h3>
        </a>
    </section>
    <!-- categories section ends here -->




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