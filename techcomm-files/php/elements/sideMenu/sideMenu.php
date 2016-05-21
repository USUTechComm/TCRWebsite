<?php

if ($s == 'bachelors') {

    switch ($p) {

        case 'about':
            $activeAbout = ACTIVE;
            break;
            
        case 'requirements':
            $activeRequirements = ACTIVE;
            break;
            
        case 'courses':
            $activeCourses = ACTIVE;
            break;
    }

    require 'bachelors.php';
}

elseif ($s == 'masters') {

    switch ($p) {

        case 'about':
            $activeAbout = ACTIVE;
            break;

        case 'application':
            $activeApplication = ACTIVE;
            break;

        case 'courses':
            $activeCourses = ACTIVE;
            break;

        case 'financial':
            $activeFinancial = ACTIVE;
            break;

        case 'requirements':
            $activeRequirements = ACTIVE;
            break;

        case 'faq':
            $activeFaq = ACTIVE;
            break;

        default:
            break;
    }

    require 'masters.php';
} 

elseif ($s == 'doctorate') {

    switch ($p) {

        case 'about':
            $activeAbout = ACTIVE;
            break;

        case 'application':
            $activeApplication = ACTIVE;
            break;

        case 'courses':
            $activeCourses = ACTIVE;
            break;

        case 'requirements':
            $activeRequirements = ACTIVE;
            break;

        case 'timeline':
            $activeTimeline = ACTIVE;
            break;

        case 'financial':
            $activeFinancial = ACTIVE;
            break;

        default:
            break;
    }

    require 'doctorate.php';
} 

elseif ($s == 'people') {

    switch ($p) {

        case 'students':
            $activeStudents = ACTIVE;
            break;

        case 'faculty':
            $activeFaculty = ACTIVE;
            break;

    }

    require 'people.php';
}

?>