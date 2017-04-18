<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use Illuminate\Support\Facades\Input;

class newuser extends Controller
{
    public function create(){
         
    }

    public function store(Request $request){
         $student = new Student;
         $student->firstName = Input::get("first_name");
         $student->lastName = Input::get("last_name");
         $student->userName = Input::get("user_name");
         $student->password = sha1(Input::get("user_password"));
         $student->email = Input::get("email");
         $student->contact = Input::get("contact_no");
         $student->degree = Input::get("degree");
         $student->save();
    
         echo "New Student Created";
    }
}