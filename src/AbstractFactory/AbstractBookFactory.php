<?php

namespace DesignPattern\AbstractFactory;

abstract class AbstractBookFactory {
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}