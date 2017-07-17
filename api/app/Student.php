<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $table='student';
     protected $fillable=['name','sex','email','phone','brief','image','url','department','facebook','google','twitter','birthday','year','parola'];
}
