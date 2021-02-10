<?php  
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AUTOSALLONI YJET | 
    <?php 

        if($page == 'index'){
            echo 'Home';
        }else if($page == 'cars'){
            echo 'Products';
        }else if($page == 'about'){
            echo 'About';
        }else if($page == 'contact'){
            echo 'Contact';
        }else if($page == 'login'){
            echo 'Login';
        if(isset($_SESSION['email'])){
            header("Location: index.php");
        }
        }else if($page == 'register'){
            echo 'Register';
            if(isset($_SESSION['email'])){
                header("Location: index.php");
            }
        }else if($page == 'cardetails'){
            echo 'Car Details';
        }


    ?> 
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="js/script.js"></script>

</head>

<body>
    <header>
        <div class="topnav">
            <div class="container">
                <div class="logo">
                    <h3>AutoSalloni YJET</h3>
                </div>
                <div class="links">
                <?php
                        if(isset($_SESSION['role'])){
                            if( $_SESSION['role'] == "Admin"){

                            

                    ?>
                    <a href="admin.php">Admin Panel</a>

                        <?php }} ?>
                    <a class="<?php if($page == 'index'){echo 'active';}?>" href="index.php">Home</a>
                    <a class="<?php if($page == 'cars'){echo 'active';}?>" href="cars.php">Cars</a>
                    <a class="<?php if($page == 'about'){echo 'active';}?>" href="about.php">About</a>
                    <a class="<?php if($page == 'contact'){echo 'active';}?>" href="contact.php">Contact</a>
                    <?php
                        if(isset($_SESSION['email'])){

                    ?>
                    <button class="login-design" onclick="location.href='logout.php'" type="button">
                        Logout</button>

                        <?php }else{ ?>
                    <button class="login-design" onclick="location.href='login.php'" type="button">
                        Login</button>
                        <?php } ?>
                </div>
            </div>
        </div>
    </header>