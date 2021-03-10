<?php $page = 'edit-cars';

    require("includes/admin-sidemenu.php");
    include_once 'controller/carController.php';
    $carController = new carController();
    $result = $carController->GetCarById($_GET["car_id"]);

  
    if(isset($_POST['submit'])){
        $carModel = new Car();


        $carModel->setCarId($_GET["car_id"]);
        $carModel->setManufacturer($_GET["manufacturer"]);
        $carModel->setModel($_POST['model']);
        $carModel->setYear($_POST['year']);
        $carModel->setTransmission($_POST['transmission']);
        $carModel->setMileage($_POST['mileage']);
        $carModel->setFuel($_POST['fuel']);
        $carModel->setSeats($_POST['seats']);
        $carModel->setDoors($_POST['doors']);
        $carModel->setColor($_POST['color']);
        $carModel->setPrice($_POST['price']);

        $carController->Update($carModel);

        header("Location: admin-cars.php");

    }
      

?>
    	
   
     
  
        <div class="admin-content">
                    <h1>EDIT CARS</h1>
                 <div>
                    <div class="add-cars">
                        <form action="#" method="POST" id="edit-car-form" enctype="multipart/form-data"> 
                            <label for="manufacturer">Manufacturer</label>
                            <input type="text" id="manufacturer" name="manufacturer" value="<?php echo $result['manufacturer']; ?>">

                            <label for="model">Model</label>
                            <input type="text" id="model" name="model" value="<?php echo $result['model']; ?>">
        
                            <label for="year">Year</label>
                            <input type="text" id="year" name="year" value="<?php echo $result['year']; ?>">
        
                            <label for="transmission">TRANSMISSION</label>
                            <select id="transmission" name="transmission"> 
                            <?php if($result['transmission'] == 'Automatic') { ?>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>

                            <?php }else if($result['transmission'] == 'Manual'){ ?>
                                <option value="Manual">Manual</option>
                                <option value="Automatic">Automatic</option>
                            <?php } ?>

                            </select>

                            <label for="mileage">Mileage</label>
                            <input type="text" id="mileage" name="mileage" value="<?php echo $result['mileage']; ?>">

                            <label for="fuel">Fuel</label>
                            <select id="fuel" name="fuel">
                                <?php if($result['fuel'] == 'Gasoline') { ?>
                                <option value="Gasoline">Gasoline</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Electric">Electric</option>

                                <?php }else if($result['fuel'] == 'Diesel'){ ?>
                                <option value="Diesel">Diesel</option>
                                <option value="Gasoline">Gasoline</option>
                                <option value="Electric">Electric</option>
                                
                                <?php } else if($result['fuel'] == 'Electric'){ ?>
                                <option value="Electric">Electric</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Gasoline">Gasoline</option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="add-cars2">
                            <label for="seats">Seats</label>
                            <select id="seats" name="seats">
                                <?php if($result['seats'] == '2') { ?>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>

                                <?php } else if($result['seats'] == '4'){ ?>
                                    <option value="4">4</option>
                                    <option value="2">2</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                
                                <?php } else if($result['seats'] == '5'){ ?>
                                    <option value="5">5</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="7">7</option>

                                <?php } else if($result['seats'] == '7'){ ?>
                                    <option value="7">7</option>
                                    <option value="5">5</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                <?php } ?>
                            </select>

                            <label for="doors">Doors</label>
                            <select id="doors" name="doors">
                                <?php if($result['doors'] == '1') { ?>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                <?php } else if($result['doors'] == '2'){ ?>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                
                                <?php } else if($result['doors'] == '3'){ ?>
                                    <option value="3">3</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                <?php } else if($result['doors'] == '4'){ ?>
                                    <option value="4">4</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="5">5</option>

                                <?php } else if($result['doors'] == '5'){ ?>
                                    <option value="5">5</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                <?php } ?>
                            </select>

                            <label for="color">Color</label>
                            <select id="color" name="color">
                            <?php if($result['color'] == 'Black') { ?>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Red">Red</option>
                                    <option value="Grey">Grey</option>
                                    <option value="Dark Blue">Dark Blue</option>

                                <?php } else if($result['color'] == 'White'){ ?>
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Red">Red</option>
                                    <option value="Grey">Grey</option>
                                    <option value="Dark Blue">Dark Blue</option>
                                
                                <?php } else if($result['color'] == 'Red'){ ?>
                                    <option value="Red">Red</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Grey">Grey</option>
                                    <option value="Dark Blue">Dark Blue</option>

                                <?php } else if($result['color'] == 'Grey'){ ?>
                                    <option value="Grey">Grey</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Red">Red</option>
                                    <option value="Dark Blue">Dark Blue</option>

                                <?php } else if($result['color'] == 'Dark Blue'){ ?>
                                    <option value="Dark Blue">Dark Blue</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Red">Red</option>
                                    <option value="Grey">Grey</option>
                                <?php } ?>
                            </select>

                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" value="<?php echo $result['price']; ?>">

                            <label for="img">Image: </label>
                            <input type="file" id="img" name="img" accept="image/*">    

                            <button type="submit" name="submit" class="addbutton">Edit</button> 
                            <a href="admin-cars.php" type="button" class="cancelbutton" style="margin-right:10px ;">Cancel</a> 
                        </form>
                        </div>
                    </div>           
                    
        </div>
</body>
</html>