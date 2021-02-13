<?php $page = 'register'; require("includes/header.php"); 
include_once 'controller/userController.php';

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $POST['confirmpass'];
        
      
            $userController = new UserController();
            $userController->register($firstname, $lastname, $email, $password);

   
    }

?>

   <div class="register">
       <div class="register-form">
        <h1>Register Here</h1>
        <form action="#" method="POST" id="register-form" enctype="multipart/form-data" onsubmit="return validate()"> 
        <div class="input-box">
            <input id="firstname" name="firstname" type="text" placeholder="First Name">
        </div>
        <div class="input-box">
            <input id="lastname" name="lastname" type="text" placeholder="Last Name">
        </div>
        <div class="input-box">
            <input id="email" name="email" type="email" placeholder="Email">
        </div>
        <div class="input-box">
            <input id="password" name="password" type="password" placeholder="Enter Password">
        </div>
        <div class="input-box">
            <input id="confirmpass" name="confirmpass" type="password" placeholder="Confirm Password">
        </div>
        <button onclick="validate()" type="submit" name="submit" class="register-button">Register</button>
        <p>Already have an account? <a href="login.php" > Login</a></p>
        <p id="error" style="color: black;"></p>
        </form>
    </div>
   </div> 

<?php require("includes/footer.php"); ?> 