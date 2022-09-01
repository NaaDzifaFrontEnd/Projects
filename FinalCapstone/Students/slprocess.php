<?php

session_start();

require('../Controllers/userscontroller.php');

$userid = "";
$sdtpass = "";

if (isset($_POST['studentlogin'])){
    $userid = $_POST['studentid'];
    $sdtpass = md5($_POST['studentpassword']);

    $checklogin = loginStudent($userid, $sdtpass);

    if ($checklogin){
        $userid = $checklogin['studentid'];
        $sdtpass = $checklogin['studentpassword']; 


        $_SESSION['studentid'] = $student_id;


        header('Location: rateprofessorpage.php');

        exit;

    }
}



?>