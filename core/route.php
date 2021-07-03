<?php

require_once 'CommandController.php';

if (isset($_POST['command'])) {
    $text = trim($_POST['command']);

    // Execute command
    $ex = CommandController::getInstance();
    $ex::executeCommand($text);
} else {
    header("HTTP/1.1 500 Internal Server Error");
}