<?php

namespace DesignPattern\AbstractFactory;

use DesignPattern\AbstractFactory\OReillyBookFactory;
use DesignPattern\AbstractFactory\SamsBookFactory;

class AbstractFactory {
    function run()
    {
        $this->writeln('');
        $this->writeln('');
        $this->writeln('');
        $this->writeln('');
        $this->writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
        $this->writeln('');

        $this->writeln('testing OReillyBookFactory');
        $bookFactoryInstance = new OReillyBookFactory();
        $this->testConcreteFactory($bookFactoryInstance);
        $this->writeln('');

        $this->writeln('testing SamsBookFactory');
        $bookFactoryInstance = new SamsBookFactory();
        $this->testConcreteFactory($bookFactoryInstance);

        $this->writeln("END TESTING ABSTRACT FACTORY PATTERN");
        $this->writeln('');
    }

     /**
         * Initialization
         */
        function testConcreteFactory($bookFactoryInstance)
        {
            $phpBookOne = $bookFactoryInstance->makePHPBook();
            $this->writeln('first php Author: '.$phpBookOne->getAuthor());
            $this->writeln('first php Title: '.$phpBookOne->getTitle());

            $phpBookTwo = $bookFactoryInstance->makePHPBook();
            $this->writeln('second php Author: '.$phpBookTwo->getAuthor());
            $this->writeln('second php Title: '.$phpBookTwo->getTitle());

            $mySqlBook = $bookFactoryInstance->makeMySQLBook();
            $this->writeln('MySQL Author: '.$mySqlBook->getAuthor());
            $this->writeln('MySQL Title: '.$mySqlBook->getTitle());
        }

        function writeln($line_in) {
            echo $line_in."<br/>";
        }
}
