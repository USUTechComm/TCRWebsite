<?php

// Constants

define('TRAVERSE', '../');
define('ACTIVE', 'class="active"');

// Root

$root = "http://techcomm.usu.edu/";


//
// *-------- Internal URLs --------*
//


// home

$index = array(
    "url"    => $root,
    "link"   => "<a href=\"" . $root . "\">Home</a>"
);

$logo   = array(
    "icon"   => $root . "img/logo/TCR_Logo.png",
    "full"   => $root . "img/logo/tcr-logo-full.png",
    "full-usu" => $root . "img/logo/tcr-logo-full-usu.png",
    "usu"    => $root . "img/logo/usu_horizontal.png"
);


// level 1

$people = array(
    "title"  => "People",
    "short"  => "People",

    "faculty" => array(
        "title"  => "Faculty",
        "url"    => $root . "people/faculty.php"
    ),

    "students" => array(
        "title"  => "Students",
        "url"    => $root . "people/students.php"
    ),
);

$bachelors   = array(
    "title"  => "BA/BS in English: Professional and Technical Writing Emphasis",
    "short"  => "Bachelor's Degree",

    "about"  => array(
        "title"  => "About the Program",
        "url"    => $root . "bachelors/"
    ),

    "requirements" => array(
        "title"  => "Degree Requirements",
        "url"    => $root . "bachelors/requirements.php"
    ),

    "courses" => array(
        "title"  => "Topics Courses",
        "url"    => $root . "bachelors/courses.php"
    )
);

$masters = array(
    "title"  => "Master of Technical Communication",
    "short"  => "Master of Tech Comm",

    "about" => array(
        "title"  => "About the Program",
        "url"    => $root . "masters/"
    ),

    "application" => array(
        "title"  => "Application Procedure",
        "url"    => $root . "masters/application.php"
    ),

    "courses" => array(
        "title"  => "Courses",
        "url"    => $root . "masters/courses.php"
    ),

    "financial" => array(
        "title"  => "Financial Information",
        "url"    => $root . "masters/financial.php"
    ),

    "requirements" => array(
        "title"  => "Degree Requirements",
        "url"    => $root . "masters/requirements.php"
    ),

    "faq" => array(
        "title"  => "Frequently Asked Questions",
        "url"    => $root . "masters/faq.php"
    )
);


$doctorate = array(
    "title"  => "Technical Communication and Rhetoric Doctoral Program",
    "short"  => "TCR Doctoral Program",

    "about" => array(
        "title"  => "About the Program",
        "url"    => $root . "doctorate/"
    ),

    "application" => array(
        "title"  => "Application Procedure",
        "url"    => $root . "doctorate/application.php"
    ),

    "courses" => array(
        "title"  => "Courses",
        "url"    => $root . "doctorate/courses.php"
    ),

    "requirements" => array(
        "title"  => "Degree Requirements",
        "url"    => $root . "doctorate/requirements.php"
    ),

    "financial" => array(
        "title" => "Financial Information",
        "url"   => $root . "doctorate/financial.php"
    ),

    "timeline" => array(
        "title"  => "Timeline to Graduation",
        "url"    => $root . "doctorate/timeline.php"
    )
);



// *-------- External URLs --------*

$external = array(
    "english dept"      => "http://english.usu.edu",
    "grad school"       => "http://rgs.usu.edu/graduateschool/admissions",
    "int students"      => "http://rgs.usu.edu/graduateschool/htm/admissions/international/",
    "facebook"          => "#",
    "twitter"           => "#",
    "instagram"         => "#"
);


?>