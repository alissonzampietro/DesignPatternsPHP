<?php

require_once(__DIR__.'/vendor/autoload.php');

use DesignPattern\Observer\Observer;

$observer = new Observer();
$observer->run();

