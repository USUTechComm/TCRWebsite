<?php

class Home
{
    function addHead() {
        require 'elements/head.php';
    }
    function addHeader() {
        $s = 'home';
        require 'variables.php';
        require 'elements/header/home.php';
    }
    function addFooter() {
        require 'variables.php';
        require 'elements/footer.php';
    }

    function addJavascript() {
        require 'variables.php';
        require 'elements/javascript.php';
    }
}

$home = new Home();
require 'variables.php';


?>