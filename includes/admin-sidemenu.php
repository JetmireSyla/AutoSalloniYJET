<?php 
    session_start();
    if($_SESSION['role'] != 'Admin'){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AUTOSALLONI YJET | 
    	<?php 

        if($page == 'admin'){
            echo 'User';
        }else if($page == 'messages'){
            echo 'Messages';
        }else if($page == 'admin-cars'){
            echo 'Cars';
        }else if($page == 'add-cars'){
            echo 'Add';
        }else if($page == 'edit-cars'){
            echo 'Edit';
        }


    ?> 
    	
    </title>
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="/js/script.js"></script>

</head>
<body>

 <header>
        <div class="admin-header">
                <a href="index.php"><div class="admin-logo">
                    <h3>AUTOSALLONI YJET</h3>
                </div></a>
        </div>
    </header> 

    <div class="side-nav">
        <nav>
            <ul>
                <li>
                    <a href="admin.php">
                        <p><i class="fa fa-user" style="margin-right: 5px;"></i> Users</p>
                    </a>
                </li>
                <li>
                    <a href="messages.php">
                        <p><i class="fa fa-envelope" style="margin-right: 5px;"></i> Messages</p>
                    </a>
                </li>
                <li>
                    <a href="admin-cars.php">
                        <p><i class="fa fa-car" aria-hidden="true" style="margin-right: 5px;"></i> Cars</p>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <p>Log out</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div> 
