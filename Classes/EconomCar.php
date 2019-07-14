<?php

class EconomCar extends TypeCar
{
    public function choose_type()
    {
        return 'Econom';
    }
    public function carModel()
    {
        return 'econom car';
    }
    public function price()
    {
        return 'econom price';
    }
}