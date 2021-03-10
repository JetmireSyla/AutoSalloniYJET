<?php $page = 'messages';
  require("includes/admin-sidemenu.php");
  include_once 'controller/messageController.php';

  
?>



    
        <div class="admin-content">
          <h1>MESSAGES</h1>
            
         <table class="table">
            <thead>
              <th>Date</th>
              <th>E-mail</th>
              <th>Subject</th>
              <th>Message</th>
            </thead>
        <tbody>   
             <?php 
                  $messageController = new messageController();
                  $result = $messageController->GetMessages();
                  foreach ($result as $messages){ ?>
                <tr>
                  <td><?php echo $messages['date']; ?></td>
                  <td><?php echo $messages['email']; ?></td>
                  <td><?php echo $messages['subject']; ?></td>
                  <td><?php echo $messages['message']; ?></td>
                </tr>

              <?php } ?> 
        </tbody>
          </table>
        </div>
</body>
</html>