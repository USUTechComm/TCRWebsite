<?php

$includeBreadcrumbs = TRUE;

$breadcrumbSection = '';

$breadcrumbPage = ''; 


// *-------- Bachelor's --------*

if ($s == "bachelors") {

    $activeBach = ACTIVE;
    $breadcrumbSection = '<li><a href="'.$bachelors["about"]["url"].'">' . $bachelors["short"] . '</a></li>';

    if ($p == "about") {
        $breadcrumbPage = '<li class="active">About the Program</li>';
    }
    
    elseif ($p == "requirements") {
        $breadcrumbPage = '<li class="active">Degree Requirements</li>';
    } 
    
    elseif ($p == "courses") {
        $breadcrumbPage = '<li class="active">' . $bachelors["courses"]["title"] . '</li>';
    } 
} 


// *-------- Master's --------*

elseif ($s == "masters") {

    $activeMaster = ACTIVE;
    $breadcrumbSection = '<li><a href="'. $masters["about"]["url"] .'">' . $masters["short"] . '</a></li>';

    if ($p == "about") {
        $breadcrumbPage = '<li class="active">About the Program</li>';
    } 
    elseif ($p == "application") {
        $breadcrumbPage = '<li class="active">Application Procedure</li>';
    }
    elseif ($p == "courses") {
        $breadcrumbPage = '<li class="active">Course Descriptions</li>';
    }
    elseif ($p == "financial") {
        $breadcrumbPage = '<li class="active">Financial Information</li>';
    }
    elseif ($p == "requirements") {
        $breadcrumbPage = '<li class="active">Degree Requirements</li>';
    }
    elseif ($p == "faq") {
        $breadcrumbPage = '<li class="active">Frequently Asked Questions</li>';
    }
}


// *-------- Phd --------*

elseif ($s == "doctorate") {

    $activeDoctorate = ACTIVE;
    $breadcrumbSection = '<li><a href="' . $doctorate["about"]["url"] . '">' . $doctorate["short"] . '</a></li>';

    if ($p == "about") {
        $breadcrumbPage = '<li class="active">About the Program</li>';
    }
    elseif ($p == "application") {
        $breadcrumbPage = '<li class="active">Application Procedure</li>';
    }
    elseif ($p == "courses") {
        $breadcrumbPage = '<li class="active">Course Descriptions</li>';
    }
    elseif ($p == "requirements") {
        $breadcrumbPage = '<li class="active">Degree Requirements</li>';
    }
    elseif ($p == "timeline") {
        $breadcrumbPage = '<li class="active">Timeline to Graduation</li>';
    }
    elseif ($p == "financial") {
        $breadcrumbPage = '<li class="active">Financial Information</li>';
    }
}

// *-------- People --------*

elseif ($s == "people") {
    $activePeople = ACTIVE;
    $breadcrumbSection = '<li>' . $people["short"] . '</li>';
 
    if ($p == "faculty") {
        $breadcrumbPage = '<li class="active">Faculty</li>';
    } 
    elseif ($p == "students") {
        $breadcrumbPage = '<li class="active">Students</li>';
    } 
}

require 'header.php';

?>