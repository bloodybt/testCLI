<?php

require_once 'View.php';
require_once 'model/DogsModels.php';

class CommandController {

    private static ?CommandController $instance = null;

    public static function getInstance(): CommandController {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    // main exec function
    public static function executeCommand($text) {

        $command = strtok($text, ' '); // get command name
        $param = trim(strstr($text, ' ')); // get command params

        // check if command is available
        $model = null;
        $error = "";
        switch ($command) {
            case "shiba-inu":
                $model = ShibaInu::getInstance();
                break;
            case "mops":
                $model = Mops::getInstance();
                break;
            case "dachshund":
                $model = Dachshund::getInstance();
                break;
            case "plush-labrador":
                $model = PlushLabrador::getInstance();
                break;
            case "rubber-dachshund":
                $model = Rubberdachshund::getInstance();
                break;
            default:
                $error = "Wrong command name";
                break;
        }

        // check if command parameter available
        if (empty($error)) {
            if (!method_exists($model, $param)) {
                $error = "Wrong parameter";
            }
        }

        $view = new View();
        if (empty($error)) {
            $output = $model->$param();         // execute command
            $view->sendOutput($output, $text);  // send execution result
        } else {
            $view->sendError($error, $text);    // send error
        }

    }

}
