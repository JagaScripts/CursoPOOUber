<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "ADN456"), "Chevrolet", "Spark");
$uberX->PrintDataCar();

$car = new Car("AW456", new Account("Andres Herrera", "AMS123"));
$car->printDataCar();

?>