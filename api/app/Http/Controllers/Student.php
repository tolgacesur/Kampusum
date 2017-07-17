<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
     public function get_index () { 
     	
    	return view('Student.index');
    }
}
