<?php
require_once('../Classes/evaluationclass.php');


function addEvaluation($evaluator_name, $known_period, $evaluator_id,  $evaluator_email, $educator_name, $educator_position, 
$personalityresponse, $interaction, $creativity, $dependability, $initiative, $teamwork, $org_skills, $prob_solving, $differenciation, $descriptions, $other){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> addEvaluation($evaluator_name,  $known_period, $evaluator_id, $evaluator_email, $educator_name, $educator_position, 
    $personalityresponse, $interaction, $creativity, $dependability, $initiative, $teamwork, $org_skills, $prob_solving, $differenciation, $descriptions, $other);
    if ($evaluations){
        return true;
    }
    return false;
}

function countPersonality(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countPersonality();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }
}

function countInteraction(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countInteraction();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function countCreativity(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countCreativity();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function countDependability(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countDependability();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function countInitiative(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countInitiative();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function countTeamwork(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countTeamwork();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}


function countOrgskills(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countOrgskills();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function countProbskills(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> countProbskills();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalPersonality(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalPersonality();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalInteraction(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalInteraction();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalCreativity(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalCreativity();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalDependability(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalDependability();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalInitiative(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalInitiative();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalTeamwork(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalTeamwork();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalOrgskills(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalOrgskills();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function totalProbskills(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> totalProbskills();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}

function viewAll(){
    $evaluation = new Evaluation();
    $evaluations = $evaluation-> viewAll();
    if ($evaluations){
        $evalarray = array();  
        while ($row = $evaluation->fetch()){
            $evalarray[] = $row;
        }
        return $evalarray;
    }else{
        return false;
    }

}





    









?>