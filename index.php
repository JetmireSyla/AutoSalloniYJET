<?php $page = 'index'; require("includes/header.php"); 
include_once 'controller/carController.php';


?>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });
</script>
<div class="home-banner">
</div>

<div class="container">
    <div class="left-box">
        <h1>WELCOME</h1>
        <p>If you want to buy a new car, you are in the right place</p>
        <a href="cars.php" class="button-design"><b>View Cars</b></a>
    </div>
</div>


<div class="div-lastcars">
    <div class="container">
        <div class="heading-design">
            <h1>LATEST CARS</h1>
            <div class="owl-carousel owl-theme">
                <?php 
                  $carController = new carController();
                  $result = $carController->GetLastCars();
                  foreach ($result as $car){ ?>
                <div class="item">
                    <a href="cardetails.php?car_id=<?php echo $car['car_id']; ?>" class="a-design">
                        <div class="box-home">
                            <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['model']; ?>">
                            <h3><?php echo $car['manufacturer']; ?><br /><?php echo $car['model']; ?></h3>
                        </div>
                    </a>
                </div>
                <?php }?>

            </div>
        </div>




    </div>

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


<div class="containter">
    <div class="heading-design">
        <h1>OUR SERVICES</h1>
    </div>
    <div class="the-service">
        <div class="icon-box">
            <i style="color: #abafb3;" class="fas fa-road fa-6x"></i>
            <h2>Service</h2>
        </div>
        <div class="icon-box">
            <i style="color: #abafb3;" class="fas fa-truck-loading fa-6x"></i>
            <h2>Car Transport</h2>
        </div>
        <div class="icon-box">
            <i style="color:#abafb3" class="fas fa-tools fa-6x"></i>
            <h2>Replacement Part</h2>
        </div>
    </div>
</div>


<?php require("includes/footer.php"); ?>