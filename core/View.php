<?php

class View {
    /*
     * Generate error output
     *
     * $errorText - text of error
     * $commandText - the entered command with params
     */
    public function sendError($errorText, $commandText){
        echo json_encode(['result' => "<div id='command'>" . $commandText . "</div><div id='error'>" . $errorText . "</div><br>"]);
    }

    /*
     * Generate command output
     *
     * $outputText - command execution result
     * $commandText - the entered command with params
     */
    public function sendOutput($outputText, $commandText){
        echo json_encode(['result' =>  "<div id='command'>" . $commandText . "</div><div id='output'>" . $outputText . "</div><br>"]);
    }
}