<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    
     protected $table='staff';
     protected $fillable=['name','sex','email','phone','brief','image','url','department','facebook','google','twitter','birthday','position','parola'];
}
