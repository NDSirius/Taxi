<?php

class Econom extends Taxi
{
    public function callTaxi()
    {
        return new EconomCar();
    }
}