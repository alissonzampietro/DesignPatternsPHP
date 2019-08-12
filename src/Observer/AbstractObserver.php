<?php

namespace DesignPattern\Observer;

use DesignPattern\Observer\AbstractSubject;

abstract class AbstractObserver {
    abstract function update(AbstractSubject $subject_in);
}