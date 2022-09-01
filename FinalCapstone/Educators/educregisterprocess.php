<?php

ob_start();

session_start();

require('../Controllers/userscontroller.php');


$userid = "";
$eduname = "";
$educategory = "";
$poscourses = "";
$edumail = "";
$edupassword = "";
$e_funfact = "";
$ephoto = "";


if (isset($_POST['eduregister'])){
    $userid = $_POST['educatorid'];
    $eduname = $_POST['educname'];
    if (!empty($_POST['category'])){
        $educategory = $_POST['category'];}
    $poscourses = $_POST['poscourse'];
    $edumail = $_POST['edumail'];
    $edupassword = md5($_POST['edupass']);
    $e_funfact = $_POST['edufunfact'];
    $ephoto = $_POST['image'];

    //add student details to database 
    $enterEducator = addEducator($userid, $eduname, $educategory,$poscourses,$edumail, $edupassword, $e_funfact, $ephoto );

    if ($enterEducator){
        $_SESSION['educatorid'] = $educator_id;

        header('Location: educatorslogin.php');
        
        exit; // should the registration fail.
    }
}



?>