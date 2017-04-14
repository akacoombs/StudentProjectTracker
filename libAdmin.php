<?php
 require 'connAdmin.php';
 include_once 'libStud.php';

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
    return null;
}

function approvstud($email){
    $db = dbconnection();
    $new = newExist($email);
    try{
        if($db != null){
            if($new != null){
                $sql = "SELECT * FROM `newstudents` WHERE `email` = '$email'";
               $res = $db->query($sql);
               if($res->num_rows > 0){
                   var_dump($res);
                   $sql1 = "INSERT INTO `approvstudents` (`studentId`, `firstName`, `lastName`, `email`, `password`, `degree`, `year`)
                    VALUES (NULL, '$res['firstname']', '$res['lastName']', '$res['email']', '$res['password']', '$res['degree']', '$res['year']')";
                    $db->query($sql1);
                    $ness = $db->insert_id;
                     if($ness > 0)$_SESSION["approvstud"] = array("studId"=> $ness,"email"=> $email);         
         return $res;
               }
            }
        }
    }catch(Exception $e){}
return null; 
}