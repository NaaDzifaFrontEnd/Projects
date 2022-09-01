<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();

session_start();

require ('../Controllers/userscontroller.php');

$userid = "";
$edupassword = "";

if(isset($_POST['edulogin'])){
    $userid = $_POST['educatorid'];
    $edupassword = md5($_POST['edupass']);

    $checklogin = loginEducator();

    if ($checklogin){
        $userid = $checklogin[0]['educatorid'];
        $edupassword = $checklogin[0]['edupass'];


        $_SESSION['educatorid'] = $educator_id;
         


        header('Location: rateprof.php');

        exit;

    }
}



?>