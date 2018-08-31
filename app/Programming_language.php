<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Developer;

class Programming_language extends Model
{
    protected $table ='programming_languages';
    //many to many relationship with developer class
    public function developer(){
        return $this->hasMany(Developer::class);
    }
}
