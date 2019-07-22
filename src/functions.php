<?php

function dd($var) {
    var_dump($var);
    die();
}

function debugModeOn() {
    global $debug;
    
    if ($debug !== true) {
        error_reporting(E_ALL & ~E_NOTICE);
        ini_set("display_errors", 1);
        
        $debug = true;
    }
}
