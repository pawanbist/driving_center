<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    public $table="trainers";
    
    public function fullName(){
        return $this->first_name.' '.$this->last_name;
    }
}
