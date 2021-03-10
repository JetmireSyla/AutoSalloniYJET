<?php $page = 'admin';
  require("includes/admin-sidemenu.php");
  include_once 'controller/userController.php';
?>
    
        <div class="admin-content">
          <h1>USER</h1>
         <table class="table">
            <thead>
              <th>Role</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>E-mail</th>
              <th>Register Date</th>
            </thead>
            <tbody>
            <?php 
                  $userController = new userController();
                  $result = $userController->GetUsers();
                  foreach ($result as $user){ ?>

            
                <tr>
                  <td><?php echo $user['role']; ?></td>
                  <td><?php echo $user['firstname']; ?></td>
                  <td><?php echo $user['lastname']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['register_date']; ?></td>
                </tr>

              <?php } ?> 
            </tbody>
          </table>
        </div>  
</body>
</html>