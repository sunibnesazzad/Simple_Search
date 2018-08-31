<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Programming_language;
use App\Language;

class Developer extends Model
{
    protected $table ='developers';

    //many to many relationship with Language class
    public function language(){
        return $this->belongsToMany(Language::class);
    }

    //many to many relationship with programming_language class
    public function programming_language(){
        return $this->belongsToMany(Programming_language::class);
    }
}
