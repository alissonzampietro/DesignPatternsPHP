<?php

namespace DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\AbstractBookFactory;
use DesignPattern\AbstractFactory\OReillyPHPBook;
use DesignPattern\AbstractFactory\OReillyMySQLBook;

class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";
    function makePHPBook() {
        return new OReillyPHPBook;
    }
    function makeMySQLBook() {
        return new OReillyMySQLBook;
    }
}