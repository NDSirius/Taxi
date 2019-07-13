<?php

class Standart extends Taxi
{
    public function callTaxi()
    {
        return new StandartCar();
    }
}