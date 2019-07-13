<?php

class StandartCar extends TypeCar
{
    public $car = 'Skoda Octavia';
    public $price = '0.98$ per 1km';
    public function choose_type()
    {
        return 'Standart';
    }
    public function getCar()
    {
        return $this->car;
    }
    public function getPrice()
    {
        return $this->price;
    }
}