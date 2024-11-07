<?php

require_once __DIR__ . '/../vendor/autoload.php';

// en POO import
use Narut\ClassicModel\Entity\ProductLine;
use Narut\ClassicModel\Entity\Offices;
use Narut\ClassicModel\DBAL\Connector;

$connection = new Connector();
$ppl1 = new ProductLine($connection->dbh);
$off = new Offices($connection->dbh);
// product line
$title = $ppl1->productLine;
$lines = $ppl1->getProductLines();

// offices
$offices = $off->offices;
$office_name = $off->getOffices();
require_once __DIR__ . '/../templates\base.html.php';


?>

