<?php

class Lux extends Taxi
{
    public function callTaxi()
    {
        return new LuxCar();
    }
}