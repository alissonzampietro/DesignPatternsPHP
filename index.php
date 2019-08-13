<?php

require_once(__DIR__.'/vendor/autoload.php');

use DesignPattern\Observer\Observer;
use DesignPattern\AbstractFactory\AbstractFactory;

$observer = new Observer();
$abstract = new AbstractFactory();
$observer->run();
$abstract->run();