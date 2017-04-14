<?php

session_start();

function dbconnect(){
    try{
    $db = new mysqli("localhost","administrator","info3410","projecttracker");
    if($db->connect_errno > 0) return null; 
    return $db;    
    }catch(Exception $e)
    return null;
}