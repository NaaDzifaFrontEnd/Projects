<?php

require_once("../Classes/commevalclass.php");

function addComment($ename, $usercomment){
    $comment = new Commeval();
    $comments = $comment-> addComment($ename,$usercomment);
    if ($comments){
        return true;
    }
    return false;
}



function viewComment(){
    
    $comment = new Commeval();
    $comments = $comment-> viewComment();
    if ($comments){
        $commentarray = array();
        while ($row = $comment -> fetch()){
            $commentarray[] = $row;
        }
        return $commentarray;
    }else{
        return false;
    }
}



?>