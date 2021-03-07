<?php
include_once 'models/carMapper.php';
include_once 'models/carModel.php';
class CarController
{
    public function InsertCar($manufacturer, $model, $year, $transmission, $mileage, $fuel, $seats, $doors, $color, $price,$image)
    {
        
        $carMapper = new CarMapper();
        $carMapper->Insert($manufacturer,$model, $year, $transmission, $mileage, $fuel, $seats, $doors, $color, $price, $image);

    }

    public function GetCars()
    {
       
        $carMapper = new CarMapper();
        $cars = $carMapper->GetCars(); 
        return $cars;

    }
    public function GetLastCars()
    {
       
        $carMapper = new CarMapper();
        $cars = $carMapper->GetLastCars(); 
        return $cars;

    }

    public function GetCarById($car_id)
    {
       
        $carMapper = new CarMapper();
        $car = $carMapper->GetCarById($_GET["car_id"]); 
        return $car;

    }

    public function Update($car){
        $carMapper = new CarMapper();
        $carMapper->Update($car);
    }

    public function Delete($car_id){
       $carMapper = new CarMapper();
       $carMapper->Delete($car_id); 
    }
}