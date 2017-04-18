<?php
    require 'libStud.php';
    require 'connStud.php';
    session_start();


    if (isset($POST['email']) && isset($POST['password'])){

        $db = dbconnection();
        try{
            $email = $POST['email'];
            $sql = "SELECT * FROM approvstudents where email = '$email'";
            if ($db !=null){
                $res = $db->query($sql);
                $row = $res->fetch_assoc();
                if ($POST['password'] === $row['password']){
                    $_SESSION["studData"] = array("studId"=> $res,"email"=> $email);
                    return view('index');
                }
                else
                    echo "Invalid Username And/Or Password";
            }
        }catch (Exception $e){}    
            
    }

?>