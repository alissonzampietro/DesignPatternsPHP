<?php

namespace DesignPattern\AbstractFactory;

abstract class AbstractBook {
    abstract function getAuthor();
    abstract function getTitle();
}