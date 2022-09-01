<!--This file inputs and collects all data on all users of these system: students, staff and professors-->

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../Database/connection.php');

class Users extends Connection{

    // Students Record
    function addStudent($userid, $sdtname, $major,$sdtmail, $sdtpass, $sdtphoto){
        $query = "INSERT INTO student(student_id, student_name, student_major,student_email, student_password, student_photo) VALUES ('$userid', '$sdtname', '$major', '$sdtmail','$sdtpass', '$sdtphoto')";
        return $this -> query($query);
    }

    function updateStudent($userid, $sdtname, $major, $sdtmail,$sdtpass, $sdtphoto){
        $query = "UPDATE student SET student_id = '$userid', student_name = '$sdtname', student_major = '$major', student_email = '$sdtmail', student_password = '$sdtpass', student_photo = '$sdtphoto' 
        WHERE student_id = '$userid'";
        return $this -> query($query);        
    }

    function deleteStudent($userid){
        $query = "DELETE FROM student WHERE student_id = '$userid'";
        return $this -> query($query);
    }

    function loginStudent($userid, $sdtpass){
        $query = "SELECT * FROM student WHERE student_id = '$userid' AND student_password = '$sdtpass'";
        $this -> query($query);
        return $this -> fetch();
    }

    function studentExist($userid){
        $query = "SELECT * FROM student WHERE student_id = '$userid'";
        $this -> query($query);
        return $this -> fetch();
    }



    //Educator Record
    function addEducator($userid, $eduname, $educategory,$poscourses,$edumail, $edupassword, $e_funfact, $eduphoto){
        $query = "INSERT INTO educators(educator_id, educator_name, category, pos_course, educator_email, epassword, fun_fact, ephoto) VALUES ('$userid', '$eduname', '$category','$poscourses','$edumail', '$edupassword', '$e_funfact', '$eduphoto')";
        return $this -> query($query);
    }

    function updateEducator($userid, $eduname, $educategory,$poscourses,$edumail, $edupassword, $e_funfact, $eduphoto){
        $query = "UPDATE educators SET educator_id = '$userid', educator_name = '$eduname', category = '$educategory', pos_course = '$poscourses', educator_email - '$edumail', epassword = '$edupassword', funfact = '$e_funfact' ,ephoto = '$eduphoto' 
        WHERE educator_id = '$userid'";
        return $this -> query($query);        
    }

    function deleteEducator($userid){
        $query = "DELETE FROM educators WHERE educator_id = '$userid'";
        return $this -> query($query);
    }

    function loginEducator(){
        $query = "SELECT educator_id, epassword FROM educators ";
        $this -> query($query);
        return $this -> fetch($query);
    }

    function educatorExist($userid){
        $query = "SELECT * FROM educators WHERE educator_id = '$userid'";
        $this -> query($query);
        return $this -> fetch($query);
    }

    function viewEducator(){
        $query = "SELECT  * FROM educators ORDER BY educator_id DESC";
        return $this -> query($query);
        return $this -> fetch($query);
    }
    
      



}

?>