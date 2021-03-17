<?php $page = 'cardetails'; require("includes/header.php"); 
include_once 'controller/carController.php';
$carController = new carController();
$result = $carController->GetCarById($_GET["car_id"]);

  

?>


        

    <div class="cardetails">
        <div class="container">
            <div class="cardetails-heading">
                <h1><?php echo $result['manufacturer']?></h1>
            </div>
            <div class="cardetails-img">
                <img src="<?php echo $result['image']?>" alt="Mercedes-Benz" width="100%" height="450" style="object-fit: cover;">
            </div>

            <div class="details-form">
            <p><b>MODEL: </b><?php echo $result['model']?></p>
            <p><b>YEAR: </b><?php echo $result['year']?></p>
            <p><b>TRANSIMISSION: </b><?php echo $result['transmission']?></p>
            <p><b>MILEAGE: </b><?php echo $result['mileage']?></p>
            <p><b>FUEL: </b><?php echo $result['fuel']?></p>
            <p><b>SEATS: </b><?php echo $result['seats']?></p>
            <p><b>DOORS: </b><?php echo $result['doors']?></p>
            <p><b>COLOR: </b><?php echo $result['color']?></p>
            <h2>PRICE: <?php echo $result['price']?></h2>
        </div>
        </div>
    </div>

    
    <div class="div-lastcars">
        <div class="container">
            <div class="heading-design">
                <h1>LATEST CARS</h1>
            </div>
            <?php 
                  $carController = new carController();
                  $result = $carController->GetLastCars();
                  foreach ($result as $car){ ?>
            <a href="cardetails.php?car_id=<?php echo $car['car_id']; ?>" class="a-design">
                <div class="box">
                <img src="<?php echo $car['image']; ?>" alt="<?php echo $car['model']; ?>">
                <h3><?php echo $car['manufacturer']; ?><br /><?php echo $car['model']; ?></h3>
            </div>
            </a>
            <?php }?>
        </div>
    </div>

<?php require("includes/footer.php"); ?> 