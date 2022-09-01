<?php

ob_start();

session_start();

require('../Controllers/userscontroller.php');

$userid = "";
$sdtname = "";
$major = "";
$sdtmail = "";
$sdtpass = "";
$sdtphoto = "";

if (isset($_POST['studentregister'])){
    $userid = $_POST['studentid'];
    $sdtname = $_POST['studentname'];
    $major = $_POST['studentmajor'];
    $sdtmail = $_POST['studentemail'];
    $sdtpass = md5($_POST['studentpassword']);
    $sdtphoto = $_POST['image'];

    //add student details to database 
    $enterStudent = addStudent($userid, $sdtname, $major, $sdtmail,$sdtpass, $sdtphoto);

    if ($enterStudent){
        $_SESSION['studentid'] = $student_id;

        header('Location: studentlogin.php');
        
        exit; // should the registration fail.
    }
}



?>