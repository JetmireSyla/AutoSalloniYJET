<?php $page = 'add-cars';
  require("includes/admin-sidemenu.php");
  include_once 'controller/carController.php';


  
    if(isset($_POST['submit'])){
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $transmission = $_POST['transmission'];
    $mileage = $_POST['mileage'];
    $fuel = $_POST['fuel'];
    $seats = $_POST['seats'];
    $doors = $_POST['doors'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    
    $imagefile =  $_FILES['postphotochooser'];

        $carController = new CarController();
        $carController->InsertCar($manufacturer, $model, $year, $transmission, $mileage, $fuel, $seats, $doors, $color, $price,$imagefile);
    }

?>



        <div class="admin-content">
                    <h1>ADD CARS</h1>
        <div>

                 
                    <div class="add-cars">
                    <form action="#" method="POST" id="add-car-form" enctype="multipart/form-data"> 
                            <label for="manufacturer">Manufacturer</label>
                            <input type="text" id="manufacturer" name="manufacturer">
                    
                            <label for="model">Model</label>
                            <input type="text" id="model" name="model" placeholder="">
        
                            <label for="year">Year</label>
                            <input type="text" id="year" name="year" placeholder="">
        
                            <label for="transmission">TRANSIMISSION</label>
                            <select id="transmission" name="transmission">
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>

                            <label for="mileage">Mileage</label>
                            <input type="text" id="mileage" name="mileage" placeholder="">

                            <label for="fuel">Fuel</label>
                            <select id="fuel" name="fuel">
                                <option value="Gasoline">Gasoline</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Electric">Electric</option>
                            </select>

                        </div>
                        <div class="add-cars2">
                            <label for="seats">Seats</label>
                            <select id="seats" name="seats">
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="7">7</option>
                            </select>
                            <label for="doors">Doors</label>
                            <select id="doors" name="doors">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <label for="color">Color</label>
                            <select id="color" name="color">
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                                <option value="Red">Red</option>
                                <option value="Grey">Grey</option>
                                <option value="Dark Blue">Dark Blue</option>
                            </select>
                            
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" placeholder="">
                            <button type="submit" name="submit" class="addbutton">Add</button>

                           
                            <label for="img">Image: </label>
                            <input class="form-control" id="postphotochooser" name="postphotochooser" placeholder="" type="file">

                            <a href="admin-cars.php" type="button" class="cancelbutton" >Cancel</a> 
                        </form>
                        </div>
                    </div>           
                    
        </div>
</body>
</html>