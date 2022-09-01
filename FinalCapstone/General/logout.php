<?php

//start session
session_start();

// remove all session variables
unset($_SESSION['userid']);


header('Location: index.html');
?>