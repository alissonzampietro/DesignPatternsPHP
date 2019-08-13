<?php

namespace DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\SamsPHPBook;
use DesignPattern\AbstractFactory\SamsMySQLBook;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";
    function makePHPBook() {
        return new SamsPHPBook();
    }
    function makeMySQLBook() {
        return new SamsMySQLBook();
    }
}