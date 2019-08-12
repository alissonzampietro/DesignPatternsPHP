<?php

namespace DesignPattern\Observer;

use DesignPattern\Observer\AbstractObserver;

abstract class AbstractSubject {
    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);
    abstract function notify();
}