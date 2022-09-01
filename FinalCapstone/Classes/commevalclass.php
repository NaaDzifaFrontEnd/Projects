<?php

require_once('../Database/connection.php');

class Commeval extends Connection{

    //comments record
    function addComment($ename, $usercomment){
        $query = "INSERT INTO comments(eduname, comment) VALUES ('$ename', '$usercomment')";
        return $this -> query($query);
    }



    function viewComment(){
        $query = "SELECT comment FROM comments";
        $this -> query($query);
        return $this -> fetch($query);
    }
    

}

?>