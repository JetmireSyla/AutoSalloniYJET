<?php
include_once 'DbConn.php';
include_once 'carModel.php';
class CarMapper
{
    private $car;
    private $connection;
    public function __construct()
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
    }

    public function Insert($manufacturer, $model, $year, $transmission, $mileage, $fuel, $seats, $doors, $color, $price, $image)
    {
        $sql = "INSERT INTO car (manufacturer,model,year,transmission,mileage,fuel,seats,doors,color,price,created_date,user_id,image) 
                VALUES (:manufacturer,:model,:year,:transmission,:mileage,:fuel,:seats,:doors,:color,:price,:created_date,:user_id,:image)";

            $created_date = '2020-05-07';
            $user_id = 1;

            $target = "img/";
            $name =  basename($image['name']);
            $temp = explode(".", $name);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $picture = "img/".$newfilename;

            $statement = $this->connection->prepare($sql);
            $statement->bindParam('manufacturer', $manufacturer);
            $statement->bindParam('model', $model);
            $statement->bindParam('year', $year);
            $statement->bindParam('transmission', $transmission);
            $statement->bindParam('mileage', $mileage);
            $statement->bindParam('fuel', $fuel);
            $statement->bindParam('seats', $seats);
            $statement->bindParam('doors', $doors);
            $statement->bindParam('color', $color);
            $statement->bindParam('price', $price);
            $statement->bindParam('created_date', $created_date);
            $statement->bindParam('user_id', $user_id);
            $statement->bindParam('image', $picture);

            if($statement->execute() && move_uploaded_file($image['tmp_name'], $target . "" . $newfilename)) {
                $message = "Makina u shtua e sukses";
                header('Location: admin-cars.php');
            } else {
                $message = "Nje problem u shfaqe gjate krijimit te makinës";
            }
    }

    public function Update($car)
    {
        
        $manufacturer = $car->getManufacturer();
        $model = $car->getModel();
        $year = $car->getYear();
        $transmission = $car->getTransmission();
        $mileage = $car->getMileage();
        $fuel = $car->getFuel();
        $seats = $car->getSeats();
        $doors = $car->getDoors();
        $color = $car->getColor();
        $price = $car->getPrice();
        $car_id = $car->getCarId();
        $image = $car->getImage();

        $target = "img/";
        $name =  basename($image['name']);
        $temp = explode(".", $name);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $picture = "img/".$newfilename;

        $sql = 'UPDATE car SET  manufacturer=:manufacturer,
                                model=:model,
                                year=:year, 
                                transmission=:transmission, 
                                mileage=:mileage, 
                                fuel=:fuel, 
                                seats=:seats, 
                                doors=:doors, 
                                color=:color,
                                price=:price,
                                image=:image 
                                WHERE car_id =:car';

        $statement = $this->connection->prepare($sql);
        $statement->bindParam('manufacturer', $manufacturer);
        $statement->bindParam('model', $model);
        $statement->bindParam('year', $year);
        $statement->bindParam('transmission', $transmission);
        $statement->bindParam('mileage', $mileage);
        $statement->bindParam('fuel', $fuel);
        $statement->bindParam('seats', $seats);
        $statement->bindParam('doors', $doors);
        $statement->bindParam('color', $color);
        $statement->bindParam('price', $price);
        $statement->bindParam('car', $car_id);
        $statement->bindParam('image',$picture);

        if($statement->execute() && move_uploaded_file($image['tmp_name'], $target . "" . $newfilename)) {
            $message = "Makina u shtua e sukses";
            header('Location: admin-cars.php');
        } else {
            $message = "Nje problem u shfaqe gjate krijimit te makinës";
        }

    }

    public function getCars(){
        $sth = $this->connection->prepare("SELECT * FROM car");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }

    public function getLastCars(){
        $sth = $this->connection->prepare("SELECT * FROM car order by created_date LIMIT 5");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }

    public function getCarById($car_id){
        $sth = $this->connection->prepare("SELECT * FROM car WHERE car_id = :car_id");
        $sth->execute(['car_id' => $car_id]);
        $result = $sth->fetch();
        return $result;
    }

    public function Delete($car_id){
        $statement = $this->connection->prepare("DELETE FROM car WHERE car_id = :car_id");
        $statement->execute(['car_id' => $car_id]);
    }
}