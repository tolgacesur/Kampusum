<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Academic extends Controller
{
    public function get_index () {
    	
    	return view('Academic.index');

    }
}
