<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = ['codigo', 'fullname', 'birthdate', 'is_active'];

    public function enrollments(){
      return $this->hasMany('App\Enrollment');
    }
}
