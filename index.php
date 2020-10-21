<?
require 'transport.php';
require 'Autobus.php';
require 'Avion.php';

$autobus = new autobus ("mercedes");
$avion= new avion ("airbus");;
$autobus->move();
$avion->plane();
$autobus->consume();
$avion->consume();
$autobus->fuel();
$avion->fuel();
$avion->distance();
$autobus->distance();





?>