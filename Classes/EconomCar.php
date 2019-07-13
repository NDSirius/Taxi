<?php

class EconomCar extends TypeCar
{
    public $car = 'Vaz 2106';
    public $price = '0.60$ per 1km';
    public function getCar()
    {
        return $this->car;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function choose_type()
    {
        return 'Econom';
    }
}