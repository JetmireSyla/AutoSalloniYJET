<?php $page = 'login'; require("includes/header.php"); 
include_once 'controller/userController.php';
$message = "";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $userController = new UserController();
        $result = $userController->login($email, $password);

        if($result === true){
            $the_role = $_SESSION['role'];
            if($the_role == "Admin"){
                header("Location: admin.php");
            }else{
                header("Location: index.php");
            }
           
        }else{
            $message = "Wrong email or password!";
        }
    }
?>

    <div class="register">
        <div class="register-form">
            <h1>Login Here</h1>
            <form action="#" method="POST" id="login-form" enctype="multipart/form-data" onsubmit="return validate()"> 
            <div class="input-box">
                <input id="email" name="email" type="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input id="password" name="password" type="password" placeholder="Enter Password">
            </div>
            <button onclick="validatelogin()" type="submit" name="submit" class="register-button">Login</button>
            <p>Create an account? <a href="register.php"> Register</a></p>
            <p id="error" style="color: black;"></p>
            <p id="error" style="color: black;"><?php echo $message; ?></p>
            </form>
        </div>
    </div>

<?php require("includes/footer.php"); ?> 