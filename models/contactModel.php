<?php
class Contact
{
    
    private $carId;
    private $model;
    private $year;
    private $transmission;
    private $mileage;
    private $fuel;
    private $seats;
    private $doors;
    private $color;
    private $price;
    private $created_date;
    private $userId;

    public function __construct()
    {
    }

    public function getCarId()
    {
        return $this->carId;
    }

    public function setCarId($carId)
    {
        $this->carId = $carId;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getTransmission()
    {
        return $this->transmission;
    }
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }
    public function getMileage()
    {
        return $this->mileage;
    }
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }
    public function getFuel()
    {
        return $this->fuel;
    }
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }
    public function getSeats()
    {
        return $this->seats;
    }
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    public function getDoors()
    {
        return $this->doors;
    }
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getCreatedDate()
    {
        return $this->created_date;
    }
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }
}
?>