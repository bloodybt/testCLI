<?php

// Basic dog command class
abstract class AbstractDogClass
{
    private static ?AbstractDogClass $instance = null;

    public static function getInstance(): AbstractDogClass {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    abstract public function sound();
    abstract public function hunt();
}
