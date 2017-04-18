<?php

session_start();

function dbconnection(){
    try{
        $db = new mysqli("localhost","student","info3410","projecttracker");
        if($db->connect_errno > 0) return null;
        return $db;
    }catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    
}