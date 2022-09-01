<?php
require_once('../Database/connection.php');

class Evaluation extends Connection{
    function addEvaluation($evaluator_name, $known_period, $evaluator_id,  $evaluator_email, $educator_name, $educator_position, 
    $personalityresponse, $interaction, $creativity, $dependability, $initiative, $teamwork, $org_skills, $prob_solving, $differenciation, $descriptions, $other){

    $query= "INSERT INTO evaluation (evaluator_name,known_period, evaluator_id, evaluator_email, educator_name, educator_position,
    personalities, interaction, creativity, dependability,initiative, teamwork, org_skills,prob_solving, different, userdescription ,other ) 

    VALUES ('$evaluator_name', '$known_period', '$evaluator_id',  '$evaluator_email', '$educator_name', '$educator_position', 
    '$personalityresponse', '$interaction', '$creativity', '$dependability', '$initiative', '$teamwork', '$org_skills',' $prob_solving', '$differenciation', '$descriptions', '$other')";

    return $this -> query($query);
    }

    function countPersonality(){
        $query = "SELECT COUNT (personalities) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countInteraction(){
        $query = "SELECT COUNT (interaction) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countCreativity(){
        $query = "SELECT COUNT (creativity) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countDependability(){
        $query = "SELECT COUNT (dependability) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countInitiative(){
        $query = "SELECT COUNT (initiative) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countTeamwork(){
        $query = "SELECT COUNT (teamwork) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countOrgskills(){
        $query = "SELECT COUNT (org_skills) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function countProbskills(){
        $query = "SELECT COUNT (prob_solving) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalPersonality(){
        $query = "SELECT SUM (personalities) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalInteraction(){
        $query = "SELECT SUM (interaction) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalCreativity(){
        $query = "SELECT SUM (creativity) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalDependability(){
        $query = "SELECT SUM (dependability) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalInitiative(){
        $query = "SELECT SUM (initiative) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalTeamwork(){
        $query = "SELECT SUM (teamwork) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalOrgskills(){
        $query = "SELECT SUM (personalities) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function totalProbskills(){
        $query = "SELECT SUM (personalities) FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);


    }

    function viewAll(){
        $query = "SELECT  different, userdescription  FROM evaluation";
        return $this -> query($query);
        return $this -> fetch($query);
    }




    


}


?>