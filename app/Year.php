<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = ['year', 'is_active'];

    //esta relacion es de uno a muchos
    public function subjectYears(){
      return $this->belongsToMany('App\SubjectYear');
    }
    //hasta aca termina la realcion
}
