<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict_name extends Model
{
    public function subdistrict_name(){
        return $this->hasMany(\App\Model\Subdistrict_name::class);
    }
}
