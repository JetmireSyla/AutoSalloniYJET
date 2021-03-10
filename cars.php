<?php $page = 'cars'; require("includes/header.php");
include_once 'controller/carController.php';


?>

 
    <div class="home-banner-cars">

    </div>


    <div class="carlogos">
        <div class="container">
            <div class="logo-box">
                <img src="img/mercedes.png" alt="Mercedes-Benz" height="80" style="object-fit: cover;">
            </div>
            <div class="logo-box">
                <img src="img/bmw.png" alt="BMW" height="80" style="object-fit: cover;">
            </div>
            <div class="logo-box">
                <img src="img/audi.png" alt="Audi" height="80" style="object-fit: cover;">
            </div>
            <div class="logo-box">
                <img src="img/lamborghini.png" alt="Lamborghini" height="80" style="object-fit: cover;">
            </div>
            <div class="logo-box">
                <img src="img/volkswagen.png" alt="Volkswagen" height="80" style="object-fit: cover;">
            </div>
            <div class="logo-box">
                <img src="img/porsche.png" alt="Porsche" height="80" style="object-fit: cover;">
            </div>
        </div>
    </div>


    <div class="div-lastcars">
        <div class="container">
            <div class="heading-design">
                <h1>ALL CARS</h1>
            </div>
            <?php 
                  $carController = new carController();
                  $result = $carController->GetCars();
                  foreach ($result as $car){ ?>
 
            <a  href="cardetails.php?car_id=<?php echo $car['car_id']; ?>" class="a-design">
            <div class="box">           
                <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['model']; ?>">
                <h3><?php echo $car['manufacturer']; ?><br /><?php echo $car['model']; ?> </h3>
            </div>
            </a>
                  <?php }?>
            
        </div>
    </div>

<?php require("includes/footer.php"); ?> 