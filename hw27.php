<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($class) {
    require_once 'Classes/' . $class . '.php';
});

$taxi = new Econom();
$car = $taxi->callTaxi();
print "Your type is : {$car->choose_type()}. Car : {$car->carModel()} . Price : {$car->price()}" . "<br>";
$taxi = new Standart();
$car = $taxi->callTaxi();
print "Your type is : {$car->choose_type()}. Car : {$car->carModel()} . Price : {$car->price()}" . "<br>";
$taxi = new Lux();
$car = $taxi->callTaxi();
print "Your type is : {$car->choose_type()}. Car : {$car->carModel()} . Price : {$car->price()}";
