<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
session_start();
class checkLogin extends Controller
{
    public function check(){
        if (isset($_SESSION['studData']))
            return view('index');
        else
            return view('login');
    }
}
