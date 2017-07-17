<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Student;
use App\Staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class Office extends Controller
{
    public function get_index () {
    	
    	return view('Office.index');
    }


// Kayıt metodları

    public function post_addStudent (Request $request) {

    	try {

    		Student::create($request->all());

    		return response(['baslik' => 'Başarılı !','icerik' => 'Değişiklikler başarı ile gerçekleşti!', 'durum' => 'success']);

    	}

    	catch (\Exception $e) {

    		return response (['baslik' => 'Hatalı !','icerik' => 'Bir sorun oluştu!'.$e, 'durum' => 'error']);

    	}

    }

    public function post_addStaff (Request $request) {

    	try {

    		Staff::create($request->all());

    		return response(['baslik' => 'Başarılı !','icerik' => 'Değişiklikler başarı ile gerçekleşti!', 'durum' => 'success']);

    	}

    	catch (\Exception $e) {

    		 return response (['baslik' => 'Hatalı !','icerik' => 'Bir sorun oluştu!'.$e, 'durum' => 'error']);
    	}
    }

    public function post_addCourse (Request $request) {
		
		try {

    		Courses::create($request->all());

    		return response (['baslik' => 'Başarılı !','icerik' => 'Değişiklikler başarı ile gerçekleşti!', 'durum' => 'success']);

    	}

    	catch (\Exception $e) {
             return response (['baslik' => 'Hatalı !','icerik' => 'Bir sorun oluştu!'.$e, 'durum' => 'error']);
        }

    }

// Düzenleme metodları

    public function post_editStudent () {
//
    }

    public function post_editStuff () {
//
    }

    public function post_editCourse () {

//
    }

}
