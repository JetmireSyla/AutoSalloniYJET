<?php $page = 'about'; require("includes/header.php"); 
include_once 'controller/aboutController.php';
  
?>

    <div class="home-banner-about">
    </div>

    <div class="about-us">
        <div class="heading-design">
            <h1>ABOUT US</h1>


            <?php 

                $aboutController = new AboutController();
                  $result = $aboutController->GetAboutById(1);
                  
            ?>

        </div>
        <h2><?php echo $result['tittle'];?></h2> 
        <p><?php echo $result['description']; ?></p>
            
    </div>

<!-- 
    <div class="div-lastcars">
        <div class="container">
            <div class="heading-design">
                <h1>HOW IT WORKS</h1>
            </div>
            <div class="howitworks">
                <div class="box">
                    <img src="img/1.jpg" alt="Mercedes-Benz" width="250" height="180" style="object-fit: cover;">
                    <h3>MAKE AN APPOINTMENT</h3>
                </div>
                <div class="box">
                    <img src="img/2.jpg" alt=" BMW" width="250" height="180" style="object-fit: cover;">
                    <h3>SELECT SERVICES</h3>
                </div>
                <div class="box">
                    <img src="img/3.jpg" alt="Audi" width="250" height="180" style="object-fit: cover;">
                    <h3>SELECT QUOTE,
                        </br>CONFIRM REQUEST</h3>
                </div>
                <div class="box">
                    <img src="img/4.jpg" alt="Porsche" width="250" height="180" style="object-fit: cover;">
                    <h3>GET YOUR CAR</h3>
                </div>
            </div>
        </div>
    </div> -->
    
<?php require("includes/footer.php"); ?> 