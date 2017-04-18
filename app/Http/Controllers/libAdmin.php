<?php
 require 'connAdmin.php';
 include_once 'libStud.php';
 session_start();

 function createAdmin($username, $password){
    $db = dbconnection();
    $password = sha1($password);    
    try{
        $sql = "INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES (NULL, '$userame','$password')";
        if($db != null){
        $db->query($sql);
        $res = $db->insert_id ;
        $db->close();
        
        if($res > 0)$_SESSION["adminData"] = array("adminId"=> $res,"username"=> $username);         
         return $res;
        }
    }catch (Exception $e){}
}

function approvstud($email){
    $db = dbconnection();
    $new = newExist($email);
    try{
        if($db != null){
            if($new != null){
                $sql = "SELECT * FROM `newstudents` WHERE `email` = '$email'";
               $res = $db->query($sql);
               $row = $res->fetch_assoc();
               $firstname = $row['firstName']; $lastName =$row['lastName']; $email = $row['email']; 
               $password = $row['password']; $degree = $row['degree']; $year = $row['year'];
               if($res->num_rows > 0){
                   var_dump($res);
                   $sql1 = "INSERT INTO `approvstudents` (`studentId`, `firstName`, `lastName`, `email`, `password`, `degree`, `year`)
                    VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '$degree', '$year' )";
                    $db->query($sql1);
                    $ness = $db->insert_id;
                     if($ness > 0)$_SESSION["approvstud"] = array("studId"=> $ness,"email"=> $email);         
         return $res;
               }
            }
        }
    }catch(Exception $e){}
}