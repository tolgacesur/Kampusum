<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    protected $fillable = ['image','year','department','name','price','students','professor','timelength','created_at', 'updated_at'];
}
