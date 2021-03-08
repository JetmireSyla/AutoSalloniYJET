<?php


$page = 'contact'; require("includes/header.php"); 
include_once 'controller/contactController.php';
include_once 'controller/messageController.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
    
        $messageController = new messageController();
        $messageController->Insert($email,$subject,$message);
        
}

?>


    <div class="home-banner-contact">
    </div>


            

    <div class="contact">
        <div class="container">
            <div class="contact-info">
                <h2 style="color: #B5182D;">
                    Contact Information
                </h2>

                <?php 

                $contactController = new ContactController();
                $result = $contactController->GetContactById(1);
                  
                ?>

                <p><i style="color: black;" class="fas fa-map-marker-alt fa-1x">
                    </i><b> Address:</b> </p>
                </p>
                <p> <?php echo $result['address']; ?></p>
                <p style="color:#B5182D ;"><b>Salon - Sales:</b> </p>
                <p><i style="color: black;" class="fas fa-phone-alt fa-1x"></i>
                    </i> <?php echo $result['phone_number_sales'];?></p>
                </p>
                <p><i style="color: black;" class="fas fa-phone-alt fa-1x"></i>
                    </i> <?php echo $result['phone_number_sales2'];?> </p>
                </p>
                <p style="color:#B5182D ;"><b>Administration & Service:</b> </p>
                <p><i style="color: black;" class="fas fa-phone-alt fa-1x"></i>
                    </i> <?php echo $result['phone_number_administration'];?></p>
                </p>
                <p><i style="color: black;" class="far fa-envelope fa-1x"></i>
                    </i><b> Email:</b> <?php echo $result['email_1'];?></p>
                </p>
                <p><i style="color: black;" class="far fa-envelope fa-1x"></i>
                    </i><b> Email:</b> <?php echo $result['email_2'];?></p>
                </p>
               
            </div>
            <div class="contact-form">
                <form action="#" method="POST" id="contact-form" enctype="multipart/form-data" onsubmit="return validatecontact()"> 

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Your email..">

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject..">

                    <label for="Message">Message</label>
                    <textarea id="message" name="message" placeholder="Write something.."
                        style="height:100px"></textarea>
                        <p id="error" style="color: black;"></p>
                    <input onclick="validatecontact()" type="submit" name="submit" value="Submit">
                    

                </form>
            </div>

        </div>
    </div>

<?php require("includes/footer.php"); ?> 