<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Developer;

class Language extends Model
{
    protected $table ='languages';
    //many to many relationship with developer class
    public function developer(){
        return $this->hasMany(Developer::class);
    }
}
