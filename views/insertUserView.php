<?php
include_once '../controller/userController.php';
if (isset($_POST['submitbtn'])) {
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $phone = $_POST['phone'];
    $view = new InsertView();
    $view->insertStudent($emri, $mbiemri, $phone);
}

class InsertView
{
    public function insertStudent($emri, $mbiemri, $phone)
    {
        // dergojme kerkesen ne controller
        $controller = new StudentController();
        $response = $controller->InsertStudent($emri, $mbiemri, $phone);

        if ($response) {

            <h1>U regjistrua me sukses</h1>
        

        } else {
        
            <h1>Nuk u regjistrua me sukses</h1>

        }
    }
}
?>