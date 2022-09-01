<?php

ob_start();

session_start();

require ('../Controllers/evaluationcontroller.php');

$evaluator_name = "";
$known_period = "";
$evaluator_id = "";
$evaluator_email = "";
$educator_name = "";
$educator_position = "";
$personalityresponse = "";
$interaction = "";
$creativity= "";
$dependability = "";
$initiative = "";
$teamwork = ""; 
$org_skills = "";
$prob_solving = "";
$differenciation = "";
$descriptions = "";
$other = "";



if(isset($_POST['submit'])){
    $evaluator_name = $_POST['EvaluatorName'];

    $evaluator_id = $_POST['EvaluatorIndexNumber'];

    if (!empty($_POST['KnewStudentFor'])){
        $known_period = $_POST['KnewStudentFor'];}

    $evaluator_email = $_POST['EvaluatorEmailAddress'];

    $educator_name = $_POST["EducatorName"];

    if (!empty($_POST['Rank'])){
        $educator_position = $_POST['Rank'];}

    if (!empty($_POST['Personality'])){
        $personalityresponse = $_POST['Personality'];}

    if (!empty($_POST['Interactions'])){
        $interaction = $_POST['Interactions'];}

    if (!empty($_POST['Creativity'])){
        $creativity = $_POST['Creativity'];}

    if (!empty($_POST['Dependability'])){
        $dependability = $_POST['Dependability'];}

    if (!empty($_POST['Initiative'])){
        $initiative = $_POST['Initiative'];}

    if (!empty($_POST['Teamwork'])){
        $teamwork = $_POST['Teamwork'];}
    
    if (!empty($_POST['OrganizationalSkills'])){
        $org_skills = $_POST['OrganizationalSkills'];}
   
    if (!empty($_POST['ProblemSolving'])){
        $prob_solving = $_POST['ProblemSolving'];}

    $differenciation = $_POST['WhatDistinguishes'];

    $descriptions =  $_POST['Describe'];

    $other =  $_POST['Comments'];


    $dataentry = addEvaluation($evaluator_name, $known_period, $evaluator_id,  $evaluator_email, $educator_name, $educator_position, $personalityresponse, $interaction, $creativity, $dependability, $initiative, $teamwork, $org_skills, $prob_solving, $differenciation, $descriptions, $other);

    if ($dataentry){
        $_SESSION['evaluator_name'] = $evaluator_name;

        header('Location: ../Educators/rateprof.php');
        
        exit; // should the registration fail.


    }


}
?>