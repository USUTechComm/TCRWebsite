<?php


// *-------- Level 1 --------*

class Page1
{
    function addHead($section = null) {

        require 'variables.php';
        $traverse = TRAVERSE;

        if ($section == 'bachelors') {
            require 'elements/head/bachelors.php';
        } elseif ($section == 'masters') {
            require 'elements/head/masters.php';
        } elseif ($section == 'doctorate') {
            require 'elements/head/doctorate.php';
        } else {
            require 'elements/head.php';
        }
    }

    function addHeader($section,$page) {

        require 'variables.php';

        $s = $section;
        $p = $page;
        require 'elements/header/page.php';
    }

    function addSideMenu($section,$page) {

        require 'variables.php';

        $s = $section;
        $p = $page;
        require 'elements/sideMenu/sideMenu.php';
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

$page1 = new Page1();
require 'variables.php';

?>