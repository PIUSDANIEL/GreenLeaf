<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist_role extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_specialistid',
        'specialistid',
        
    ];

   // public function getuserspecialist(){
      // return $this->hasMany(user_specialist::class,'id','user_specialistid');
   // }
}
