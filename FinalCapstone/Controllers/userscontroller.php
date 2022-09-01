<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../Classes/usersclass.php');


//Student
function addStudent($userid, $sdtname, $major,$sdtmail, $sdtpass, $sdtphoto){
    $student = new Users();
    $students = $student-> addStudent($userid, $sdtname, $major,$sdtmail, $sdtpass, $sdtphoto);
    if ($students){
        return true;
    }
    return false;
}

function updateStudent($userid, $sdtname, $major, $sdtmail,$sdtpass, $sdtphoto){
    $student = new Users();
    $students = $student-> updateStudent($userid, $sdtname, $major, $sdtmail, $sdtpass, $sdtphoto);
    if ($students){
        return true;
    }
    return false;
}

function deleteStudent($userid){
    $student = new Users();
    $students = $student-> deleteStudent($userid);
    if ($students){
        return true;
    }
    return false;
}

function loginStudent($userid, $sdtpass){
    $student = new Users();
    $students = $student-> loginStudent($userid, $sdtpass);
    if ($students){
        return true;
    }
    return false;
}

function studentExist($userid){
    $student = new Users();
    $students = $student-> studentExist($userid);
    if ($students){
        return true;
    }
    return false;
}

function getSdtinfo($userid){
    $student = new Users();
    $students = $student-> studentExist($userid);
    if ($students){
        return true;
    }
    return false;
}

// Educator
function addEducator($userid, $eduname, $category,$poscourses,$edumail, $edupass, $e_funfact, $eduphoto){
    $educator = new Users();
    $educators = $educator-> addEducator($userid, $eduname, $category,$poscourses,$edumail, $edupass, $e_funfact, $eduphoto);
    if ($educators){
        return true;
    }
    return false;
}

function updateEducator($userid, $eduname, $category,$poscourses,$edumail, $edupass, $e_funfact, $eduphoto){
    $educator = new Users();
    $educators = $educator-> updateEducator($userid, $eduname, $category,$poscourses,$edumail, $edupass, $e_funfact, $eduphoto);
    if ($educators){
        return true;
    }
    return false;
}

function deleteEducator($userid){
    $educator = new Users();
    $educators = $educator-> deleteEducator($userid);
    if ($educators){
        return true;
    }
    return false;
}

function loginEducator(){
    $educator = new Users();
    $educators = $educator-> loginEducator();
    if ($educators){
        return true;
    }
    return false;
}

function educatorExist($userid){
    $educator = new Users();
    $educators = $educator-> educatorExist($userid);
    if ($educators){
        return true;
    }
    return false;
}

function getEducinfo($userid){
    $educator = new Users();
    $educators = $educator-> educatorExist($userid);
    if ($educators){
        return true;
    }
    return false;
}

function viewEducator(){
    $educator = new Users();
    $educators = $educator-> viewEducator();
    
    if ($educators){
        $eduarray = array();  
        while ($row = $educator->fetch()){
            $eduarray[] = $row;
        }
        return $eduarray;
    }else{
        return false;
    }
}




?>