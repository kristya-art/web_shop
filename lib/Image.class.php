<?php

class Image {

    public function __construct($scr,$desc)
    {
        $this->render($scr,$desc);
    }

    public function render($scr,$description){
        echo "<img src=\"assets/images/$scr\" alt=\"$description\" title=\"$description\">";
    }

}