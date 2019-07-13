<?php

class LuxCar extends TypeCar
{
    public $car = 'Audi A7';
    public $price = '1.80$ per 1km';
    public function choose_type()
    {
        return 'Lux';
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