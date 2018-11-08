<?php
function __autoload($class_name){

    // directories to looking for
    $dirs = [
        'lib/',
    ];

    // for loading a class
    foreach($dirs as $dir) {
        $file = __DIR__."/$dir$class_name.class.php";
        if(file_exists($file)) {
            require_once($file);
            break;
        }
    }
}