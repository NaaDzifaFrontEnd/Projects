<?php

require("../Controllers/commevalcontroller.php");

$ename = "";
$usercomment = "";

if(isset($_POST['submit'])){
    $ename = $_POST['name'];
    $usercomment = $_POST['comment'];

    $entry = addComment($ename, $usercomment);

    if($entry){
        echo "Comment Uploading...";

        header('Location: comments.php');
        
        exit; 
    }
}

?>