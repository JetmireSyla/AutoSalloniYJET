<?php $page = 'admin-cars';
  require("includes/admin-sidemenu.php");
  include_once 'controller/carController.php';

  if(isset($_GET['delete'])){

    $id = $_GET['delete'];
      $carController = new CarController();
      $carController->Delete($id);
      header("Location: admin-cars.php");
  }
  
?>

    

        <div class="admin-content">
                    <h1>CARS</h1>
                    <a href="add-cars.php" class="admin-add-button" type="button">Add</a> 
                   
 
            
         <table class="table">
            <thead>
              
            <th>Manufacturer</th>
              <th>Model</th>
              <th>Year</th>
              <th>Fuel</th>
              <th>Transmission</th>
              <th>Action</th>
            </thead>
        <tbody>   
            <?php 
                  $carController = new carController();
                  $result = $carController->GetCars();
                  foreach ($result as $car){ ?>

            
                <tr>
                <td><?php echo $car['manufacturer']; ?></td>
                  <td><?php echo $car['model']; ?></td>
                  <td><?php echo $car['year']; ?></td>
                  <td><?php echo $car['fuel']; ?></td>
                  <td><?php echo $car['transmission']; ?></td>
                  <td>
                    <a href="edit-cars.php?car_id=<?php echo $car['car_id']; ?>" class="a-design"><i class="fas fa-edit" style="margin-right: 10px;"></i> </a>
                    <a href="cardetails.php?car_id=<?php echo $car['car_id']; ?>" class="a-design"><i class="fas fa-eye" style="margin-right: 10px;"></i> </a>
                    <a href="admin-cars.php?delete=<?php echo $car['car_id']; ?> " class="a-design" onclick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>

              <?php } ?> 
             
        
        </tbody>
           
          </table>
        </div>
</body>
</html>