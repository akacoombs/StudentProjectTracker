<?php
    session_start();



    
    if ((isset($POST['first_name']))
    && (isset($POST['last_name']))
    && (isset($POST['degree']))
    && (isset($POST['user_name']))
    && (isset($POST['user_password']))
    && (isset($POST['email']))
    && (isset($POST['contact_no']))
    ){
    $firstname = $POST['first_name'];
    $lastname = $POST['last_name'];
    $degree = $POST['degree'];
    $username = $POST['user_name'];
    $password = $POST['user_password'];
    $email = $POST['email'];
    $number = $POST['contact_no'];

    echo "test";
    }
    else 
        echo "Not set";
    var_dump($POST['first_name']);

    ?>