<?php

class StandartCar extends TypeCar
{
    public function choose_type()
    {
        return 'Standart';
    }
    public function carModel()
    {
        return 'standart car';
    }
    public function price()
    {
        return 'standart price';
    }
}