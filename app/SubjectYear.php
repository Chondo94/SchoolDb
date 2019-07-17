<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectYear extends Model
{

  protected $fillable = ['subject_id', 'year_id', 'teacher_id'];

  //esta es una relacion hijo y se coloca en singular, cuando es relacion padre va en plural
  public function year(){
    return $this->belongsTo('App\Year');
  }
  public function teacher(){
    return $this->belongsTo('App\Teacher');
  }
  public function subject(){
    return $this->belongsTo('App\Subject');
  }
}
