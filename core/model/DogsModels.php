<?php

require_once 'AbstractDogClass.php';

/*
 * Includes all dogs-command classes
 */

class ShibaInu extends AbstractDogClass {

    public function sound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "woof! woof!";
    }
}

class Mops extends AbstractDogClass {

    public function sound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "**whining piteously";
    }
}

class Dachshund extends AbstractDogClass {

    public function sound() {
        return "woof! woof!";
    }

    public function hunt() {
        return "woof! woof!";
    }
}

class PlushLabrador extends AbstractDogClass {

    public function sound() {
        return "**no reaction";
    }

    public function hunt() {
        return "**no reaction";
    }
}

class Rubberdachshund extends AbstractDogClass {

    public function sound() {
        return "beep! beep!";
    }

    public function hunt() {
        return "**no reaction";
    }
}

