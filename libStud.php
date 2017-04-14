<?php
 require 'connStud.php';


function newExists($email){
    $db = dbconnection();
    try{
        $sql = "SELECT * FROM `newstudents` WHERE `email` = '$email' ";
    if($db != null){
        $res = $db->query($sql);
        if($res->num_rows > 0) return $res;
    }

}catch(Exception $e){}
return null;
}


function approvExists($email){
    $db = dbconnection();
    try{
        $sql = "SELECT * FROM `approvstudents` WHERE `email` = '$email' ";
    if($db != null){
        $res = $db->query($sql);
        if($res->num_rows > 0) return $res;
    }

}catch(Exception $e){}
return null;
}

function createStud($firstName, $lastName, $email, $password, $degree, $year){
    $db = dbconnection();
    $password = sha1($password);    
    try{
        $sql = "INSERT INTO `newstudents` (`studentId`, `firstName`, `lastName`, `email`, `password`, `degree`, `year`) VALUES (NULL, '$firstName', '$lastName', '$email', '$password', '$degree', '$year')";
        if($db != null){
        $db->query($sql);
        $res = $db->insert_id ;
        $db->close();
        
        if($res > 0)$_SESSION["studData"] = array("studId"=> $res,"email"=> $email);         
         return $res;
        }
    }catch (Exception $e){}
    return null;
}

function loginStud($email , $password){
    $password = sha1($password);    
    $res = checkLogin($email , $password);
    try{
    if($res != null){
        $user = $res->fetch_assoc();
        var_dump($user);

        $_SESSION["studData"]= array(
            "studId"=> $user['StudentId'],
            "email"=> $user['email']);
        echo " Login Successful";
    }else{
       return json_encode(array("status"=>"failure"));
    }
}catch(Exception $e){}
}

function checkLogin($email , $password){
     $password = sha1($password);
     $db = dbconnection();
     $app = approvExists($email);
     $new = newExists($email);
      echo var_dump($app);
      echo var_dump($new);
      try{
      if($app != null){
        if($app && $row = $app->fetch_assoc())
            if($row['password']== $password) return $row;
    }else if($new != null){
         if($new && $row2 = $new->fetch_assoc())
            if($row2['password']== $password) return $row2;     
}
      }catch(Exception $e){}
      return null;
}

function deleteAccount($email, $password){
    $password = sha1($password);
    $sql = "DELETE FROM `newstudents` WHERE `newstudents`.`email` = \"{$email}\" AND `newstudents`.`password` = \"{$password}\"";
    $db = dbconnection();
    try{
        if($db!= null){
            $res = $db->query($sql);
            if($res->num_rows == 0 ) return json_encode(array("status"=>"deleted")); 
        }else
        json_encode(array("status"=>"failure"));

    }catch(Exception $e){}
}


?>